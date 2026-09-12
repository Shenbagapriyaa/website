/**
 * Track Tech Solution - Industrial Textile Blueprint Motion Engine
 * 
 * Features:
 *  - Dynamic SVG / Canvas vector lines that literally DRAW themselves as the user scrolls
 *  - Soft production routes with restrained copper and green telemetry accents
 *  - Interactive mouse thread trail with a warm industrial glow
 *  - Subtle architectural blueprint grid & digital telemetry nodes
 *  - 100% lightweight, crystal-clear, zero clunky 3D obstruction
 */

(function() {
  'use strict';

  // Initialize Lenis for smooth scroll if available
  let lenis = null;
  if (typeof Lenis !== 'undefined') {
    lenis = new Lenis({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      smoothWheel: true,
      touchMultiplier: 1.8
    });
    window.lenisInstance = lenis;

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);
  }

  const canvas = document.getElementById('digital-factory-canvas');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let width = (canvas.width = window.innerWidth);
  let height = (canvas.height = window.innerHeight);

  window.addEventListener('resize', () => {
    width = canvas.width = window.innerWidth;
    height = canvas.height = window.innerHeight;
    initDrawingPaths();
  });

  // Mouse Interaction Physics
  let mouseX = width * 0.5;
  let mouseY = height * 0.5;
  let targetMouseX = width * 0.5;
  let targetMouseY = height * 0.5;
  let mouseActive = false;

  const mouseTrail = [];
  const MAX_TRAIL = 18;

  window.addEventListener('mousemove', (e) => {
    targetMouseX = e.clientX;
    targetMouseY = e.clientY;
    mouseActive = true;

    mouseTrail.push({
      x: e.clientX,
      y: e.clientY,
      age: 0,
      radius: 3 + Math.random() * 4
    });

    if (mouseTrail.length > MAX_TRAIL) {
      mouseTrail.shift();
    }
  });

  window.addEventListener('mouseleave', () => {
    mouseActive = false;
  });

  // Smooth Scroll Position & Velocity Tracking
  let currentScroll = 0;
  let targetScroll = 0;
  let scrollVelocity = 0;
  let lastScrollPos = 0;

  function getScrollTop() {
    return lenis ? lenis.scroll : (window.scrollY || window.pageYOffset || 0);
  }

  // Floating Drawing Sparks
  const sparks = [];
  function addSpark(x, y, color = '#0284c7') {
    if (sparks.length > 80) sparks.shift();
    sparks.push({
      x: x + (Math.random() - 0.5) * 10,
      y: y + (Math.random() - 0.5) * 10,
      vx: (Math.random() - 0.5) * 2.2,
      vy: (Math.random() - 0.5) * 2.2 - 0.5,
      alpha: 0.9,
      size: 1.5 + Math.random() * 2.5,
      color: color
    });
  }

  // =========================================================================
  // 1. DYNAMIC SCROLL VECTOR DRAWING PATHS
  // =========================================================================
  let drawingTracks = [];

  function initDrawingPaths() {
    drawingTracks = [
      // Track 1: Fabric roll path
      {
        color: '#0284c7',
        glowColor: 'rgba(14, 165, 233, 0.28)',
        lineWidth: 1.6,
        speed: 1.0,
        phase: 0,
        generatePoints: (progress, time) => {
          const pts = [];
          const numSteps = 45;
          const totalY = height * 1.3;
          for (let i = 0; i <= numSteps; i++) {
            const t = i / numSteps;
            const y = t * totalY - height * 0.15;
            const waveX = Math.sin(t * Math.PI * 4 + time * 0.8) * (width * 0.12);
            const x = width * 0.18 + waveX;
            pts.push({ x, y });
          }
          return pts;
        }
      },
      // Track 2: Production flow path
      {
        color: '#65a30d',
        glowColor: 'rgba(101, 163, 13, 0.28)',
        lineWidth: 1.5,
        speed: 1.2,
        phase: Math.PI * 0.5,
        generatePoints: (progress, time) => {
          const pts = [];
          const numSteps = 45;
          const totalY = height * 1.3;
          for (let i = 0; i <= numSteps; i++) {
            const t = i / numSteps;
            const y = t * totalY - height * 0.15;
            const waveX = Math.cos(t * Math.PI * 3.5 - time * 0.6) * (width * 0.14);
            const x = width * 0.82 + waveX;
            pts.push({ x, y });
          }
          return pts;
        }
      },
      // Track 3: Interconnected workstation path
      {
        color: '#6366f1',
        glowColor: 'rgba(180, 83, 9, 0.25)',
        lineWidth: 1.35,
        speed: 0.9,
        phase: Math.PI,
        generatePoints: (progress, time) => {
          const pts = [];
          const numSteps = 50;
          const totalY = height * 1.3;
          for (let i = 0; i <= numSteps; i++) {
            const t = i / numSteps;
            const y = t * totalY - height * 0.15;
            const weave = Math.sin(t * Math.PI * 6 + time * 0.9) * (width * 0.08);
            const x = (width * 0.35) + (t * width * 0.3) + weave;
            pts.push({ x, y });
          }
          return pts;
        }
      },
      // Track 4: Quality inspection scanner
      {
        color: '#84cc16',
        glowColor: 'rgba(132, 204, 22, 0.22)',
        lineWidth: 1.1,
        speed: 1.4,
        phase: Math.PI * 1.5,
        generatePoints: (progress, time) => {
          const pts = [];
          const numSteps = 35;
          const baseY = height * 0.48 + Math.sin(time + progress * 8) * 80;
          for (let i = 0; i <= numSteps; i++) {
            const t = i / numSteps;
            const x = t * width;
            const y = baseY + Math.sin(t * Math.PI * 5 + time * 1.2) * 35;
            pts.push({ x, y });
          }
          return pts;
        }
      }
    ];
  }

  initDrawingPaths();

  // Draw Smooth Bezier Path from Array of Points
  function drawSmoothLine(ctx, points, maxRatio = 1.0) {
    if (!points || points.length < 2) return null;

    const totalSegments = points.length - 1;
    const activeSegments = Math.max(Math.floor(totalSegments * maxRatio), 1);
    const remainder = (totalSegments * maxRatio) - activeSegments;

    ctx.beginPath();
    ctx.moveTo(points[0].x, points[0].y);

    for (let i = 1; i < activeSegments; i++) {
      const prev = points[i - 1];
      const curr = points[i];
      const cx = (prev.x + curr.x) / 2;
      const cy = (prev.y + curr.y) / 2;
      ctx.quadraticCurveTo(prev.x, prev.y, cx, cy);
    }

    // Interpolate last partial segment
    const lastIdx = activeSegments;
    if (lastIdx < points.length) {
      const p1 = points[lastIdx - 1];
      const p2 = points[lastIdx];
      const partialX = p1.x + (p2.x - p1.x) * remainder;
      const partialY = p1.y + (p2.y - p1.y) * remainder;
      ctx.lineTo(partialX, partialY);
      return { x: partialX, y: partialY };
    }

    const end = points[points.length - 1];
    ctx.lineTo(end.x, end.y);
    return end;
  }

  // =========================================================================
  // 2. MAIN 60-120FPS DRAWING ANIMATION LOOP
  // =========================================================================
  let lastTime = performance.now();

  function render(now) {
    const time = now * 0.001;
    const dt = now - lastTime;
    lastTime = now;

    // Smooth scroll interpolation
    targetScroll = getScrollTop();
    const delta = targetScroll - lastScrollPos;
    scrollVelocity = scrollVelocity * 0.85 + delta * 0.15;
    lastScrollPos = targetScroll;

    currentScroll += (targetScroll - currentScroll) * 0.09;

    const maxScroll = Math.max(document.body.scrollHeight - window.innerHeight, 1);
    const scrollRatio = Math.min(Math.max(currentScroll / maxScroll, 0), 1);

    // Mouse Lerp
    mouseX += (targetMouseX - mouseX) * 0.08;
    mouseY += (targetMouseY - mouseY) * 0.08;

    ctx.clearRect(0, 0, width, height);

    // 1. Fine drafting grid, inspired by factory floor plans.
    const dotSpacing = 48;
    ctx.fillStyle = 'rgba(245, 158, 11, 0.055)';
    for (let x = dotSpacing; x < width; x += dotSpacing) {
      for (let y = dotSpacing; y < height; y += dotSpacing) {
        ctx.beginPath();
        ctx.arc(x, y, 1.0, 0, Math.PI * 2);
        ctx.fill();
      }
    }

    // 2. Animate and Draw Scroll Vector Tracks ("Draw aagura effect")
    drawingTracks.forEach((track, index) => {
      // Dynamic draw ratio based on scroll position + subtle continuous breathing
      const baseRatio = Math.min(0.25 + scrollRatio * 0.75 + Math.sin(time * 0.6 + index) * 0.05, 1.0);
      const points = track.generatePoints(scrollRatio, time);

      // Deflect points if mouse is nearby
      if (mouseActive) {
        points.forEach(pt => {
          const dx = pt.x - mouseX;
          const dy = pt.y - mouseY;
          const dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < 180) {
            const force = (1 - dist / 180) * 35;
            pt.x += (dx > 0 ? 1 : -1) * force;
            pt.y += (dy > 0 ? 1 : -1) * force * 0.5;
          }
        });
      }

      // Draw faint background ghost guide line
      ctx.save();
      ctx.beginPath();
      ctx.moveTo(points[0].x, points[0].y);
      for (let i = 1; i < points.length; i++) {
        const prev = points[i - 1];
        const curr = points[i];
        ctx.quadraticCurveTo(prev.x, prev.y, (prev.x + curr.x) / 2, (prev.y + curr.y) / 2);
      }
      ctx.strokeStyle = 'rgba(226, 232, 240, 0.18)';
      ctx.lineWidth = 1;
      ctx.setLineDash([4, 8]);
      ctx.stroke();
      ctx.restore();

      // Draw Active Glowing Solid Draw Line
      ctx.save();
      ctx.shadowColor = track.glowColor;
      ctx.shadowBlur = 12;
      ctx.strokeStyle = track.color;
      ctx.lineWidth = track.lineWidth;
      ctx.lineCap = 'round';
      ctx.lineJoin = 'round';

      const drawHead = drawSmoothLine(ctx, points, baseRatio);
      ctx.stroke();
      ctx.restore();

      // Glowing Pen / Laser Tip at active draw head
      if (drawHead) {
        ctx.save();
        // Outer halo
        const halo = ctx.createRadialGradient(drawHead.x, drawHead.y, 2, drawHead.x, drawHead.y, 16);
        halo.addColorStop(0, track.color);
        halo.addColorStop(0.5, track.glowColor);
        halo.addColorStop(1, 'transparent');
        ctx.fillStyle = halo;
        ctx.beginPath();
        ctx.arc(drawHead.x, drawHead.y, 16, 0, Math.PI * 2);
        ctx.fill();

        // Core white dot
        ctx.fillStyle = '#ffffff';
        ctx.beginPath();
        ctx.arc(drawHead.x, drawHead.y, 3.5, 0, Math.PI * 2);
        ctx.fill();
        ctx.restore();

        // Emit sparks on movement
        if (Math.abs(scrollVelocity) > 0.5 || Math.random() < 0.25) {
          addSpark(drawHead.x, drawHead.y, track.color);
        }
      }
    });

    // 3. Update & Draw Spark Particles
    for (let i = sparks.length - 1; i >= 0; i--) {
      const s = sparks[i];
      s.x += s.vx;
      s.y += s.vy;
      s.alpha -= 0.018;

      if (s.alpha <= 0) {
        sparks.splice(i, 1);
        continue;
      }

      ctx.save();
      ctx.fillStyle = s.color;
      ctx.globalAlpha = s.alpha;
      ctx.shadowColor = s.color;
      ctx.shadowBlur = 6;
      ctx.beginPath();
      ctx.arc(s.x, s.y, s.size, 0, Math.PI * 2);
      ctx.fill();
      ctx.restore();
    }

    // 4. Interactive Mouse Trail Sketching
    if (mouseTrail.length > 2) {
      ctx.save();
      ctx.beginPath();
      ctx.moveTo(mouseTrail[0].x, mouseTrail[0].y);
      for (let i = 1; i < mouseTrail.length; i++) {
        const p1 = mouseTrail[i - 1];
        const p2 = mouseTrail[i];
        const cx = (p1.x + p2.x) / 2;
        const cy = (p1.y + p2.y) / 2;
        ctx.quadraticCurveTo(p1.x, p1.y, cx, cy);
      }
      ctx.strokeStyle = 'rgba(14, 165, 233, 0.28)';
      ctx.lineWidth = 1.8;
      ctx.lineCap = 'round';
      ctx.shadowColor = 'rgba(14, 165, 233, 0.28)';
      ctx.shadowBlur = 7;
      ctx.stroke();
      ctx.restore();
    }

    // Age mouse trail
    for (let i = mouseTrail.length - 1; i >= 0; i--) {
      mouseTrail[i].age += 1;
      if (mouseTrail[i].age > 18) {
        mouseTrail.splice(i, 1);
      }
    }

    requestAnimationFrame(render);
  }

  requestAnimationFrame(render);
})();
