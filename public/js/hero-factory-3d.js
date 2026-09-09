/**
 * Track Tech Solution - 3D Isometric Factory Blueprint Engine
 * Pure HTML5 Canvas + JavaScript (No Three.js)
 */

(function() {
  'use strict';

  const canvas = document.getElementById('hero-factory-canvas');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let width = (canvas.width = canvas.parentElement.clientWidth || 500);
  let height = (canvas.height = canvas.parentElement.clientHeight || 480);

  let mouseX = 0;
  let mouseY = 0;
  let rotAngle = 0;

  // Track cursor relative to stage
  window.addEventListener('mousemove', (e) => {
    const rect = canvas.getBoundingClientRect();
    mouseX = ((e.clientX - rect.left) / width - 0.5) * 2;
    mouseY = ((e.clientY - rect.top) / height - 0.5) * 2;
  });

  window.addEventListener('resize', () => {
    if (!canvas.parentElement) return;
    width = canvas.width = canvas.parentElement.clientWidth;
    height = canvas.height = canvas.parentElement.clientHeight;
  });

  // Isometric 3D Projection Helper
  function projectIso(x, y, z, angle) {
    // Y-rotation
    const rad = angle;
    const cos = Math.cos(rad);
    const sin = Math.sin(rad);

    const rx = x * cos - z * sin;
    const rz = x * sin + z * cos;

    // Isometric projection
    const isoX = width / 2 + rx * 1.5 - rz * 1.5 + mouseX * 25;
    const isoY = height / 2 + (rx * 0.75 + rz * 0.75) * 0.85 - y * 1.6 + mouseY * 20;

    return { x: isoX, y: isoY, z: rz };
  }

  // Draw 3D Isometric Line
  function drawIsoLine(p1, p2, color = 'rgba(0, 240, 255, 0.4)', lineWidth = 1) {
    ctx.beginPath();
    ctx.moveTo(p1.x, p1.y);
    ctx.lineTo(p2.x, p2.y);
    ctx.strokeStyle = color;
    ctx.lineWidth = lineWidth;
    ctx.stroke();
  }

  // Draw 3D Isometric Box (Factory Station)
  function drawIsoStation(cx, cy, cz, w, h, d, label, color = '#00f0ff', angle = 0, time = 0) {
    const hw = w / 2;
    const hd = d / 2;

    const v = [
      projectIso(cx - hw, cy, cz - hd, angle),
      projectIso(cx + hw, cy, cz - hd, angle),
      projectIso(cx + hw, cy, cz + hd, angle),
      projectIso(cx - hw, cy, cz + hd, angle),
      projectIso(cx - hw, cy + h, cz - hd, angle),
      projectIso(cx + hw, cy + h, cz - hd, angle),
      projectIso(cx + hw, cy + h, cz + hd, angle),
      projectIso(cx - hw, cy + h, cz + hd, angle)
    ];

    // Top Face
    ctx.beginPath();
    ctx.moveTo(v[4].x, v[4].y);
    ctx.lineTo(v[5].x, v[5].y);
    ctx.lineTo(v[6].x, v[6].y);
    ctx.lineTo(v[7].x, v[7].y);
    ctx.closePath();
    ctx.fillStyle = 'rgba(10, 25, 55, 0.85)';
    ctx.fill();
    ctx.strokeStyle = color;
    ctx.lineWidth = 1.2;
    ctx.stroke();

    // Side Faces
    ctx.beginPath();
    ctx.moveTo(v[7].x, v[7].y);
    ctx.lineTo(v[6].x, v[6].y);
    ctx.lineTo(v[2].x, v[2].y);
    ctx.lineTo(v[3].x, v[3].y);
    ctx.closePath();
    ctx.fillStyle = 'rgba(6, 15, 35, 0.9)';
    ctx.fill();
    ctx.stroke();

    // Pulse core
    const centerTop = {
      x: (v[4].x + v[6].x) / 2,
      y: (v[4].y + v[6].y) / 2
    };

    ctx.beginPath();
    ctx.arc(centerTop.x, centerTop.y, 3 + Math.sin(time * 3 + cx) * 1.2, 0, Math.PI * 2);
    ctx.fillStyle = color;
    ctx.shadowColor = color;
    ctx.shadowBlur = 8;
    ctx.fill();
    ctx.shadowBlur = 0;

    // Label
    ctx.font = '10px "Space Grotesk", sans-serif';
    ctx.fillStyle = '#cbd5e1';
    ctx.textAlign = 'center';
    ctx.fillText(label, centerTop.x, centerTop.y - 12);
  }

  // Animation Loop
  let time = 0;
  function render() {
    time += 0.015;
    rotAngle = time * 0.4 + mouseX * 0.3;

    ctx.clearRect(0, 0, width, height);

    // 1. Draw 3D Isometric Grid Floor
    const gridSize = 4;
    const spacing = 35;
    for (let gx = -gridSize; gx <= gridSize; gx++) {
      const p1 = projectIso(gx * spacing, 0, -gridSize * spacing, rotAngle);
      const p2 = projectIso(gx * spacing, 0, gridSize * spacing, rotAngle);
      drawIsoLine(p1, p2, 'rgba(0, 240, 255, 0.12)', 1);

      const p3 = projectIso(-gridSize * spacing, 0, gx * spacing, rotAngle);
      const p4 = projectIso(gridSize * spacing, 0, gx * spacing, rotAngle);
      drawIsoLine(p3, p4, 'rgba(0, 240, 255, 0.12)', 1);
    }

    // 2. Draw 5 Smart Production Floor Stations
    const stations = [
      { x: -75, z: -75, label: 'Fabric Inward', color: '#10b981' },
      { x: 75, z: -75, label: 'Cutting CAD', color: '#f59e0b' },
      { x: 0, z: 0, label: 'Sewing Line 01', color: '#00f0ff' },
      { x: -75, z: 75, label: 'AI QC Station', color: '#38bdf8' },
      { x: 75, z: 75, label: 'Finishing OEE', color: '#a855f7' }
    ];

    stations.forEach(s => {
      drawIsoStation(s.x, 0, s.z, 28, 16, 28, s.label, s.color, rotAngle, time);
    });

    // 3. Connect Stations with Laser Data Lines & Traveling Pulses
    for (let i = 0; i < stations.length - 1; i++) {
      const pA = projectIso(stations[i].x, 16, stations[i].z, rotAngle);
      const pB = projectIso(stations[i + 1].x, 16, stations[i + 1].z, rotAngle);
      drawIsoLine(pA, pB, 'rgba(0, 240, 255, 0.3)', 1);

      // Pulse particle
      const pulseProg = (time * 1.5 + i * 0.25) % 1;
      const px = pA.x + (pB.x - pA.x) * pulseProg;
      const py = pA.y + (pB.y - pA.y) * pulseProg;

      ctx.beginPath();
      ctx.arc(px, py, 2.5, 0, Math.PI * 2);
      ctx.fillStyle = '#fff';
      ctx.shadowColor = '#00f0ff';
      ctx.shadowBlur = 10;
      ctx.fill();
      ctx.shadowBlur = 0;
    }

    // 4. Scanning Radar Ring
    const radarRadius = 110;
    const rProg = (time * 0.8) % 1;
    const curRad = radarRadius * rProg;
    const ringCenter = projectIso(0, 0, 0, rotAngle);

    ctx.save();
    ctx.beginPath();
    ctx.ellipse(ringCenter.x, ringCenter.y, curRad * 1.4, curRad * 0.7, 0, 0, Math.PI * 2);
    ctx.strokeStyle = `rgba(0, 240, 255, ${(1 - rProg) * 0.4})`;
    ctx.lineWidth = 1.5;
    ctx.stroke();
    ctx.restore();

    requestAnimationFrame(render);
  }

  render();
})();
