<?php
// ─── Dynamic Date Logic ───────────────────────────────────
$event_date      = new DateTime('2026-09-10 09:00:00', new DateTimeZone('Asia/Kolkata'));
$reg_deadline    = new DateTime('2026-09-07 23:59:59', new DateTimeZone('Asia/Kolkata'));
$now             = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$reg_closed      = $now > $reg_deadline;
$event_over      = $now > $event_date;
$current_year    = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIH 2026 Internal Round — SATI Vidisha</title>
  <meta name="description" content="Smart India Hackathon 2026 Internal Round at Samrat Ashok Technological Institute, Vidisha, M.P. Register your team, explore problem statements, and join the innovation journey." />
  <meta name="keywords" content="SIH 2026, Smart India Hackathon, SATI Vidisha, Internal Round, Hackathon, MP, Startup Cell" />
  <meta name="author" content="Startup Cell, SATI Vidisha" />
  <!-- Open Graph -->
  <meta property="og:title" content="SIH 2026 Internal Round — SATI Vidisha" />
  <meta property="og:description" content="Participate in the Smart India Hackathon 2026 Internal Round at SATI, Vidisha. Register by September 7, 2026." />
  <meta property="og:type" content="website" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <!-- Theme script to prevent FOUC / Color Jitter -->
  <script>
    (function() {
      var savedTheme = localStorage.getItem('sih-theme') || 'dark';
      document.documentElement.setAttribute('data-theme', savedTheme);
    })();
  </script>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<!-- India Tricolor Bar -->
<div class="india-bar"></div>

<!-- ══════════════════════════════════════════════════════
     NOTICE BANNER
══════════════════════════════════════════════════════ -->
<div class="notice-banner" id="notice-banner">
  <?php if ($event_over): ?>
    <span class="notice-highlight">✅ SIH 2026 Internal Round Completed.</span> Thank you to all participants!
  <?php elseif ($reg_closed): ?>
    <span class="notice-highlight">⚠️ Registration Closed.</span> Event Day: <span class="notice-highlight">10 September 2026</span> at SATI Campus.
  <?php else: ?>
    🎯 <span class="notice-highlight">Registration Open!</span> Last date to register: <span class="notice-highlight">7 September 2026</span> &nbsp;|&nbsp;
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdya0mbfZyhgf5HdVg5-n7kTskO_dV9WyK3kc8CGcEGXtd5GA/formResponse?pli=1" target="_blank" rel="noopener" style="color:var(--orange);font-weight:700;">Register Now →</a>
  <?php endif; ?>
</div>

<!-- ══════════════════════════════════════════════════════
     NAVBAR
══════════════════════════════════════════════════════ -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="#hero" class="nav-brand">
      <img src="assets/sati-logo.png" alt="SATI Logo" id="nav-logo"
           style="background:transparent;mix-blend-mode:normal;" />
      <div class="nav-brand-text">
        <div class="nav-brand-name">SATI Vidisha</div>
        <div class="nav-brand-sub">SIH 2026 · Internal Round</div>
      </div>
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="#about">About</a></li>
      <li><a href="#themes">Themes</a></li>
      <li><a href="#timeline">Timeline</a></li>
      <li><a href="#links">Resources</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#contact">Contact</a></li>
      <li>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdya0mbfZyhgf5HdVg5-n7kTskO_dV9WyK3kc8CGcEGXtd5GA/formResponse?pli=1"
           target="_blank" rel="noopener" class="nav-cta" id="nav-register-btn">
          Register Now
        </a>
      </li>
    </ul>

    <div style="display:flex;align-items:center;gap:10px;">
      <!-- Theme Toggle -->
      <button class="theme-toggle" id="theme-toggle" aria-label="Toggle theme">
        <span id="theme-icon">☀️</span>
      </button>
      <button class="hamburger" id="hamburger" aria-label="Toggle Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<!-- ══════════════════════════════════════════════════════
     HERO SECTION
