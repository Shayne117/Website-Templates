<!-- ============================
     HOURS & FEES SECTION (Full-width)
============================= -->

<link rel="stylesheet" href="assets/css/variables.css">
<link rel="stylesheet" href="Templates/Sections/HoursAndFees/assets/css/hoursandfees-section.css">

<section id="hours-fees" class="hours-fees-section dark-theme">
  <div class="content-wrapper">

    <!-- HOURS COLUMN -->
    <div class="hours-column" data-animate="fade-right">
      <h2 data-animate="fade-up">Hours & Availability</h2>
      <p data-animate="fade-up">We’re available when your ideas strike — flexible, reliable, and always on schedule.</p>
      <table class="hours-table" data-animate="fade-up">
        <tr><td>Mon – Fri</td><td>08:00 – 18:00</td></tr>
        <tr><td>Saturday</td><td>09:00 – 14:00</td></tr>
        <tr><td>Sunday</td><td>By Appointment</td></tr>
      </table>
    </div>

    <!-- FEES COLUMN -->
    <div class="fees-column" data-animate="fade-left">
      <h2 data-animate="fade-up">Packages & Pricing</h2>
      <div class="fee-cards">
        <div class="fee-card" data-animate="fade-up">
          <div class="card-header">
            <h4>Starter</h4>
            <span class="price">R3,500</span>
          </div>
          <ul>
            <li>Up to 3 pages</li>
            <li>Responsive design</li>
            <li>Basic SEO setup</li>
          </ul>
          <a href="#contact" class="inquire-btn">Inquire</a>
        </div>

        <div class="fee-card" data-animate="fade-up">
          <div class="card-header">
            <h4>Business</h4>
            <span class="price">R7,500</span>
          </div>
          <ul>
            <li>Up to 7 pages</li>
            <li>SEO setup</li>
            <li>Custom branding</li>
            <li>Basic e-commerce</li>
          </ul>
          <a href="#contact" class="inquire-btn">Inquire</a>
        </div>

        <div class="fee-card" data-animate="fade-up">
          <div class="card-header">
            <h4>E-Commerce</h4>
            <span class="price">R12,000</span>
          </div>
          <ul>
            <li>Online store setup</li>
            <li>Product management</li>
            <li>Secure payment integration</li>
            <li>Responsive design</li>
          </ul>
          <a href="#contact" class="inquire-btn">Inquire</a>
        </div>

        <div class="fee-card" data-animate="fade-up">
          <div class="card-header">
            <h4>Hosting</h4>
            <span class="price">R350 / mo</span>
          </div>
          <ul>
            <li>Reliable hosting</li>
            <li>Automatic backups</li>
            <li>24/7 support</li>
            <li>Free SSL included</li>
          </ul>
          <a href="#contact" class="inquire-btn">Inquire</a>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  const animatedItems = document.querySelectorAll('[data-animate]');
  const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
      } else {
        entry.target.classList.remove('active');
      }
    });
  }, { threshold: 0.2 });

  animatedItems.forEach(el => scrollObserver.observe(el));
</script>

