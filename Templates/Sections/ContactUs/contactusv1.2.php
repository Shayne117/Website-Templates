<!-- ============================
     CONTACT US SECTION (Reusable Component)
     File: contactus.php
     Author: Shayne Rothwell
     Description:
     - Modular "Contact Us" section for one-page sites.
     - Can be injected into any PHP page (e.g., include 'sections/contactus.php';)
     - Uses CSS variables for theme customization (colors, fonts, etc.)
============================= -->

<!-- Import CSS files -->
<link rel="stylesheet" href="assets/css/variables.css">
<link rel="stylesheet" href="Templates/Sections/ContactUs/assets/css/contactusv1.2.css">

<!-- ==============================
       CONTACT US SECTION
  =============================== -->
  <section id="contact" class="contact-section">
    <div class="contact-container">

      <!-- LEFT SIDE - INFORMATION -->
      <div class="contact-info">
        <div class="info-content">
          <h2>Get In Touch</h2>
          <p>We’re here to help! Whether you have questions, feedback, or just want to say hello, reach out to us anytime.</p>

          <div class="info-details">
            <div class="info-item">
              <h4>Email</h4>
              <p>Contact us by email and we will respond shortly</p>
              <p>info@yourcompany.com</p>
            </div>

            <div class="info-item">
              <h4>Mobile</h4>
              <p>Call us on weekdays from 9 AM to 5 PM</p>
              <p>+27 00 000 0000</p>
            </div>

            <div class="info-item">
              <h4>Phone</h4>
              <p>Call us on weekdays from 9 AM to 5 PM</p>
              <p>+27 00 000 0000</p>
            </div>

            <div class="info-item">
              <h4>Office</h4>
              <p>Visit us at our headquarters</p>
              <p>123 Business Street<br>Cape Town, South Africa</p>
            </div>
          </div>
        </div>
      </div>

      <!-- RIGHT SIDE - CONTACT FORM -->
      <div class="contact-form">
        <form id="contactForm" method="POST" action="contact_submit.php">
          <h3>Send Us a Message</h3>

          <div class="form-row">
            <div class="form-group half-width">
              <label for="firstName">First Name</label>
              <input type="text" id="firstName" name="firstName" placeholder="John" required>
            </div>

            <div class="form-group half-width">
              <label for="lastName">Last Name</label>
              <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="john.doe@example.com" required>
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
          </div>

          <button type="submit">Send Message</button>
        </form>
      </div>
    </div>
  </section>