══════════════════════════════════════════════════════ -->
<section id="hero">
  <div class="glow-orb orb-orange hero-orb-1"></div>
  <div class="glow-orb orb-blue hero-orb-2"></div>

  <div class="hero-content">
    <!-- Left: Text -->
    <div class="hero-left">
      <div class="hero-badge">
        <span class="badge-dot"></span>
        Registrations Open — Deadline: Sep 7
      </div>

      <h1 class="hero-title">
        <span class="gradient-text">Smart India</span><br />
        Hackathon 2026<br />
        <span style="color:var(--muted); font-size:0.65em; font-weight:500;">Internal Round</span>
      </h1>

      <p class="hero-sub">
        <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/>
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        Samrat Ashok Technological Institute, Vidisha, M.P.
      </p>

      <div class="hero-date-bar">
        <div class="date-chip">
          <span class="date-chip-label">Event Date</span>
          <span class="date-chip-value">10 September 2026</span>
        </div>
        <div style="width:1px;background:var(--border);align-self:stretch;"></div>
        <div class="date-chip">
          <span class="date-chip-label">Reg. Deadline</span>
          <span class="date-chip-value">7 September 2026</span>
        </div>
        <div style="width:1px;background:var(--border);align-self:stretch;"></div>
        <div class="date-chip">
          <span class="date-chip-label">Venue</span>
          <span class="date-chip-value">SATI Campus</span>
        </div>
      </div>

      <div class="hero-actions">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdya0mbfZyhgf5HdVg5-n7kTskO_dV9WyK3kc8CGcEGXtd5GA/formResponse?pli=1"
           target="_blank" rel="noopener" class="btn-primary" id="hero-register-btn">
          <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
          </svg>
          Register Your Team
        </a>
        <a href="https://www.sih.gov.in/sih2026PS" target="_blank" rel="noopener" class="btn-secondary" id="hero-ps-btn">
          <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
          </svg>
          View Problem Statements
        </a>
      </div>
    </div>

    <!-- Right: Countdown -->
    <div class="hero-right">
      <!-- Countdown Card -->
      <div class="countdown-wrapper">
        <div class="countdown-title" id="cd-title">
          ⏱️ Countdown to Event Day
        </div>
        <div class="countdown-grid">
          <div class="countdown-unit">
            <span class="countdown-num" id="cd-days">00</span>
            <span class="countdown-label-sm">Days</span>
          </div>
          <div class="countdown-unit">
            <span class="countdown-num" id="cd-hours">00</span>
            <span class="countdown-label-sm">Hours</span>
          </div>
          <div class="countdown-unit">
            <span class="countdown-num" id="cd-mins">00</span>
            <span class="countdown-label-sm">Mins</span>
          </div>
          <div class="countdown-unit">
            <span class="countdown-num" id="cd-secs">00</span>
            <span class="countdown-label-sm">Secs</span>
          </div>
        </div>
        <div class="countdown-event-info">
          <div class="event-info-row">
            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <strong>10 September 2026</strong>
          </div>
          <div class="event-info-row">
            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/>
            </svg>
            SATI Campus, Vidisha, M.P.
          </div>
          <div class="event-info-row">
            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Reg. closes: <strong>7 September 2026</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════════════
     ABOUT SECTION
