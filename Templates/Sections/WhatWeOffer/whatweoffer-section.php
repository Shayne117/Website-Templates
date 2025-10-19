<!-- ============================ WHAT WE OFFER SECTION ============================= -->
<link rel="stylesheet" href="assets/css/variables.css">
<link rel="stylesheet" href="Templates/Sections/WhatWeOffer/assets/css/whatweoffer-section.css">

<section id="what-we-offer" class="offer-container">
  <div class="offer-content">

    <!-- LEFT IMAGE -->
    <div class="image-block-offer" data-animate="fade-left">
      <img src="assets/images/august-1-world-wide-web-day (1).webp" alt="What We Offer">
    </div>

    <!-- RIGHT CONTENT -->
    <div class="text-and-cards" data-animate="fade-right">
      <div class="section-header">
        <h2 data-animate="fade-up">What We Offer</h2>
        <p data-animate="fade-up">Empowering your business through modern digital solutions designed to help you grow faster, smarter, and more effectively.</p>
        <a href="#contact" class="btn-primary" data-animate="fade-up">Learn More...</a>
      </div>

      <!-- OFFER CARDS -->
      <div class="offer-cards">
        <div class="offer-card" data-animate="fade-up">
          <h3>Web Development</h3>
          <p>Custom websites tailored to your goals using the latest technologies for performance and design.</p>
        </div>

        <div class="offer-card" data-animate="fade-up">
          <h3>Digital Marketing</h3>
          <p>Boost your brand visibility with targeted marketing campaigns that deliver measurable results.</p>
        </div>

        <div class="offer-card" data-animate="fade-up">
          <h3>UI/UX Design</h3>
          <p>Engaging, user-centered designs that keep your customers coming back.</p>
        </div>

        <div class="offer-card" data-animate="fade-up">
          <h3>SEO Optimization</h3>
          <p>Improve your ranking and drive organic traffic with proven SEO strategies.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const elements = document.querySelectorAll('[data-animate]');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
      } else {
        entry.target.classList.remove('active'); // smooth reverse when scrolling up
      }
    });
  }, { threshold: 0.2 });

  elements.forEach(el => observer.observe(el));
</script>
