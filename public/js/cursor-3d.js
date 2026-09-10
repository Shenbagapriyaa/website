/**
 * Track Tech Solution - Unique Magnetic Dual Cursor with Shockwave Wave & Bubble Burst
 * Inspired by peachweb.io and vectrfl.com
 */

(function() {
  'use strict';

  if (window.matchMedia('(pointer: coarse)').matches) return;

  const cursorDot = document.createElement('div');
  cursorDot.className = 'cursor-dot-3d';

  const cursorRing = document.createElement('div');
  cursorRing.className = 'cursor-ring-3d';

  const cursorGlow = document.createElement('div');
  cursorGlow.className = 'cursor-glow-backdrop';

  document.body.appendChild(cursorGlow);
  document.body.appendChild(cursorRing);
  document.body.appendChild(cursorDot);

  let mouseX = window.innerWidth / 2;
  let mouseY = window.innerHeight / 2;
  let ringX = mouseX;
  let ringY = mouseY;
  let isHovered = false;
  let isClicking = false;

  window.addEventListener('mousemove', (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;

    cursorDot.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
    cursorGlow.style.transform = `translate3d(${mouseX - 180}px, ${mouseY - 180}px, 0)`;
  });

  // Shockwave ring + pastel bubble burst
  function createClickExplosion(x, y) {
    // 1. Expanding Sonic Shockwave Ring
    const wave = document.createElement('div');
    wave.className = 'cursor-shockwave-ring';
    wave.style.left = `${x}px`;
    wave.style.top = `${y}px`;
    document.body.appendChild(wave);

    setTimeout(() => wave.remove(), 750);

    // 2. Iridescent Rainbow Bubbles with Physics
    const bubbleCount = 10 + Math.floor(Math.random() * 4);
    for (let i = 0; i < bubbleCount; i++) {
      const bubble = document.createElement('div');
      bubble.className = 'cursor-bubble-particle';

      const size = 12 + Math.random() * 24;
      const angle = (Math.PI * 2 * i) / bubbleCount + (Math.random() - 0.5) * 0.6;
      const distance = 40 + Math.random() * 70;
      const tx = Math.cos(angle) * distance;
      const ty = Math.sin(angle) * distance - (20 + Math.random() * 35); // Float upwards

      bubble.style.width = `${size}px`;
      bubble.style.height = `${size}px`;
      bubble.style.left = `${x}px`;
      bubble.style.top = `${y}px`;
      bubble.style.setProperty('--tx', `${tx}px`);
      bubble.style.setProperty('--ty', `${ty}px`);

      const hues = [
        'radial-gradient(circle at 35% 35%, rgba(255, 255, 255, 0.98), rgba(56, 189, 248, 0.6) 55%, rgba(168, 85, 247, 0.7) 100%)',
        'radial-gradient(circle at 35% 35%, rgba(255, 255, 255, 0.98), rgba(168, 85, 247, 0.6) 55%, rgba(236, 72, 153, 0.7) 100%)',
        'radial-gradient(circle at 35% 35%, rgba(255, 255, 255, 0.98), rgba(14, 165, 233, 0.6) 55%, rgba(16, 185, 129, 0.7) 100%)'
      ];
      bubble.style.background = hues[Math.floor(Math.random() * hues.length)];

      document.body.appendChild(bubble);

      setTimeout(() => {
        if (bubble.parentElement) bubble.remove();
      }, 900);
    }
  }

  window.addEventListener('mousedown', (e) => {
    isClicking = true;
    cursorRing.classList.add('clicking');
    createClickExplosion(e.clientX, e.clientY);
  });

  window.addEventListener('mouseup', () => {
    isClicking = false;
    cursorRing.classList.remove('clicking');
  });

  function renderCursor() {
    ringX += (mouseX - ringX) * 0.18;
    ringY += (mouseY - ringY) * 0.18;

    const scale = isHovered ? (isClicking ? 1.25 : 1.55) : (isClicking ? 0.75 : 1);
    cursorRing.style.transform = `translate3d(${ringX}px, ${ringY}px, 0) scale(${scale})`;

    requestAnimationFrame(renderCursor);
  }
  renderCursor();

  function attachHoverEvents() {
    const targets = document.querySelectorAll('a, button, input, select, textarea, .card-3d, .tab-btn, .calc-slider, tr, [role="button"]');
    targets.forEach(el => {
      el.addEventListener('mouseenter', () => {
        isHovered = true;
        cursorRing.classList.add('hovered');
      });
      el.addEventListener('mouseleave', () => {
        isHovered = false;
        cursorRing.classList.remove('hovered');
      });
    });
  }

  attachHoverEvents();

  const observer = new MutationObserver(() => attachHoverEvents());
  observer.observe(document.body, { childList: true, subtree: true });
})();