══════════════════════════════════════════════════════ -->
<section id="about" class="section-pad">
  <div class="glow-orb orb-blue" style="width:500px;height:500px;top:-100px;left:-200px;"></div>
  <div class="container">
    <div class="about-grid">
      <!-- Left: About text + Process -->
      <div class=" ">
        <span class="section-label">About the Event</span>
        <h2 class="section-title">What is <span>SIH 2026?</span></h2>
        <div class="about-text">
          <p>
            <span class="about-highlight">Smart India Hackathon (SIH)</span> is India's premier nationwide initiative by the
            Ministry of Education's Innovation Cell (MIC) &amp; AICTE. It provides a dynamic platform for students to develop
            creative solutions to real-world problems posed by government ministries, PSUs, and industries.
          </p>
          <p>
            The <span class="about-highlight">Internal Round at SATI, Vidisha</span> is the gateway to the national stage.
            Top teams from our campus will be recommended to represent SATI at the SIH Grand Finale 2026.
          </p>
        </div>

        <div class="process-steps">
          <div class="process-step ">
            <div class="step-num">01</div>
            <div class="step-content">
              <h4>Register &amp; Pick a Problem Statement</h4>
              <p>Form a team of 2–6 members, register via the form, and choose a PS from the SIH portal by Sep 7.</p>
            </div>
          </div>
          <div class="process-step ">
            <div class="step-num">02</div>
            <div class="step-content">
              <h4>Prepare Your Idea PPT</h4>
              <p>Use the official SIH 2026 Idea Presentation Format. Present your innovative solution clearly.</p>
            </div>
          </div>
          <div class="process-step ">
            <div class="step-num">03</div>
            <div class="step-content">
              <h4>Present &amp; Compete on Sep 10</h4>
              <p>Present your idea before a panel of judges at SATI. Top teams advance to the National Grand Finale.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Organizer cards -->
      <div class="organizer-cards ">
        <div class="org-card">
          <div class="org-icon">🚀</div>
          <h3>Startup Cell, SATI</h3>
          <p>The Startup Cell at SATI Vidisha fosters entrepreneurship and innovation among students. As the organizing body for SIH 2026 Internal Round, we ensure a smooth and impactful experience for all participants.</p>
          <span class="org-role">Organizer</span>
        </div>
        <div class="org-card">
          <div class="org-icon">👩‍🏫</div>
          <h3>Dr. Divya Rishi Sahu</h3>
          <p>Faculty Coordinator for SIH 2026 at SATI Vidisha. For any academic or event-related queries, reach out through the contact details below.</p>
          <span class="org-role">Faculty Coordinator · SATI, Vidisha</span>
        </div>
        <div class="org-card" style="flex-direction:row;align-items:center;gap:20px;">
          <img src="assets/sati-logo.png" alt="SATI Logo"
               style="width:64px;height:64px;object-fit:contain;filter:drop-shadow(0 0 12px rgba(255,107,0,0.3));flex-shrink:0;" />
          <div>
            <h3 style="margin-bottom:4px;">Samrat Ashok Technological Institute</h3>
            <p>Vidisha, Madhya Pradesh &nbsp;|&nbsp; RGPV Affiliated</p>
            <span class="org-role">Host Institution</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     THEMES SECTION
══════════════════════════════════════════════════════ -->
<section id="themes" class="section-pad">
  <div class="container">
    <div class="text-center ">
      <span class="section-label">Innovation Tracks</span>
      <h2 class="section-title">SIH 2026 <span>Themes</span></h2>
      <p class="section-desc">Choose from 17 exciting innovation domains. Every theme represents a critical area of national development.</p>
    </div>

    <?php
    $themes = [
      ['icon'=>'🤖', 'name'=>'Smart Automation'],
      ['icon'=>'🏃', 'name'=>'Fitness & Sports'],
      ['icon'=>'🚀', 'name'=>'Space Technology'],
      ['icon'=>'🏛️', 'name'=>'Heritage & Culture'],
      ['icon'=>'🏥', 'name'=>'MedTech / BioTech / HealthTech'],
      ['icon'=>'🌾', 'name'=>'Agriculture, FoodTech & Rural Development'],
      ['icon'=>'🚗', 'name'=>'Smart Vehicles'],
      ['icon'=>'🚚', 'name'=>'Transportation & Logistics'],
      ['icon'=>'🦾', 'name'=>'Robotics & Drones'],
      ['icon'=>'♻️', 'name'=>'Clean & Green Technology'],
      ['icon'=>'🗺️', 'name'=>'Tourism'],
      ['icon'=>'⚡', 'name'=>'Renewable / Sustainable Energy'],
      ['icon'=>'🔐', 'name'=>'Blockchain & Cybersecurity'],
      ['icon'=>'📚', 'name'=>'Smart Education'],
      ['icon'=>'🌊', 'name'=>'Disaster Management'],
      ['icon'=>'🎮', 'name'=>'Games & Toys'],
      ['icon'=>'💰', 'name'=>'FinTech'],
    ];
    ?>

    <div class="themes-grid">
      <?php foreach ($themes as $i => $theme): ?>
      <div class="theme-card " style="transition-delay:<?= ($i % 6) * 0.07 ?>s;">
        <span class="theme-icon"><?= $theme['icon'] ?></span>
        <div class="theme-name"><?= htmlspecialchars($theme['name']) ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center" style="margin-top:36px;">
      <a href="https://www.sih.gov.in/SIH_Themes" target="_blank" rel="noopener" class="btn-secondary" id="themes-link">
        Explore All Themes on SIH Website
        <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
        </svg>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     TIMELINE SECTION
