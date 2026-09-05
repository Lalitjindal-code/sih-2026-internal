// ============================================================
//  SIH 2026 Internal Round — SATI Vidisha
//  Main JavaScript — Dark/Light Mode + All Features
// ============================================================

document.addEventListener('DOMContentLoaded', () => {

  // ── 1. Theme Toggle (Dark / Light Mode) ─────────────────
  const html = document.documentElement;
  const themeToggle = document.getElementById('theme-toggle');
  const themeIcon   = document.getElementById('theme-icon');

  // Theme is set synchronously in index.php <head> to prevent jitter
  const initialTheme = html.getAttribute('data-theme') || 'dark';
  updateThemeIcon(initialTheme);

  function updateThemeIcon(theme) {
    if (themeIcon) themeIcon.textContent = theme === 'dark' ? '☀️' : '🌙';
    if (themeToggle) themeToggle.title = theme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode';
  }

  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const current = html.getAttribute('data-theme') || 'dark';
      const next    = current === 'dark' ? 'light' : 'dark';
      html.setAttribute('data-theme', next);
      localStorage.setItem('sih-theme', next);
      updateThemeIcon(next);
      // Reinit canvas with new colors
      if (window._canvasColorUpdate) window._canvasColorUpdate(next);
    });
  }

  // ── 2. Navbar Scroll Effect ──────────────────────────────
  const navbar    = document.getElementById('navbar');
  const hamburger = document.getElementById('hamburger');
  const navLinks  = document.getElementById('navLinks');

  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 40);
  }, { passive: true });

  if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
      navLinks.classList.toggle('open');
      const [s1, s2, s3] = hamburger.querySelectorAll('span');
      if (navLinks.classList.contains('open')) {
        s1.style.transform = 'rotate(45deg) translate(5px,5px)';
        s2.style.opacity   = '0';
        s3.style.transform = 'rotate(-45deg) translate(5px,-5px)';
      } else {
        s1.style.transform = s3.style.transform = '';
        s2.style.opacity = '';
      }
    });
    navLinks.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        navLinks.classList.remove('open');
        hamburger.querySelectorAll('span').forEach(s => { s.style.transform = ''; s.style.opacity = ''; });
      });
    });
  }

  // ── 3. Hero Canvas — Particle & Circuit Animation ────────
  const canvas = document.getElementById('hero-canvas');
  if (canvas) {
    const ctx = canvas.getContext('2d');
    let W, H, particles;

    const PARTICLE_COUNT = 65;
    const CONNECT_DIST   = 130;

    function getColors() {
      return {
        orange: '#f5cd47',
        blue:   '#d1c4e9',
        bgAlpha: 0,
      };
    }

    function resize() {
      W = canvas.width  = canvas.offsetWidth;
      H = canvas.height = canvas.offsetHeight;
    }
    window.addEventListener('resize', () => { resize(); initParticles(); });
    resize();

    function rnd(a, b) { return Math.random() * (b - a) + a; }

    function initParticles() {
      const { orange, blue } = getColors();
      particles = Array.from({ length: PARTICLE_COUNT }, () => ({
        x:  rnd(0, W), y: rnd(0, H),
        vx: rnd(-0.3, 0.3), vy: rnd(-0.3, 0.3),
        r:  rnd(1.5, 3),
        alpha: rnd(0.3, 0.75),
        color: Math.random() > 0.55 ? orange : blue,
      }));
    }
    initParticles();

    // Allow theme change to update particle colors
    window._canvasColorUpdate = () => {
      const { orange, blue } = getColors();
      particles.forEach(p => {
        p.color = Math.random() > 0.55 ? orange : blue;
      });
    };

    function drawCircuit(x, y, sz, a) {
      ctx.save();
      ctx.globalAlpha = a * 0.35;
      ctx.strokeStyle = '#f5cd47';
      ctx.lineWidth   = 0.7;
      ctx.beginPath(); ctx.rect(x, y, sz, sz); ctx.stroke();
      ctx.beginPath(); ctx.arc(x + sz/2, y + sz/2, sz/4, 0, Math.PI*2); ctx.stroke();
      ctx.restore();
    }

    let frameId;
    function animate() {
      frameId = requestAnimationFrame(animate);
      ctx.clearRect(0, 0, W, H);

      // Faint circuit traces
      drawCircuit(W*0.08,  H*0.12, 65, 0.4);
      drawCircuit(W*0.84,  H*0.18, 80, 0.32);
      drawCircuit(W*0.04,  H*0.72, 52, 0.36);
      drawCircuit(W*0.81,  H*0.78, 70, 0.28);

      // Particles
      particles.forEach(p => {
        p.x += p.vx; p.y += p.vy;
        if (p.x < 0) p.x = W; if (p.x > W) p.x = 0;
        if (p.y < 0) p.y = H; if (p.y > H) p.y = 0;
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, Math.PI*2);
        ctx.fillStyle = p.color;
        ctx.globalAlpha = p.alpha;
        ctx.fill();
        ctx.globalAlpha = 1;
      });

      // Connections
      for (let i = 0; i < particles.length; i++) {
        for (let j = i+1; j < particles.length; j++) {
          const dx   = particles[i].x - particles[j].x;
          const dy   = particles[i].y - particles[j].y;
          const dist = Math.sqrt(dx*dx + dy*dy);
          if (dist < CONNECT_DIST) {
            ctx.beginPath();
            ctx.moveTo(particles[i].x, particles[i].y);
            ctx.lineTo(particles[j].x, particles[j].y);
            ctx.strokeStyle = particles[i].color;
            ctx.globalAlpha = (1 - dist/CONNECT_DIST) * 0.28;
            ctx.lineWidth   = 0.75;
            ctx.stroke();
            ctx.globalAlpha = 1;
          }
        }
      }
    }
    animate();
  }

  // ── 4. Countdown Timer ───────────────────────────────────
  const eventDate = new Date('2026-09-10T09:00:00+05:30');

  function updateCountdown() {
    const diff = eventDate - new Date();
    const els  = { days: 'cd-days', hours: 'cd-hours', mins: 'cd-mins', secs: 'cd-secs' };
    const cdTitle = document.getElementById('cd-title');

    if (!document.getElementById('cd-days')) return;

    if (diff <= 0) {
      Object.values(els).forEach(id => { const el = document.getElementById(id); if (el) el.textContent = '00'; });
      if (cdTitle) cdTitle.textContent = '🎉 Event Is Live!';
      return;
    }
    const pad = n => String(n).padStart(2, '0');
    document.getElementById('cd-days').textContent  = pad(Math.floor(diff / 86400000));
    document.getElementById('cd-hours').textContent = pad(Math.floor((diff % 86400000) / 3600000));
    document.getElementById('cd-mins').textContent  = pad(Math.floor((diff % 3600000)  / 60000));
    document.getElementById('cd-secs').textContent  = pad(Math.floor((diff % 60000)    / 1000));
  }
  updateCountdown();
  setInterval(updateCountdown, 1000);

  // ── 5. FAQ Accordion ─────────────────────────────────────
  document.querySelectorAll('.faq-item').forEach(item => {
    item.querySelector('.faq-question').addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(f => f.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    });
  });

  // Scroll reveal DISABLED — all elements visible immediately
  document.querySelectorAll('.reveal').forEach(el => el.classList.add('visible'));

  // ── 7. Counter Animation ─────────────────────────────────
  function animateCounter(el, target, suffix) {
    const duration  = 800;
    const startTime = performance.now();
    (function update(now) {
      const p   = Math.min((now - startTime) / duration, 1);
      const val = Math.floor((1 - Math.pow(1-p, 3)) * target);
      el.textContent = val.toLocaleString('en-IN') + (suffix || '');
      if (p < 1) requestAnimationFrame(update);
    })(startTime);
  }

  const statsObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.querySelectorAll('.stat-num[data-target]').forEach(el => {
          animateCounter(el, parseInt(el.dataset.target), el.dataset.suffix || '');
        });
        statsObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });
  const statsSection = document.getElementById('stats');
  if (statsSection) statsObs.observe(statsSection);

  // ── 8. Active Nav on Scroll ──────────────────────────────
  const sections   = document.querySelectorAll('section[id]');
  const navAnchors = document.querySelectorAll('#navLinks a[href^="#"]');
  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(s => { if (window.scrollY >= s.offsetTop - 100) current = s.id; });
    navAnchors.forEach(a => {
      a.style.color = (a.getAttribute('href') === '#' + current) ? 'var(--orange)' : '';
    });
  }, { passive: true });

  // ── 9. Notice Banner Dynamic ─────────────────────────────
  const regDeadline  = new Date('2026-09-07T23:59:59+05:30');
  const eventDateEnd = new Date('2026-09-10T23:59:59+05:30');
  const banner       = document.getElementById('notice-banner');
  if (banner) {
    const now = new Date();
    if (now > eventDateEnd) {
      banner.innerHTML = '<span class="notice-highlight">✅ SIH 2026 Internal Round Completed!</span> Thank you to all participants!';
    } else if (now > regDeadline) {
      banner.innerHTML = '<span class="notice-highlight">⚠️ Registration Closed.</span> Event Day: <span class="notice-highlight">10 September 2026</span> at SATI Campus.';
    }
  }

});
