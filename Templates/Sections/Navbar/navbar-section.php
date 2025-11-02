<!-- ============================
     NAVBAR SECTION
============================= -->
<link rel="stylesheet" href="Sections/css/variables.css">
<link rel="stylesheet" href="Sections/css/navbar-section.css">

<header class="navbar-container">
  <div class="navbar">

    <!-- LOGO + NAME -->
<div class="logo-area">
  <img src="Sections/images/logo_1.png?text=Logo" alt="Logo" class="logo">
</div>
    <!-- NAV LINKS -->
    <nav class="nav-links">
      <a href="#about-us">About Us</a>
      <a href="#what-we-offer">What We Offer</a>
      <a href="#contact-us">Contact Us</a>
      <a href="#hours-fees">Hours & Fees</a>
    </nav>

    <!-- CONTACT INFO -->
    <div class="contact-info-navbar">
      <a href="mailto:info@wondrwisecreations.co.za">info@wondrwisecreations.co.za</a>
      <span>|</span>
      <a href="tel:+832929810">083 2929 810</a>
    </div>

    <!-- MOBILE MENU BUTTON -->
    <button class="menu-toggle" id="menu-toggle">
      <i class="bi bi-list"></i>
    </button>
  </div>

  <!-- MOBILE DROPDOWN MENU -->
  <div class="mobile-menu" id="mobile-menu">
    <a href="#about">About Us</a>
    <a href="#what-we-offer">What We Offer</a>
    <a href="#contact">Contact Us</a>
    <a href="#hours-fees">Hours & Fees</a>
    <div class="mobile-contact">
      <a href="mailto:info@wondrwisecreations.co.za">info@wondrwisecreations.co.za</a>
      <a href="tel:+832929810">083 2929 810</a>
    </div>
  </div>
</header>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<script>
  // Mobile menu toggle
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('mobile-menu');

  toggle.addEventListener('click', () => {
    menu.classList.toggle('active');
    toggle.classList.toggle('open');
  });
</script>