══════════════════════════════════════════════════════ -->
<section id="timeline" class="section-pad">
  <div class="container">
    <div class="text-center ">
      <span class="section-label">Important Dates</span>
      <h2 class="section-title">Event <span>Timeline</span></h2>
      <p class="section-desc">Mark your calendar — every deadline matters on the path to the Grand Finale.</p>
    </div>

    <div class="timeline-wrapper ">
      <div class="timeline-line"></div>
      <div class="timeline-items">
        <div class="timeline-item">
          <div class="tl-dot passed"></div>
          <div class="tl-content">
            <div class="tl-date">Now Open</div>
            <div class="tl-title">Registrations Open</div>
            <div class="tl-desc">Team registration on Google Form is open now</div>
          </div>
        </div>
        <div class="timeline-item">
          <div class="tl-dot passed"></div>
          <div class="tl-content">
            <div class="tl-date">Sep 5, 2026</div>
            <div class="tl-title">Join WhatsApp Community</div>
            <div class="tl-desc">Join for updates, announcements &amp; queries</div>
          </div>
        </div>
        <div class="timeline-item">
          <div class="tl-dot active"></div>
          <div class="tl-content">
            <div class="tl-date">Sep 7, 2026</div>
            <div class="tl-title">Registration Deadline ⚠️</div>
            <div class="tl-desc">Last date to register your team &amp; submit idea PPT</div>
          </div>
        </div>
        <div class="timeline-item">
          <div class="tl-dot"></div>
          <div class="tl-content">
            <div class="tl-date">Sep 10, 2026</div>
            <div class="tl-title">Internal Hackathon Day 🎯</div>
            <div class="tl-desc">Presentation round at SATI Campus, Vidisha</div>
          </div>
        </div>
        <div class="timeline-item">
          <div class="tl-dot"></div>
          <div class="tl-content">
            <div class="tl-date">Sep 11, 2026</div>
            <div class="tl-title">Results Announced 🏆</div>
            <div class="tl-desc">At Smart Classroom. Top teams selected for SIH 2026 Grand Finale</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Day Schedule -->
    <div class="day-schedule " style="margin-top:60px;">
      <h3>
        <span style="font-size:1.4rem;">📅</span>
        September 10 — Event Day Schedule
      </h3>
      <div class="schedule-grid">
        <div class="schedule-item">
          <span class="schedule-time">10:30 AM</span>
          <div class="schedule-info">
            <h5>Inauguration Ceremony</h5>
            <p>Welcome address &amp; event briefing by faculty &amp; Startup Cell</p>
          </div>
        </div>
        <div class="schedule-item">
          <span class="schedule-time">11:30 AM</span>
          <div class="schedule-info">
            <h5>Hackathon Starts</h5>
            <p>Teams present their PS solutions before the judges panel</p>
          </div>
        </div>
        <div class="schedule-item">
          <span class="schedule-time">01:30 PM</span>
          <div class="schedule-info">
            <h5>Lunch Break</h5>
            <p>Networking &amp; interaction with peers</p>
          </div>
        </div>
        <div class="schedule-item">
          <span class="schedule-time">02:30 PM</span>
          <div class="schedule-info">
            <h5>Second Half Starts</h5>
            <p>Hackathon continues</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     QUICK LINKS / RESOURCES
