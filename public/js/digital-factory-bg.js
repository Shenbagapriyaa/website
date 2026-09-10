/**
 * Track Tech Solution - 3D Bioluminescent Fluid Koi & Caustic Canvas Engine
 * Inspired by peachweb.io luxury organic aesthetics.
 * 60fps GPU-optimized Canvas with realistic inverse kinematics, fins, & ripples.
 */

(function() {
  'use strict';

  const canvas = document.getElementById('digital-factory-canvas');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let width = (canvas.width = window.innerWidth);
  let height = (canvas.height = window.innerHeight);

  let mouseX = width / 2;
  let mouseY = height / 2;
  let mouseActive = false;

  window.addEventListener('resize', () => {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
  });

  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
    mouseActive = true;
  });

  window.addEventListener('mouseleave', () => {
    mouseActive = false;
  });

  // Floating Ambient Water Bubbles
  const ambientBubbles = [];
  for (let i = 0; i < 18; i++) {
    ambientBubbles.push({
      x: Math.random() * width,
      y: Math.random() * height,
      radius: 4 + Math.random() * 12,
      vy: 0.3 + Math.random() * 0.7,
      vx: (Math.random() - 0.5) * 0.4,
      opacity: 0.15 + Math.random() * 0.35,
      pulse: Math.random() * Math.PI * 2
    });
  }

  // Expanding Water Ripples
  const ripples = [];
  function addRipple(x, y, maxR = 90, color = 'rgba(14, 165, 233, 0.35)') {
    ripples.push({
      x,
      y,
      radius: 6,
      maxRadius: maxR,
      opacity: 0.65,
      color: color
    });
  }

  window.addEventListener('click', (e) => {
    addRipple(e.clientX, e.clientY, 130, 'rgba(139, 92, 246, 0.45)');
    addRipple(e.clientX, e.clientY, 180, 'rgba(14, 165, 233, 0.35)');
  });

  // Bioluminescent Fluid Creature / Koi Class
  class FluidCreature {
    constructor(isHero = false) {
      this.isHero = isHero;
      this.numJoints = isHero ? 18 : 13;
      this.jointSpacing = isHero ? 14 : 10;
      this.baseSize = isHero ? 20 : 12;
      this.spine = [];
      this.angles = [];

      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.vx = (Math.random() - 0.5) * 2;
      this.vy = (Math.random() - 0.5) * 2;
      this.angle = Math.random() * Math.PI * 2;
      this.targetAngle = this.angle;
      this.speed = isHero ? 2.6 : 1.9;
      this.wigglePhase = Math.random() * Math.PI * 2;
      this.wiggleSpeed = 0.085 + Math.random() * 0.035;

      // Luxury Sky Blue & Lavender Palettes
      const palettes = [
        {
          head: 'rgba(2, 132, 199, 0.85)',
          body: 'rgba(14, 165, 233, 0.7)',
          tail: 'rgba(139, 92, 246, 0.6)',
          fin: 'rgba(56, 189, 248, 0.38)',
          glow: 'rgba(14, 165, 233, 0.28)'
        },
        {
          head: 'rgba(124, 58, 237, 0.85)',
          body: 'rgba(139, 92, 246, 0.7)',
          tail: 'rgba(236, 72, 153, 0.6)',
          fin: 'rgba(192, 132, 252, 0.38)',
          glow: 'rgba(139, 92, 246, 0.28)'
        },
        {
          head: 'rgba(14, 165, 233, 0.85)',
          body: 'rgba(99, 102, 241, 0.7)',
          tail: 'rgba(168, 85, 247, 0.6)',
          fin: 'rgba(125, 211, 252, 0.35)',
          glow: 'rgba(56, 189, 248, 0.25)'
        }
      ];
      this.palette = palettes[Math.floor(Math.random() * palettes.length)];

      for (let i = 0; i < this.numJoints; i++) {
        this.spine.push({ x: this.x - i * this.jointSpacing, y: this.y });
        this.angles.push(0);
      }
    }

    update() {
      this.wigglePhase += this.wiggleSpeed;

      // Intelligent Wander & Seek Dynamics
      if (mouseActive) {
        const dx = mouseX - this.x;
        const dy = mouseY - this.y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < 480 && dist > 70) {
          this.targetAngle = Math.atan2(dy, dx);
        } else if (dist <= 70) {
          this.targetAngle = Math.atan2(-dy, -dx); // Gentle dispersal
        }
      } else {
        if (Math.random() < 0.02) {
          this.targetAngle += (Math.random() - 0.5) * 1.6;
        }
      }

      // Smooth Angular Steering
      let diff = this.targetAngle - this.angle;
      while (diff < -Math.PI) diff += Math.PI * 2;
      while (diff > Math.PI) diff -= Math.PI * 2;
      this.angle += diff * 0.045;

      // Propulsion
      const currentSpeed = this.speed + Math.sin(this.wigglePhase) * 0.7;
      this.x += Math.cos(this.angle) * currentSpeed;
      this.y += Math.sin(this.angle) * currentSpeed;

      // Wrap Screen Bounds
      const margin = 100;
      if (this.x < -margin) this.x = width + margin;
      if (this.x > width + margin) this.x = -margin;
      if (this.y < -margin) this.y = height + margin;
      if (this.y > height + margin) this.y = -margin;

      // Inverse Kinematics for Organic Spine
      this.spine[0] = { x: this.x, y: this.y };
      for (let i = 1; i < this.numJoints; i++) {
        const prev = this.spine[i - 1];
        const curr = this.spine[i];
        let ang = Math.atan2(curr.y - prev.y, curr.x - prev.x);

        // Sinusoidal wave through spine
        const wave = Math.sin(this.wigglePhase - i * 0.42) * 0.22;
        ang += wave;

        curr.x = prev.x + Math.cos(ang) * this.jointSpacing;
        curr.y = prev.y + Math.sin(ang) * this.jointSpacing;
        this.angles[i] = ang;
      }

      // Tail ripple trail
      if (Math.random() < 0.016) {
        const tail = this.spine[this.numJoints - 1];
        addRipple(tail.x, tail.y, 55, this.palette.glow);
      }
    }

    draw() {
      ctx.save();

      // Bioluminescent Halo
      const head = this.spine[0];
      const halo = ctx.createRadialGradient(head.x, head.y, 2, head.x, head.y, this.baseSize * 4.5);
      halo.addColorStop(0, this.palette.glow);
      halo.addColorStop(1, 'transparent');
      ctx.fillStyle = halo;
      ctx.beginPath();
      ctx.arc(head.x, head.y, this.baseSize * 4.5, 0, Math.PI * 2);
      ctx.fill();

      // Flowing Pectoral Fins (Left & Right)
      if (this.spine.length > 3) {
        const finJoint = this.spine[2];
        const finAngle = this.angles[2] || this.angle;
        const finWave = Math.sin(this.wigglePhase) * 0.45;

        ctx.fillStyle = this.palette.fin;
        // Left Fin
        ctx.beginPath();
        const lx = finJoint.x + Math.cos(finAngle + Math.PI / 2) * (this.baseSize * 1.3);
        const ly = finJoint.y + Math.sin(finAngle + Math.PI / 2) * (this.baseSize * 1.3);
        ctx.ellipse(lx, ly, this.baseSize * 1.7, this.baseSize * 0.75, finAngle + Math.PI / 3 + finWave, 0, Math.PI * 2);
        ctx.fill();

        // Right Fin
        ctx.beginPath();
        const rx = finJoint.x + Math.cos(finAngle - Math.PI / 2) * (this.baseSize * 1.3);
        const ry = finJoint.y + Math.sin(finAngle - Math.PI / 2) * (this.baseSize * 1.3);
        ctx.ellipse(rx, ry, this.baseSize * 1.7, this.baseSize * 0.75, finAngle - Math.PI / 3 - finWave, 0, Math.PI * 2);
        ctx.fill();
      }

      // Smooth Organic Tapered Body
      const leftPts = [];
      const rightPts = [];

      for (let i = 0; i < this.numJoints; i++) {
        const pt = this.spine[i];
        const ang = (this.angles[i] || this.angle) + Math.PI / 2;
        const progress = i / (this.numJoints - 1);
        let r = this.baseSize * (1 - progress * 0.78);
        if (i === 0) r *= 0.9;

        leftPts.push({
          x: pt.x + Math.cos(ang) * r,
          y: pt.y + Math.sin(ang) * r
        });
        rightPts.push({
          x: pt.x - Math.cos(ang) * r,
          y: pt.y - Math.sin(ang) * r
        });
      }

      ctx.beginPath();
      ctx.moveTo(leftPts[0].x, leftPts[0].y);
      for (let i = 1; i < leftPts.length; i++) {
        ctx.lineTo(leftPts[i].x, leftPts[i].y);
      }
      const tail = this.spine[this.numJoints - 1];
      ctx.lineTo(tail.x, tail.y);

      for (let i = rightPts.length - 1; i >= 0; i--) {
        ctx.lineTo(rightPts[i].x, rightPts[i].y);
      }
      ctx.closePath();

      // Fluid Gradient Body Fill
      const bodyGrad = ctx.createLinearGradient(
        this.spine[0].x,
        this.spine[0].y,
        tail.x,
        tail.y
      );
      bodyGrad.addColorStop(0, this.palette.head);
      bodyGrad.addColorStop(0.5, this.palette.body);
      bodyGrad.addColorStop(1, this.palette.tail);

      ctx.fillStyle = bodyGrad;
      ctx.fill();

      // Caustic Spine Highlight Line
      ctx.beginPath();
      ctx.moveTo(this.spine[0].x, this.spine[0].y);
      for (let i = 1; i < this.numJoints - 2; i++) {
        ctx.lineTo(this.spine[i].x, this.spine[i].y);
      }
      ctx.strokeStyle = 'rgba(255, 255, 255, 0.45)';
      ctx.lineWidth = this.baseSize * 0.25;
      ctx.lineCap = 'round';
      ctx.stroke();

      // Translucent Caudal Tail Fin
      const tailAng = this.angles[this.numJoints - 1] || this.angle;
      const tailWiggle = Math.sin(this.wigglePhase * 1.3) * 0.6;
      ctx.fillStyle = this.palette.fin;
      ctx.beginPath();
      ctx.ellipse(
        tail.x - Math.cos(tailAng) * (this.baseSize * 0.9),
        tail.y - Math.sin(tailAng) * (this.baseSize * 0.9),
        this.baseSize * 2.2,
        this.baseSize * 0.9,
        tailAng + tailWiggle,
        0,
        Math.PI * 2
      );
      ctx.fill();

      ctx.restore();
    }
  }

  // Create School of Swimming Creatures
  const creatures = [];
  const creatureCount = Math.min(Math.floor(window.innerWidth / 200) + 4, 10);
  for (let i = 0; i < creatureCount; i++) {
    creatures.push(new FluidCreature(i === 0)); // 1st is Hero Creature
  }

  // Animation Loop
  function render() {
    ctx.clearRect(0, 0, width, height);

    // Draw Ambient Rising Bubbles
    ambientBubbles.forEach(b => {
      b.y -= b.vy;
      b.x += b.vx;
      b.pulse += 0.03;
      if (b.y < -30) {
        b.y = height + 30;
        b.x = Math.random() * width;
      }

      ctx.save();
      ctx.beginPath();
      ctx.arc(b.x, b.y, b.radius + Math.sin(b.pulse) * 1.5, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(14, 165, 233, ${b.opacity * 0.25})`;
      ctx.strokeStyle = `rgba(255, 255, 255, ${b.opacity * 0.7})`;
      ctx.lineWidth = 1;
      ctx.fill();
      ctx.stroke();
      ctx.restore();
    });

    // Draw Water Ripples
    for (let i = ripples.length - 1; i >= 0; i--) {
      const rip = ripples[i];
      rip.radius += 1.4;
      rip.opacity -= 0.011;

      if (rip.opacity <= 0) {
        ripples.splice(i, 1);
        continue;
      }

      ctx.beginPath();
      ctx.arc(rip.x, rip.y, rip.radius, 0, Math.PI * 2);
      ctx.strokeStyle = rip.color.replace(/[\d\.]+\)$/, `${rip.opacity})`);
      ctx.lineWidth = 1.8;
      ctx.stroke();
    }

    // Update & Draw Swimming Creatures
    creatures.forEach(c => {
      c.update();
      c.draw();
    });

    requestAnimationFrame(render);
  }

  render();
})();
