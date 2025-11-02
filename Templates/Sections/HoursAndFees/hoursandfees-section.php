<!-- ============================ HOURS & FEES SECTION (Full-width) ============================= -->
<link rel="stylesheet" href="Sections//css/variables.css">
<link rel="stylesheet" href="Sections/css/hoursandfees-section.css">

<section id="hours-fees" class="hours-fees-section dark-theme">
  <div class="content-wrapper">

    <!-- HOURS COLUMN -->
    <div class="hours-column" data-animate="fade-right">
      <h2 data-animate="fade-up">Hours & Availability</h2>
      <p data-animate="fade-up">We’re available when your ideas strike — flexible, reliable, and always on schedule.</p>
      <table class="hours-table" data-animate="fade-up">
        <tr><td>Mon – Fri</td><td>08:00 – 17:00</td></tr>
        <tr><td>Saturday</td><td>Closed</td></tr>
        <tr><td>Sunday</td><td>Closed</td></tr>
      </table>
    </div>

    <!-- FEES COLUMN -->
    <div class="fees-column" data-animate="fade-left">
      <h2 data-animate="fade-up">Our Packages</h2>

      <div class="fee-cards">
        <!-- Kickstarter Package -->
        <div class="fee-card" data-animate="fade-up">
          <div class="card-header">
            <h4>starter</h4>
            <span class="price">R1,500/mo</span>
          </div>
          <ul>
            <li>1-page modern website (5 sections)</li>
            <li>Hosting & domain registration</li>
            <li>6GB storage</li>
            <li>SEO management</li>
            <li>Monthly content updates</li>
            <li>Ongoing maintenance</li>
          </ul>
          <a href="#contact-us" class="inquire-btn">Get Started</a>
        </div>

        <!-- Custom Website Package -->
        <div class="fee-card" data-animate="fade-up">
          <div class="card-header">
            <h4>Custom site</h4>
            <span class="price">Quote-based</span>
          </div>
          <ul>
            <li>Fully tailored design & development</li>
            <li>Unlimited pages (as needed)</li>
            <li>Advanced SEO setup</li>
            <li>E-commerce or booking options</li>
            <li>Brand integration & animations</li>
            <li>Includes hosting & maintenance options</li>
          </ul>
          <a href="#contact-us" class="inquire-btn">Request Quote</a>
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