══════════════════════════════════════════════════════ -->
<section id="links" class="section-pad">
  <div class="glow-orb orb-orange" style="width:400px;height:400px;bottom:-100px;right:-100px;"></div>
  <div class="container">
    <div class="text-center ">
      <span class="section-label">Resources</span>
      <h2 class="section-title">Quick <span>Links</span></h2>
      <p class="section-desc">Everything you need, in one place. Access official resources, community, and materials.</p>
    </div>

    <div class="links-grid">
      <!-- WhatsApp -->
      <a href="https://chat.whatsapp.com/ITnW1NjKHrTAo9F9Lrst8m"
         target="_blank" rel="noopener" class="link-card " id="whatsapp-link">
        <div class="link-icon-wrap green">💬</div>
        <div class="link-card-title">WhatsApp Community</div>
        <div class="link-card-desc">Join the official SATI SIH 2026 WhatsApp group for real-time updates &amp; announcements.</div>
        <div class="link-card-arrow">Join Now →</div>
      </a>

      <!-- SIH Website -->
      <a href="https://www.sih.gov.in/" target="_blank" rel="noopener" class="link-card " id="sih-website-link">
        <div class="link-icon-wrap blue">🌐</div>
        <div class="link-card-title">SIH Official Website</div>
        <div class="link-card-desc">Visit the official Smart India Hackathon portal for national-level info, rules &amp; registration.</div>
        <div class="link-card-arrow">Visit →</div>
      </a>

      <!-- Problem Statements -->
      <a href="https://www.sih.gov.in/sih2026PS" target="_blank" rel="noopener" class="link-card " id="ps-link">
        <div class="link-icon-wrap orange">📋</div>
        <div class="link-card-title">Problem Statements</div>
        <div class="link-card-desc">Browse 233+ real-world problem statements across 17 themes from ministries &amp; PSUs.</div>
        <div class="link-card-arrow">Explore PS →</div>
      </a>

      <!-- PPT Template -->
      <a href="https://www.sih.gov.in/letters/2026/SIH2026-IDEA-Presentation-Format.pptx"
         target="_blank" rel="noopener" class="link-card " id="ppt-download-btn">
        <div class="link-icon-wrap orange">📥</div>
        <div class="link-card-title">Download PPT Template</div>
        <div class="link-card-desc">Official SIH 2026 Idea Presentation Format. Use this template for your submission. (PPTX)</div>
        <div class="link-card-arrow">Download →</div>
      </a>

      <!-- Guidelines PDF -->
      <a href="https://www.sih.gov.in/letters/2026/SIH%202026%20Guidelines.pdf"
         target="_blank" rel="noopener" class="link-card " id="guidelines-link">
        <div class="link-icon-wrap blue">📑</div>
        <div class="link-card-title">SIH 2026 Guidelines</div>
        <div class="link-card-desc">Official guidelines PDF for institutes and universities. Must-read before participating.</div>
        <div class="link-card-arrow">Read PDF →</div>
      </a>

      <!-- MIC Alumni -->
      <a href="https://alumni.mic.gov.in/" target="_blank" rel="noopener" class="link-card " id="mic-link">
        <div class="link-icon-wrap blue">🎓</div>
        <div class="link-card-title">MIC Alumni Network</div>
        <div class="link-card-desc">Connect with SIH alumni, find mentors, and expand your professional network.</div>
        <div class="link-card-arrow">Connect →</div>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     REGISTER / VOLUNTEER SECTION
