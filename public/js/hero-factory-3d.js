/**
 * Track Tech Solution - Interactive 3D Factory Blueprint & Telemetry Stage
 * Clean Luxury Light Theme with Isometric Floating Nodes & Real-time Flow
 */

(function() {
  'use strict';

  const canvas = document.getElementById('hero-factory-canvas');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let width = (canvas.width = canvas.parentElement.clientWidth || 540);
  let height = (canvas.height = canvas.parentElement.clientHeight || 500);

  let mouseX = 0;
  let mouseY = 0;
  let rotAngle = 0;

  window.addEventListener('mousemove', (e) => {
    const rect = canvas.getBoundingClientRect();
    mouseX = ((e.clientX - rect.left) / width - 0.5) * 1.5;
    mouseY = ((e.clientY - rect.top) / height - 0.5) * 1.5;
  });

  window.addEventListener('resize', () => {
    if (!canvas.parentElement) return;
    width = canvas.width = canvas.parentElement.clientWidth;
    height = canvas.height = canvas.parentElement.clientHeight;
  });

  // Isometric 3D Projection
  function projectIso(x, y, z, angle) {
    const cos = Math.cos(angle);
    const sin = Math.sin(angle);

    const rx = x * cos - z * sin;
    const rz = x * sin + z * cos;

    const isoX = width / 2 + (rx - rz) * 1.3 + mouseX * 20;
    const isoY = height / 2 + (rx + rz) * 0.65 - y * 1.4 + mouseY * 15;

    return { x: isoX, y: isoY, z: rz };
  }

  // Factory Nodes / Production Stages
  const nodes = [
    { label: 'Fabric Inward (FIM)', x: -100, y: 0, z: -80, color: '#0284c7', icon: '📦', metric: '99.4% Sync' },
    { label: 'Auto Cutting Table', x: 0, y: 15, z: -80, color: '#8b5cf6', icon: '✂️', metric: '98.8% Yield' },
    { label: 'Sewing Line Alpha', x: -100, y: 0, z: 60, color: '#0ea5e9', icon: '🧵', metric: '94.2% Eff' },
    { label: 'Sewing Line Beta', x: 0, y: 0, z: 60, color: '#0ea5e9', icon: '🧵', metric: '91.8% Eff' },
    { label: 'AI Quality Station (QMS)', x: 100, y: 25, z: -10, color: '#10b981', icon: '🔍', metric: '0.4% Defect' },
    { label: 'Cloud Executive Hub', x: 0, y: 85, z: -10, color: '#6366f1', icon: '⚡', metric: 'Real-Time' }
  ];

  // Animated Data Packets
  const packets = [];
  for (let i = 0; i < 8; i++) {
    packets.push({
      fromNode: Math.floor(Math.random() * (nodes.length - 1)),
      toNode: 5, // Stream up to Cloud Hub
      progress: Math.random(),
      speed: 0.008 + Math.random() * 0.012
    });
  }

  let time = 0;

  function drawStage() {
    ctx.clearRect(0, 0, width, height);
    time += 0.02;
    rotAngle = Math.sin(time * 0.3) * 0.12;

    // Draw Light Isometric Grid Base
    ctx.strokeStyle = 'rgba(226, 232, 240, 0.75)';
    ctx.lineWidth = 1;
    const gridSize = 140;
    const gridStep = 35;

    for (let gx = -gridSize; gx <= gridSize; gx += gridStep) {
      const p1 = projectIso(gx, 0, -gridSize, rotAngle);
      const p2 = projectIso(gx, 0, gridSize, rotAngle);
      ctx.beginPath();
      ctx.moveTo(p1.x, p1.y);
      ctx.lineTo(p2.x, p2.y);
      ctx.stroke();
    }
    for (let gz = -gridSize; gz <= gridSize; gz += gridStep) {
      const p1 = projectIso(-gridSize, 0, gz, rotAngle);
      const p2 = projectIso(gridSize, 0, gz, rotAngle);
      ctx.beginPath();
      ctx.moveTo(p1.x, p1.y);
      ctx.lineTo(p2.x, p2.y);
      ctx.stroke();
    }

    // Draw Connection Pipelines between Nodes
    const links = [
      [0, 1], [1, 2], [1, 3], [2, 4], [3, 4], [4, 5], [0, 5], [1, 5]
    ];

    links.forEach(([fromIdx, toIdx]) => {
      const n1 = nodes[fromIdx];
      const n2 = nodes[toIdx];
      const p1 = projectIso(n1.x, n1.y, n1.z, rotAngle);
      const p2 = projectIso(n2.x, n2.y, n2.z, rotAngle);

      // Gradient Pipeline
      const lineGrad = ctx.createLinearGradient(p1.x, p1.y, p2.x, p2.y);
      lineGrad.addColorStop(0, n1.color);
      lineGrad.addColorStop(1, n2.color);

      ctx.beginPath();
      ctx.moveTo(p1.x, p1.y);
      ctx.lineTo(p2.x, p2.y);
      ctx.strokeStyle = lineGrad;
      ctx.lineWidth = 2;
      ctx.stroke();
    });

    // Draw Flowing Data Packets
    packets.forEach(packet => {
      packet.progress += packet.speed;
      if (packet.progress >= 1) {
        packet.progress = 0;
        packet.fromNode = Math.floor(Math.random() * (nodes.length - 1));
      }

      const n1 = nodes[packet.fromNode];
      const n2 = nodes[packet.toNode];
      const p1 = projectIso(n1.x, n1.y, n1.z, rotAngle);
      const p2 = projectIso(n2.x, n2.y, n2.z, rotAngle);

      const px = p1.x + (p2.x - p1.x) * packet.progress;
      const py = p1.y + (p2.y - p1.y) * packet.progress;

      ctx.beginPath();
      ctx.arc(px, py, 4, 0, Math.PI * 2);
      ctx.fillStyle = '#0ea5e9';
      ctx.shadowColor = 'rgba(14, 165, 233, 0.8)';
      ctx.shadowBlur = 8;
      ctx.fill();
      ctx.shadowBlur = 0;
    });

    // Draw 3D Stations / Nodes
    nodes.forEach((node, idx) => {
      const bob = Math.sin(time * 2 + idx) * 4;
      const pos = projectIso(node.x, node.y + bob, node.z, rotAngle);

      // Station Base Shadow
      const shadowPos = projectIso(node.x, 0, node.z, rotAngle);
      ctx.beginPath();
      ctx.ellipse(shadowPos.x, shadowPos.y, 18, 9, 0, 0, Math.PI * 2);
      ctx.fillStyle = 'rgba(15, 23, 42, 0.08)';
      ctx.fill();

      // Station Card / Node Pill
      ctx.save();
      ctx.translate(pos.x, pos.y);

      // Glowing Node Center
      ctx.beginPath();
      ctx.arc(0, 0, 22, 0, Math.PI * 2);
      ctx.fillStyle = '#ffffff';
      ctx.strokeStyle = node.color;
      ctx.lineWidth = 2.5;
      ctx.shadowColor = 'rgba(14, 165, 233, 0.25)';
      ctx.shadowBlur = 12;
      ctx.fill();
      ctx.stroke();
      ctx.shadowBlur = 0;

      // Icon
      ctx.font = '14px "Plus Jakarta Sans", sans-serif';
      ctx.textAlign = 'center';
      ctx.textBaseline = 'middle';
      ctx.fillText(node.icon, 0, 1);

      // Label & Telemetry Badge
      ctx.font = 'bold 11px "Plus Jakarta Sans", sans-serif';
      ctx.fillStyle = '#0f172a';
      ctx.fillText(node.label, 0, -28);

      ctx.font = '9px "Space Grotesk", sans-serif';
      ctx.fillStyle = node.color;
      ctx.fillText(node.metric, 0, 32);

      ctx.restore();
    });

    requestAnimationFrame(drawStage);
  }

  drawStage();
})();
