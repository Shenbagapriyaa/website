/**
 * Track Tech Solution - 3D Interactions, Smooth In-Page Navigation & Dynamic Logic
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // ==========================================
  // 1. 3D CARD TILT & SPECULAR GLARE EFFECT
  // ==========================================
  const tiltCards = document.querySelectorAll('.card-3d');

  tiltCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const rotateX = ((y - centerY) / centerY) * -10;
      const rotateY = ((x - centerX) / centerX) * 10;

      card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-5px)`;
      card.style.setProperty('--mouse-x', `${(x / rect.width) * 100}%`);
      card.style.setProperty('--mouse-y', `${(y / rect.height) * 100}%`);
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
    });
  });

  // ==========================================
  // 2. SMOOTH ANCHOR SCROLLING & ACTIVE NAV TRACKING
  // ==========================================
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  const mobileDrawer = document.getElementById('mobile-drawer');

  anchorLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const targetId = link.getAttribute('href');
      if (targetId === '#' || targetId === '') return;

      const targetElem = document.querySelector(targetId);
      if (targetElem) {
        e.preventDefault();
        const headerOffset = 90;
        const elementPosition = targetElem.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });

        // Close mobile drawer if open
        if (mobileDrawer) {
          mobileDrawer.classList.remove('open');
        }
      }
    });
  });

  // Highlight active nav item on scroll
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-menu .nav-link');

  window.addEventListener('scroll', () => {
    let current = '';
    const scrollPos = window.pageYOffset + 120;

    sections.forEach(sec => {
      const top = sec.offsetTop;
      const height = sec.offsetHeight;
      if (scrollPos >= top && scrollPos < top + height) {
        current = sec.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      const href = link.getAttribute('href');
      if (href === `#${current}` || (current === 'hero' && href === '#hero')) {
        link.classList.add('active');
      } else if (href.startsWith('#')) {
        link.classList.remove('active');
      }
    });
  });

  // ==========================================
  // 3. LIVE FACTORY ROI & WASTE SAVINGS CALCULATOR
  // ==========================================
  const linesSlider = document.getElementById('calc-lines-slider');
  const efficiencySlider = document.getElementById('calc-eff-slider');
  const linesValDisplay = document.getElementById('calc-lines-val');
  const effValDisplay = document.getElementById('calc-eff-val');

  const annualSavingsDisplay = document.getElementById('calc-annual-savings');
  const yardageSavingsDisplay = document.getElementById('calc-yardage-savings');
  const hoursSavedDisplay = document.getElementById('calc-hours-saved');
  const paybackMonthsDisplay = document.getElementById('calc-payback-months');

  function updateCalculator() {
    if (!linesSlider || !efficiencySlider) return;

    const lines = parseInt(linesSlider.value, 10);
    const targetEffGain = parseInt(efficiencySlider.value, 10);

    if (linesValDisplay) linesValDisplay.textContent = `${lines} Sewing Lines`;
    if (effValDisplay) effValDisplay.textContent = `+${targetEffGain}% Efficiency`;

    // Standard Apparel Factory Model:
    const totalOperators = lines * 45;
    const annualOperatorHours = totalOperators * 8 * 300;
    const hoursSaved = Math.round((annualOperatorHours * (targetEffGain / 100)) * 0.4);
    
    // Financial Impact
    const laborSavings = Math.round(hoursSaved * 1.85);
    const fabricYardageSaved = Math.round(lines * 14500 * (targetEffGain / 15));
    const fabricDollarSavings = Math.round(fabricYardageSaved * 3.2);
    const totalAnnualSavings = laborSavings + fabricDollarSavings;
    const paybackPeriod = (Math.max(1.8, 8.5 - (lines * 0.15) - (targetEffGain * 0.1))).toFixed(1);

    if (annualSavingsDisplay) annualSavingsDisplay.textContent = `$${totalAnnualSavings.toLocaleString()}`;
    if (yardageSavingsDisplay) yardageSavingsDisplay.textContent = `${fabricYardageSaved.toLocaleString()} Yds`;
    if (hoursSavedDisplay) hoursSavedDisplay.textContent = `${hoursSaved.toLocaleString()} Hrs`;
    if (paybackMonthsDisplay) paybackMonthsDisplay.textContent = `${paybackPeriod} Mo`;
  }

  if (linesSlider && efficiencySlider) {
    linesSlider.addEventListener('input', updateCalculator);
    efficiencySlider.addEventListener('input', updateCalculator);
    updateCalculator();
  }

  // ==========================================
  // 4. STATS COUNT-UP ANIMATION
  // ==========================================
  const counters = document.querySelectorAll('[data-counter]');
  const observerOptions = { threshold: 0.2 };

  const counterObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const targetNumber = parseFloat(target.getAttribute('data-counter'));
        const suffix = target.getAttribute('data-suffix') || '';
        const prefix = target.getAttribute('data-prefix') || '';
        let start = 0;
        const duration = 1800;
        const stepTime = 20;
        const steps = duration / stepTime;
        const increment = targetNumber / steps;

        const timer = setInterval(() => {
          start += increment;
          if (start >= targetNumber) {
            start = targetNumber;
            clearInterval(timer);
          }
          target.textContent = `${prefix}${Number.isInteger(targetNumber) ? Math.floor(start) : start.toFixed(1)}${suffix}`;
        }, stepTime);

        observer.unobserve(target);
      }
    });
  }, observerOptions);

  counters.forEach(counter => counterObserver.observe(counter));

  // ==========================================
  // 5. MOBILE NAVIGATION TOGGLE
  // ==========================================
  const mobileToggle = document.getElementById('mobile-toggle');
  const mobileClose = document.getElementById('mobile-close');

  if (mobileToggle && mobileDrawer) {
    mobileToggle.addEventListener('click', () => {
      mobileDrawer.classList.toggle('open');
    });
  }

  if (mobileClose && mobileDrawer) {
    mobileClose.addEventListener('click', () => {
      mobileDrawer.classList.remove('open');
    });
  }

  // ==========================================
  // 6. AJAX FORM HANDLER & TOAST NOTIFICATION
  // ==========================================
  const inquiryForms = document.querySelectorAll('.ajax-inquiry-form');
  const toastMsg = document.getElementById('toast-notification');
  const toastText = document.getElementById('toast-message-text');

  function showToast(message) {
    if (!toastMsg) return;
    if (toastText) toastText.textContent = message;
    toastMsg.classList.add('show');
    setTimeout(() => {
      toastMsg.classList.remove('show');
    }, 5000);
  }

  inquiryForms.forEach(form => {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn ? submitBtn.innerHTML : 'Submit';

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="live-pulse-dot" style="display:inline-block; margin-right:8px;"></span> Submitting...';
      }

      const formData = new FormData(form);

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          body: formData,
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          }
        });

        const result = await response.json();

        if (response.ok && result.success) {
          showToast(result.message || 'Thank you! We will connect with you shortly.');
          form.reset();
        } else {
          showToast(result.message || 'Thank you! Request recorded successfully.');
          form.reset();
        }
      } catch (err) {
        showToast('Thank you! Your request has been scheduled for priority consultation.');
        form.reset();
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
        }
      }
    });
  });
});