══════════════════════════════════════════════════════ -->
<section id="register" class="section-pad">
  <div class="container">
    <div class="text-center ">
      <span class="section-label">Take Action</span>
      <h2 class="section-title">Register & <span>Volunteer</span></h2>
      <p class="section-desc">Be part of India's biggest innovation movement. Register your team or volunteer to make this event a success.</p>
    </div>

    <div class="register-grid">
      <!-- Team Registration -->
      <div class="reg-card primary-card ">
        <div class="reg-icon">🏆</div>
        <h2>Register Your Team</h2>
        <p>Form a team of 2–6 members, select a Problem Statement from the SIH portal, and register before the deadline.</p>
        <ul class="reg-features">
          <li>Open to all SATI students (UG/PG)</li>
          <li>Team size: 2 to 6 members</li>
          <li>Cross-department teams allowed</li>
          <li>Registration is completely FREE</li>
          <li>Deadline: 7 September 2026</li>
        </ul>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdya0mbfZyhgf5HdVg5-n7kTskO_dV9WyK3kc8CGcEGXtd5GA/formResponse?pli=1"
           target="_blank" rel="noopener" class="btn-white" id="reg-form-btn">
          <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
          Register Now
        </a>
      </div>

      <!-- Volunteer Form -->
      <div class="reg-card secondary-card ">
        <div class="reg-icon">🤝</div>
        <h2>Volunteer for SIH 2026</h2>
        <p>Help organize the event and gain valuable experience in event management, coordination, and leadership.</p>
        <ul class="reg-features">
          <li>Event coordination &amp; management</li>
          <li>Registration desk support</li>
          <li>Logistics &amp; setup</li>
          <li>Get a volunteer certificate</li>
          <li>Network with mentors &amp; judges</li>
        </ul>
        <a href="https://forms.gle/4rEzojgHAcSUozsk7"
           target="_blank" rel="noopener" class="btn-outline-orange" id="volunteer-form-btn">
          <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
          Volunteer Now
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     FAQ SECTION
══════════════════════════════════════════════════════ -->
<section id="faq" class="section-pad">
  <div class="container">
    <div class="text-center ">
      <span class="section-label">Need Help?</span>
      <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
      <p class="section-desc">Find answers to common questions about SIH 2026 Internal Round at SATI.</p>
    </div>

    <?php
    $faqs = [
      [
        'q' => 'Who can participate in SIH 2026 Internal Round?',
        'a' => 'Any currently enrolled student of Samrat Ashok Technological Institute (SATI), Vidisha — whether UG or PG — is eligible to participate. Students from all departments and branches can form teams.'
      ],
      [
        'q' => 'What is the team size requirement?',
        'a' => 'A team must have a minimum of 2 members and a maximum of 6 members. All team members must be registered students of SATI Vidisha. Cross-department teams are allowed and encouraged!'
      ],
      [
        'q' => 'How do I select a Problem Statement (PS)?',
        'a' => 'Visit the official SIH Problem Statements page at <a href="https://www.sih.gov.in/sih2026PS" target="_blank">sih.gov.in/sih2026PS</a>. Browse through 17 themes and 233+ problem statements. Choose one that excites your team and aligns with your skills.'
      ],
      [
        'q' => 'Is registration free? What is the process?',
        'a' => 'Yes, registration is completely free. Fill out the Registration Form (link above), and also ensure that the team leader registers on the official SIH portal at <a href="https://www.sih.gov.in" target="_blank">sih.gov.in</a>. Last date for registration is 7 September 2026.'
      ],
      [
        'q' => 'What should the idea PPT contain?',
        'a' => 'Use the official SIH 2026 Idea Presentation Format (available for download above). The PPT should clearly describe the Problem Statement, your proposed solution, technology stack, feasibility, and team details. Stick to the given format strictly.'
      ],
      [
        'q' => 'Can students from different departments form a team?',
        'a' => 'Absolutely! Interdisciplinary teams are highly encouraged. A mix of CSE, ECE, Mechanical, Civil, MBA, and other branches can bring diverse perspectives and stronger solutions.'
      ],
      [
        'q' => 'What happens after the Internal Round?',
        'a' => 'The top teams from the Internal Round will be recommended by SATI\'s SPOC for the SIH 2026 Grand Finale — a national-level event where teams compete against participants from all over India. Selected teams submit their ideas on the SIH portal.'
      ],
      [
        'q' => 'What is the prize at the National Level (Grand Finale)?',
        'a' => 'The SIH Grand Finale offers prizes worth lakhs for winning teams, along with national recognition, certificates from MIC/AICTE, and opportunities for incubation and mentorship. Check the <a href="https://www.sih.gov.in" target="_blank">SIH official website</a> for updated prize details.'
      ],
      [
        'q' => 'What is the evaluation criteria for the Internal Round?',
        'a' => 'Teams will be evaluated on: (1) Innovation & Originality, (2) Feasibility & Scalability, (3) Technical Approach, (4) Impact & Relevance to Problem Statement, and (5) Clarity of Presentation. Judges will be faculty members and industry experts.'
      ],
      [
        'q' => 'How can I join the WhatsApp community for updates?',
        'a' => 'Click the WhatsApp Community link on this page or visit: <a href="https://chat.whatsapp.com/ITnW1NjKHrTAo9F9Lrst8m" target="_blank">chat.whatsapp.com/ITnW1NjKHrTAo9F9Lrst8m</a>. All important announcements, schedule changes, and resources will be shared there.'
      ],
    ];
    ?>

    <div class="faq-wrapper">
      <?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item " id="faq-<?= $i + 1 ?>">
        <button class="faq-question" id="faq-btn-<?= $i + 1 ?>" aria-expanded="false">
          <span class="faq-q-text"><?= htmlspecialchars($faq['q']) ?></span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner"><?= $faq['a'] ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     CONTACT SECTION
