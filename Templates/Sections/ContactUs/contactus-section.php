<!-- ============================
     CONTACT US SECTION (Reusable Component)
============================= -->

<link rel="stylesheet" href="Sections/css/variables.css">
<link rel="stylesheet" href="Sections/css/contactus-section.css">

<section id="contact-us" class="contact-section" data-animate="fade-up">
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
            <p>info@wondrwisecreations.co.za</p>
          </div>

          <div class="info-item" data-animate="fade-up" style="animation-delay:0.1s;">
            <h4>Mobile</h4>
            <p>Call us on weekdays from 8 AM to 5 PM</p>
            <p>083 2929 810</p>
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
  <form id="contactForm" method="POST">
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

    <!-- Google reCAPTCHA v2 -->
    <div class="g-recaptcha" data-sitekey="6LdjD_orAAAAAEZqnGO0qgU9N8Ns6097HzLjU5GE" style="margin:15px 0;"></div>

    <button type="submit" data-animate="fade-up" style="animation-delay:0.4s;">Send Message</button>

    <!-- Message display -->
    <div id="formMessage" style="margin-top:15px;"></div>
  </form>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
<script>
document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("contactForm");
  const messageDiv = document.getElementById("formMessage");

  form.addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent default form submission

    messageDiv.innerHTML = "Sending message...";
    messageDiv.style.color = "black";

    const formData = new FormData(form);

    fetch("sections/contact_submit.php", {
      method: "POST",
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      messageDiv.innerHTML = data;

      // If success, clear form and reset reCAPTCHA
      if (data.toLowerCase().includes("thank you")) {
        form.reset();
        if (grecaptcha) grecaptcha.reset();
      }
    })
    .catch(error => {
      messageDiv.innerHTML = "An error occurred. Please try again.";
      messageDiv.style.color = "red";
      console.error("Error:", error);
    });
  });
});
</script>
