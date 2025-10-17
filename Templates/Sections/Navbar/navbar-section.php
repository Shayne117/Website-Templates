<!-- ============================
     NAVBAR SECTION
============================= -->
<link rel="stylesheet" href="assets/css/variables.css">
<link rel="stylesheet" href="sections/Navbar/assets/css/navbar-section.css">

<header class="navbar-container">
  <div class="navbar">

    <!-- LOGO + NAME -->
<div class="logo-area">
  <img src="https://via.placeholder.com/60x60.png?text=Logo" alt="Logo" class="logo">
  <h1 class="site-name">YourCompany</h1>
</div>
    <!-- NAV LINKS -->
    <nav class="nav-links">
      <a href="#about">About Us</a>
      <a href="#what-we-offer">What We Offer</a>
      <a href="#contact">Contact Us</a>
      <a href="#hours">Hours & Fees</a>
    </nav>

    <!-- CONTACT INFO -->
    <div class="contact-info-navbar">
      <a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
      <span>|</span>
      <a href="tel:+27123456789">+27 12 345 6789</a>
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
    <a href="#hours">Hours & Fees</a>
    <div class="mobile-contact">
      <a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
      <a href="tel:+27123456789">+27 12 345 6789</a>
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