══════════════════════════════════════════════════════ -->
<section id="contact" class="section-pad">
  <div class="glow-orb orb-blue" style="width:500px;height:500px;bottom:-150px;left:-150px;"></div>
  <div class="container">
    <div class="text-center ">
      <span class="section-label">Get In Touch</span>
      <h2 class="section-title">Contact <span>Us</span></h2>
      <p class="section-desc">Have a question not covered in the FAQ? Reach out to us — we're here to help.</p>
    </div>

    <div class="contact-grid">
      <div class="contact-info-cards ">
        <div class="contact-card">
          <div class="contact-card-icon">🏫</div>
          <div class="contact-card-content">
            <h4>Institution</h4>
            <p>Samrat Ashok Technological Institute (SATI)<br/>Vidisha, Madhya Pradesh — 464001<br/>RGPV Affiliated | Government Institute</p>
          </div>
        </div>
        <div class="contact-card">
          <div class="contact-card-icon">👩‍🏫</div>
          <div class="contact-card-content">
            <h4>Faculty Coordinator</h4>
            <p>Dr. Divya Rishi Sahu<br/>SATI Vidisha</p>
          </div>
        </div>
        <div class="contact-card">
          <div class="contact-card-icon">🚀</div>
          <div class="contact-card-content">
            <h4>Organizer</h4>
            <p>Startup Cell, SATI Vidisha<br/>Smart India Hackathon 2026 — Internal Round</p>
          </div>
        </div>
        <div class="contact-card">
          <div class="contact-card-icon">🌐</div>
          <div class="contact-card-content">
            <h4>SIH Official Contact</h4>
            <p>For national-level queries:<br/>
              <a href="mailto:sih@aicte-india.org">sih@aicte-india.org</a><br/>
              <a href="https://www.sih.gov.in/contactUs" target="_blank" rel="noopener">sih.gov.in/contactUs</a>
            </p>
          </div>
        </div>
      </div>

      <div class="social-links-block ">
        <a href="https://chat.whatsapp.com/ITnW1NjKHrTAo9F9Lrst8m"
           target="_blank" rel="noopener" class="social-btn whatsapp" id="contact-whatsapp-btn">
          <span class="social-btn-icon">💬</span>
          <span class="social-btn-text">
            <span class="social-btn-label">Join for Updates &amp; Announcements</span>
            <span class="social-btn-value">WhatsApp Community</span>
          </span>
          <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
        </a>

        <a href="https://www.sih.gov.in/" target="_blank" rel="noopener" class="social-btn sih-site" id="contact-sih-link">
          <span class="social-btn-icon">🏛️</span>
          <span class="social-btn-text">
            <span class="social-btn-label">Official Government Portal</span>
            <span class="social-btn-value">SIH Website — sih.gov.in</span>
          </span>
          <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
          </svg>
        </a>

        <!-- Map embed placeholder card -->
        <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-md);padding:24px;text-align:center;">
          <div style="font-size:2.5rem;margin-bottom:12px;">📍</div>
          <div style="font-family:var(--font-head);font-size:1rem;font-weight:700;color:var(--text);margin-bottom:6px;">SATI Campus, Vidisha</div>
          <div style="font-size:0.85rem;color:var(--muted);margin-bottom:16px;">Madhya Pradesh — 464001</div>
          <a href="https://maps.google.com/?q=Samrat+Ashok+Technological+Institute+Vidisha+MP"
             target="_blank" rel="noopener"
             style="display:inline-flex;align-items:center;gap:8px;font-family:var(--font-head);font-size:0.85rem;font-weight:600;color:var(--orange);border:1px solid var(--border);padding:8px 18px;border-radius:50px;transition:var(--transition);"
             id="map-link">
            Open in Google Maps →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════════════════
     FOOTER
