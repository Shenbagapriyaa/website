/**
 * Track Tech Solution - Minimalist Precision 3D Cyber Cursor
 * Clean, smooth, non-clumsy, elegant magnetic tracking.
 */

(function() {
  'use strict';

  // Only init on non-touch pointer devices
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
    cursorGlow.style.transform = `translate3d(${mouseX - 150}px, ${mouseY - 150}px, 0)`;
  });

  window.addEventListener('mousedown', () => {
    isClicking = true;
    cursorRing.classList.add('clicking');
  });

  window.addEventListener('mouseup', () => {
    isClicking = false;
    cursorRing.classList.remove('clicking');
  });

  function renderCursor() {
    ringX += (mouseX - ringX) * 0.2;
    ringY += (mouseY - ringY) * 0.2;

    const scale = isHovered ? (isClicking ? 1.3 : 1.6) : (isClicking ? 0.75 : 1);
    cursorRing.style.transform = `translate3d(${ringX}px, ${ringY}px, 0) scale(${scale})`;

    requestAnimationFrame(renderCursor);
  }
  renderCursor();

  function attachHoverEvents() {
    const targets = document.querySelectorAll('a, button, input, select, textarea, .card-3d, .calc-slider, [role="button"]');
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
})();
