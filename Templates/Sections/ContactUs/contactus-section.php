<!-- ============================
     CONTACT US SECTION (Reusable Component)
============================= -->

<link rel="stylesheet" href="assets/css/variables.css">
<link rel="stylesheet" href="Templates/Sections/ContactUs/assets/css/contactus-section.css">

<section id="contact" class="contact-section" data-animate="fade-up">
  <div class="contact-container">

    <!-- LEFT SIDE -->
    <div class="contact-info" data-animate="slide-right">
      <div class="info-content">
        <h2 data-animate="fade-right">Get In Touch</h2>
        <p data-animate="fade-right">
          We’re here to help! Whether you have questions, feedback,
          or just want to say hello, reach out to us anytime.
        </p>

        <div class="info-details">
          <div class="info-item" data-animate="fade-up">
            <h4>Email</h4>
            <p>Contact us by email and we will respond shortly</p>
            <p>info@yourcompany.com</p>
          </div>

          <div class="info-item" data-animate="fade-up" style="animation-delay:0.1s;">
            <h4>Mobile</h4>
            <p>Call us on weekdays from 9 AM to 5 PM</p>
            <p>+27 00 000 0000</p>
          </div>

          <div class="info-item" data-animate="fade-up" style="animation-delay:0.2s;">
            <h4>Office</h4>
            <p>Visit us at our headquarters</p>
            <p>123 Business Street<br>Cape Town, South Africa</p>
          </div>

          <div class="info-item" data-animate="fade-up" style="animation-delay:0.3s;">
            <h4>Office</h4>
            <p>Visit us at our headquarters</p>
            <p>123 Business Street<br>Cape Town, South Africa</p>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT SIDE -->
    <div class="contact-form" data-animate="slide-left">
      <form id="contactForm" method="POST" action="contact_submit.php">
        <h3 data-animate="fade-down">Send Us a Message</h3>

        <div class="form-row">
          <div class="form-group half-width" data-animate="fade-up">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName" placeholder="John" required>
          </div>
          <div class="form-group half-width" data-animate="fade-up" style="animation-delay:0.1s;">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
          </div>
        </div>

        <div class="form-group" data-animate="fade-up" style="animation-delay:0.2s;">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="john.doe@example.com" required>
        </div>

        <div class="form-group" data-animate="fade-up" style="animation-delay:0.3s;">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
        </div>

        <button type="submit" data-animate="fade-up" style="animation-delay:0.4s;">Send Message</button>
      </form>
    </div>

  </div>
</section>

<!-- GLOBAL SCROLL ANIMATION SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const animatedEls = document.querySelectorAll("[data-animate]");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      const el = entry.target;
      if (entry.isIntersecting) {
        el.classList.add("animate-active");
      } else {
        el.classList.remove("animate-active");
      }
    });
  }, { threshold: 0.2 });

  animatedEls.forEach(el => observer.observe(el));
});
</script>