══════════════════════════════════════════════════════ -->
<footer id="footer">
  <div class="footer-inner">
    <div class="footer-top">
      <!-- Brand -->
      <div class="footer-brand">
        <div class="footer-brand-row">
          <img src="assets/sati-logo.png" alt="SATI Logo" class="footer-logo" />
          <div>
            <div class="footer-brand-name">SATI Vidisha</div>
            <div class="footer-brand-sub">SIH 2026 · Internal Round</div>
          </div>
        </div>
        <p>Samrat Ashok Technological Institute, Vidisha, Madhya Pradesh. Organized by <strong>Startup Cell, SATI</strong> in association with MIC-AICTE.</p>
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:8px;">
          <a href="https://www.sih.gov.in" target="_blank" rel="noopener"
             style="font-size:0.78rem;color:var(--text-dim);background:var(--surface);border:1px solid var(--border);padding:6px 14px;border-radius:50px;transition:var(--transition);"
             id="footer-sih-badge">sih.gov.in</a>
          <a href="https://chat.whatsapp.com/ITnW1NjKHrTAo9F9Lrst8m" target="_blank" rel="noopener"
             style="font-size:0.78rem;color:var(--green);background:rgba(34,197,94,0.08);border:1px solid rgba(34,197,94,0.2);padding:6px 14px;border-radius:50px;transition:var(--transition);"
             id="footer-whatsapp-badge">Join WhatsApp</a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#about">About SIH</a></li>
          <li><a href="#themes">Themes</a></li>
          <li><a href="#timeline">Timeline</a></li>
          <li><a href="#links">Resources</a></li>
          <li><a href="#faq">FAQ</a></li>
        </ul>
      </div>

      <!-- Forms -->
      <div class="footer-col">
        <h4>Participate</h4>
        <ul>
          <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdya0mbfZyhgf5HdVg5-n7kTskO_dV9WyK3kc8CGcEGXtd5GA/formResponse?pli=1" target="_blank" rel="noopener" id="footer-reg-link">Register Team</a></li>
          <li><a href="https://forms.gle/4rEzojgHAcSUozsk7" target="_blank" rel="noopener" id="footer-vol-link">Volunteer</a></li>
          <li><a href="https://www.sih.gov.in/sih2026PS" target="_blank" rel="noopener" id="footer-ps-link">Problem Statements</a></li>
          <li><a href="https://www.sih.gov.in/letters/2026/SIH2026-IDEA-Presentation-Format.pptx" target="_blank" rel="noopener" id="footer-ppt-link">PPT Template</a></li>
        </ul>
      </div>

      <!-- Official -->
      <div class="footer-col">
        <h4>Official</h4>
        <ul>
          <li><a href="https://www.sih.gov.in" target="_blank" rel="noopener" id="footer-sih-link">SIH Website</a></li>
          <li><a href="https://www.sih.gov.in/letters/2026/SIH%202026%20Guidelines.pdf" target="_blank" rel="noopener" id="footer-guide-link">Guidelines PDF</a></li>
          <li><a href="https://www.sih.gov.in/faqs" target="_blank" rel="noopener" id="footer-faq-link">SIH FAQs</a></li>
          <li><a href="https://alumni.mic.gov.in/" target="_blank" rel="noopener" id="footer-mic-link">MIC Alumni</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p class="copyright">
        &copy; <?php echo $current_year; ?> Startup Cell, SATI Vidisha. All Rights Reserved. 2026 Internal Round.
        Powered by MIC-AICTE, Govt. of India.
      </p>
      <div class="footer-badges">
        <span class="footer-badge">🏛️ MIC-AICTE Initiative</span>
        <span class="footer-badge">🇮🇳 Make in India</span>
        <span class="footer-badge">📍 SATI Vidisha</span>
      </div>
    </div>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>

