/**
 * Track Tech Solution - Modern SaaS Motion & Scroll Atmosphere Morphing Engine
 * Inspired by vectrfl.com and peachweb.io
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // ==========================================
  // 1. DYNAMIC ATMOSPHERIC SCROLL BACKGROUND MORPHING (VECTRFL STYLE)
  // ==========================================
  const morphSections = document.querySelectorAll('[data-bg]');
  const root = document.documentElement;

  if ('IntersectionObserver' in window && morphSections.length > 0) {
    const bgObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && entry.intersectionRatio >= 0.35) {
          const bg = entry.target.getAttribute('data-bg');
          const glow1 = entry.target.getAttribute('data-glow-1');
          const glow2 = entry.target.getAttribute('data-glow-2');
          const glow3 = entry.target.getAttribute('data-glow-3');

          if (bg) root.style.setProperty('--theme-bg', bg);
          if (glow1 || glow2 || glow3) root.style.setProperty('--theme-glow-1', 'rgba(14, 165, 233, 0.12)');
          if (glow1 || glow2 || glow3) root.style.setProperty('--theme-glow-2', 'rgba(99, 102, 241, 0.1)');
          if (glow1 || glow2 || glow3) root.style.setProperty('--theme-glow-3', 'rgba(2, 132, 199, 0.09)');
        }
      });
    }, {
      threshold: [0.2, 0.4, 0.6, 0.8]
    });

    morphSections.forEach(sec => bgObserver.observe(sec));
  }

  // Keep the desktop navigation aligned with the section currently in view.
  const scrollNavLinks = document.querySelectorAll('.nav-link[data-scroll-target]');
  const scrollNavSections = Array.from(scrollNavLinks)
    .map(link => document.getElementById(link.getAttribute('data-scroll-target')))
    .filter(Boolean);

  if (scrollNavSections.length > 0) {
    let navTicking = false;
    const updateScrollNav = () => {
      if (navTicking) return;
      navTicking = true;
      window.requestAnimationFrame(() => {
        const anchorLine = window.innerHeight * 0.34;
        const passedSections = scrollNavSections
          .map(section => ({ section, top: section.getBoundingClientRect().top }))
          .filter(item => item.top <= anchorLine)
          .sort((first, second) => second.top - first.top);

        const activeSection = passedSections[0]?.section || scrollNavSections[0];
        scrollNavLinks.forEach(link => {
          link.classList.toggle('active', link.getAttribute('data-scroll-target') === activeSection.id);
        });
        navTicking = false;
      });
    };

    window.addEventListener('scroll', updateScrollNav, { passive: true });
    window.addEventListener('resize', updateScrollNav);
    updateScrollNav();
  }

  // ==========================================
  // 2. SCROLL-TRIGGERED REVEAL ANIMATIONS
  // ==========================================
  const revealElements = document.querySelectorAll('.reveal-on-scroll, .reveal-fade-left, .reveal-fade-right');

  if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    }, {
      rootMargin: '0px 0px -50px 0px',
      threshold: 0.12
    });

    revealElements.forEach(el => revealObserver.observe(el));
  } else {
    revealElements.forEach(el => el.classList.add('revealed'));
  }

  // ==========================================
  // 3. SCROLL-TRIGGERED NUMBER COUNTERS
  // ==========================================
  const counterElements = document.querySelectorAll('[data-counter]');

  function animateCounter(el) {
    const target = parseFloat(el.getAttribute('data-counter'));
    const prefix = el.getAttribute('data-prefix') || '';
    const suffix = el.getAttribute('data-suffix') || '';
    const isDecimal = target % 1 !== 0;
    const duration = 1800;
    const start = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - start;
      const progress = Math.min(elapsed / duration, 1);
      const ease = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
      const currentVal = ease * target;

      el.textContent = `${prefix}${isDecimal ? currentVal.toFixed(1) : Math.floor(currentVal)}${suffix}`;

      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        el.textContent = `${prefix}${isDecimal ? target.toFixed(1) : target}${suffix}`;
      }
    }

    requestAnimationFrame(update);
  }

  if ('IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.25 });

    counterElements.forEach(el => counterObserver.observe(el));
  } else {
    counterElements.forEach(el => animateCounter(el));
  }

  // ==========================================
  // 4. 3D CARD TILT & SPECULAR GLARE
  // ==========================================
  const tiltCards = document.querySelectorAll('.card-3d');

  tiltCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = ((y - centerY) / centerY) * -7;
      const rotateY = ((x - centerX) / centerX) * 7;

      card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-6px)`;
      card.style.setProperty('--mouse-x', `${(x / rect.width) * 100}%`);
      card.style.setProperty('--mouse-y', `${(y / rect.height) * 100}%`);
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
    });
  });

  // ==========================================
  // 5. INTERACTIVE SOLUTION TABS
  // ==========================================
  const tabButtons = document.querySelectorAll('.tab-btn');
  const tabPanes = document.querySelectorAll('.tab-pane');

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetTab = btn.getAttribute('data-tab');

      tabButtons.forEach(b => b.classList.remove('active'));
      tabPanes.forEach(p => p.classList.remove('active'));

      btn.classList.add('active');
      const targetPane = document.getElementById(targetTab);
      if (targetPane) {
        targetPane.classList.add('active');
      }
    });
  });

  // ==========================================
  // 6. LIVE FACTORY ROI CALCULATOR
  // ==========================================
  const linesSlider = document.getElementById('calc-lines-slider');
  const efficiencySlider = document.getElementById('calc-eff-slider');
  const linesValDisplay = document.getElementById('calc-lines-val');
  const effValDisplay = document.getElementById('calc-eff-val');

  const annualSavingsDisplay = document.getElementById('calc-annual-savings');
  const yardageSavingsDisplay = document.getElementById('calc-yardage-savings');
  const hoursSavedDisplay = document.getElementById('calc-hours-saved');

  function updateCalculator() {
    if (!linesSlider || !efficiencySlider) return;

    const lines = parseInt(linesSlider.value, 10);
    const targetEffGain = parseInt(efficiencySlider.value, 10);

    if (linesValDisplay) linesValDisplay.textContent = `${lines} Sewing Lines`;
    if (effValDisplay) effValDisplay.textContent = `+${targetEffGain}% Efficiency`;

    const totalOperators = lines * 45;
    const annualOperatorHours = totalOperators * 8 * 300;
    const hoursSaved = Math.round((annualOperatorHours * (targetEffGain / 100)) * 0.4);
    
    const laborSavings = Math.round(hoursSaved * 1.85);
    const fabricYardageSaved = Math.round(lines * 14500 * (targetEffGain / 15));
    const totalSavings = laborSavings + (fabricYardageSaved * 2.1);

    if (annualSavingsDisplay) annualSavingsDisplay.textContent = `$${Math.round(totalSavings).toLocaleString()}`;
    if (yardageSavingsDisplay) yardageSavingsDisplay.textContent = `${fabricYardageSaved.toLocaleString()} Yds`;
    if (hoursSavedDisplay) hoursSavedDisplay.textContent = `${hoursSaved.toLocaleString()} Hrs`;
  }

  if (linesSlider && efficiencySlider) {
    linesSlider.addEventListener('input', updateCalculator);
    efficiencySlider.addEventListener('input', updateCalculator);
    updateCalculator();
  }

  // Draw the factory journey route as the user moves through it.
  const journey = document.querySelector('.factory-journey');
  const journeyPath = document.querySelector('.journey-route-progress');

  if (journey && journeyPath) {
    const pathLength = journeyPath.getTotalLength();
    journeyPath.style.strokeDasharray = pathLength;
    journeyPath.style.strokeDashoffset = pathLength;

    const updateJourney = () => {
      const rect = journey.getBoundingClientRect();
      const travel = Math.min(Math.max((window.innerHeight * 0.72 - rect.top) / rect.height, 0), 1);
      journeyPath.style.strokeDashoffset = pathLength * (1 - travel);
    };

    updateJourney();
    window.addEventListener('scroll', updateJourney, { passive: true });
    window.addEventListener('resize', updateJourney);
  }

  // ==========================================
  // 7. HEADER SCROLL & MOBILE DRAWER
  // ==========================================
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 40) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
  });

  const mobileToggle = document.getElementById('mobile-toggle');
  const mobileClose = document.getElementById('mobile-close');
  const mobileDrawer = document.getElementById('mobile-drawer');

  if (mobileToggle && mobileDrawer) {
    mobileToggle.addEventListener('click', () => {
      mobileDrawer.classList.add('open');
    });
  }

  if (mobileClose && mobileDrawer) {
    mobileClose.addEventListener('click', () => {
      mobileDrawer.classList.remove('open');
    });
  }

  // ==========================================
  // 8. VECTRFL-STYLE SMOOTH SCROLL PARALLAX DEPTH
  // ==========================================
  const parallaxNodes = document.querySelectorAll('.card-3d, .real-product-image-wrap');
  let ticking = false;

  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        parallaxNodes.forEach((node, index) => {
          const rect = node.getBoundingClientRect();
          if (rect.top < window.innerHeight && rect.bottom > 0) {
            const depth = (index % 3 + 1) * 0.035;
            const yOffset = (rect.top - window.innerHeight / 2) * depth;
            node.style.setProperty('--scroll-parallax-y', `${yOffset.toFixed(1)}px`);
          }
        });
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });
});

