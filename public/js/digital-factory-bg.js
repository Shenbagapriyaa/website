/**
 * Track Tech Solution - 3D Digital Cyber Matrix Background Engine
 * Pure Vanilla JavaScript + HTML5 Canvas + Tailwind CSS (No Three.js)
 * 
 * Features:
 * - 3D Perspective Depth Projection (X, Y, Z coordinates with smooth parallax)
 * - Pure, minimal, luminous 3D cyber micro-particles (No clutter, no text badges)
 * - Glowing Laser Connections with traveling energy photon pulses
 * - Smooth Cursor Parallax Tracking
 * - On-Click Gravity Warp: Particles fly dynamically toward cursor with depth burst
 */

(function() {
  'use strict';

  const canvas = document.getElementById('digital-factory-canvas');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let width = (canvas.width = window.innerWidth);
  let height = (canvas.height = window.innerHeight);

  // Configuration
  const FOV = 460;
  const PARTICLE_COUNT = 115;
  const MAX_CONNECT_DIST = 145;

  let mouseX = width / 2;
  let mouseY = height / 2;
  let targetParallaxX = 0;
  let targetParallaxY = 0;
  let parallaxX = 0;
  let parallaxY = 0;

  // On-Click Attraction State
  const clickImpulse = {
    active: false,
    x: 0,
    y: 0,
    power: 0,
    decay: 0.94
  };

  // Color palette for 3D particles
  const PARTICLE_COLORS = [
    '#00f0ff', // Neon Cyan
    '#38bdf8', // Sky Blue
    '#60a5fa', // Soft Blue
    '#818cf8', // Indigo
    '#a855f7'  // Neon Purple
  ];

  // Particle Class with true 3D Depth
  class Particle {
    constructor() {
      this.reset();
      this.z = Math.random() * 800 - 400; // Random initial depth
    }

    reset() {
      this.x = (Math.random() - 0.5) * (width * 1.5);
      this.y = (Math.random() - 0.5) * (height * 1.5);
      this.z = 400;
      this.vx = (Math.random() - 0.5) * 0.55;
      this.vy = (Math.random() - 0.5) * 0.55;
      this.vz = (Math.random() - 0.5) * 0.4;
      this.baseRadius = Math.random() * 2.2 + 1.2;
      this.color = PARTICLE_COLORS[Math.floor(Math.random() * PARTICLE_COLORS.length)];
      this.pulseSpeed = 0.02 + Math.random() * 0.03;
      this.pulseVal = Math.random() * Math.PI * 2;
    }

    update() {
      // Gentle floating motion
      this.x += this.vx;
      this.y += this.vy;
      this.z += this.vz;
      this.pulseVal += this.pulseSpeed;

      // Wrap around 3D boundaries smoothly
      const boundX = width * 0.8;
      const boundY = height * 0.8;
      if (this.x < -boundX) this.x = boundX;
      if (this.x > boundX) this.x = -boundX;
      if (this.y < -boundY) this.y = boundY;
      if (this.y > boundY) this.y = -boundY;
      if (this.z < -400) this.z = 400;
      if (this.z > 400) this.z = -400;

      // On-Click Gravity Warp (Particles fly toward cursor)
      if (clickImpulse.active && clickImpulse.power > 0.04) {
        const targetX = clickImpulse.x - width / 2;
        const targetY = clickImpulse.y - height / 2;

        const dx = targetX - this.x;
        const dy = targetY - this.y;
        const dist = Math.sqrt(dx * dx + dy * dy) + 1;

        const force = (clickImpulse.power * 24) / Math.max(dist * 0.07, 1);
        this.x += (dx / dist) * force;
        this.y += (dy / dist) * force;
        this.z -= force * 0.45; // Depth acceleration toward screen
      }
    }

    get2DProjected() {
      // 3D Perspective Projection
      const depth = this.z + FOV + parallaxY * 0.2;
      if (depth <= 0) return null;

      const scale = FOV / depth;
      const screenX = (this.x + parallaxX) * scale + width / 2;
      const screenY = (this.y + parallaxY) * scale + height / 2;
      const pulseFactor = 1 + Math.sin(this.pulseVal) * 0.2;
      const radius = Math.max(0.6, this.baseRadius * scale * pulseFactor);
      const alpha = Math.min(1, Math.max(0.12, (1 - this.z / 480) * 0.82));

      return { x: screenX, y: screenY, radius, scale, alpha, z: this.z };
    }
  }

  // Initialize Particles
  const particles = [];
  for (let i = 0; i < PARTICLE_COUNT; i++) {
    particles.push(new Particle());
  }

  // Traveling Data Synapses (Photons)
  const synapses = [];
  class Synapse {
    constructor(p1, p2) {
      this.p1 = p1;
      this.p2 = p2;
      this.progress = 0;
      this.speed = 0.016 + Math.random() * 0.022;
    }
    update() {
      this.progress += this.speed;
    }
  }

  // Mouse Parallax
  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;

    targetParallaxX = (mouseX - width / 2) * -0.22;
    targetParallaxY = (mouseY - height / 2) * -0.22;

    document.documentElement.style.setProperty('--mx', `${e.clientX}px`);
    document.documentElement.style.setProperty('--my', `${e.clientY}px`);
  });

  // On-Click Gravity Warp Event
  window.addEventListener('click', (e) => {
    clickImpulse.active = true;
    clickImpulse.x = e.clientX;
    clickImpulse.y = e.clientY;
    clickImpulse.power = 1.0;

    createClickBurst(e.clientX, e.clientY);
  });

  function createClickBurst(x, y) {
    const burst = document.createElement('div');
    burst.className = 'cursor-click-wave';
    burst.style.left = `${x}px`;
    burst.style.top = `${y}px`;
    document.body.appendChild(burst);
    setTimeout(() => burst.remove(), 700);
  }

  window.addEventListener('resize', () => {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
  });

  // Main Render Loop
  let frame = 0;
  function render() {
    frame++;
    ctx.clearRect(0, 0, width, height);

    // Smooth Parallax Interpolation
    parallaxX += (targetParallaxX - parallaxX) * 0.06;
    parallaxY += (targetParallaxY - parallaxY) * 0.06;

    // Decay Click Impulse
    if (clickImpulse.active) {
      clickImpulse.power *= clickImpulse.decay;
      if (clickImpulse.power < 0.01) {
        clickImpulse.active = false;
        clickImpulse.power = 0;
      }
    }

    // Project and update all particles
    const projectedList = [];
    particles.forEach(p => {
      p.update();
      const proj = p.get2DProjected();
      if (proj) {
        projectedList.push({ particle: p, proj });
      }
    });

    // Sort by Z for realistic 3D depth layering
    projectedList.sort((a, b) => b.proj.z - a.proj.z);

    // 1. Draw Subtle Luminous Connection Lines
    for (let i = 0; i < projectedList.length; i++) {
      const a = projectedList[i];
      for (let j = i + 1; j < projectedList.length; j++) {
        const b = projectedList[j];

        const dx = a.proj.x - b.proj.x;
        const dy = a.proj.y - b.proj.y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < MAX_CONNECT_DIST) {
          const lineAlpha = (1 - dist / MAX_CONNECT_DIST) * 0.28 * Math.min(a.proj.alpha, b.proj.alpha);

          ctx.beginPath();
          ctx.moveTo(a.proj.x, a.proj.y);
          ctx.lineTo(b.proj.x, b.proj.y);
          ctx.strokeStyle = `rgba(0, 240, 255, ${lineAlpha})`;
          ctx.lineWidth = 0.65 * Math.min(a.proj.scale, 1.2);
          ctx.stroke();

          // Spawn occasional traveling photon pulses
          if (frame % 90 === 0 && Math.random() > 0.75 && synapses.length < 16) {
            synapses.push(new Synapse(a, b));
          }
        }
      }
    }

    // 2. Render & Update Traveling Energy Photons
    for (let s = synapses.length - 1; s >= 0; s--) {
      const syn = synapses[s];
      syn.update();

      if (syn.progress >= 1) {
        synapses.splice(s, 1);
        continue;
      }

      const p1 = syn.p1.proj;
      const p2 = syn.p2.proj;
      const sx = p1.x + (p2.x - p1.x) * syn.progress;
      const sy = p1.y + (p2.y - p1.y) * syn.progress;

      ctx.beginPath();
      ctx.arc(sx, sy, 2.2 * p1.scale, 0, Math.PI * 2);
      ctx.fillStyle = '#ffffff';
      ctx.shadowColor = '#00f0ff';
      ctx.shadowBlur = 8;
      ctx.fill();
      ctx.shadowBlur = 0;
    }

    // 3. Draw Clean Glowing 3D Micro-Nodes (No diamond boxes, no text labels)
    projectedList.forEach(({ particle, proj }) => {
      ctx.beginPath();
      ctx.arc(proj.x, proj.y, proj.radius, 0, Math.PI * 2);
      ctx.fillStyle = particle.color;
      ctx.globalAlpha = proj.alpha;
      ctx.shadowColor = particle.color;
      ctx.shadowBlur = 7 * proj.scale;
      ctx.fill();
      ctx.globalAlpha = 1.0;
      ctx.shadowBlur = 0;
    });

    requestAnimationFrame(render);
  }

  render();
})();
