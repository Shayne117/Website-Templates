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
<link rel="stylesheet" href="assets/css/contactus.css">

<!-- ============================
     SECTION CONTAINER
     - Holds both the left info panel and right form panel
============================= -->
<section id="contact" class="contact-section">
  <div class="contact-container">

    <!-- ============================
         LEFT SIDE: CONTACT INFORMATION
         - Displays address, phone, email, etc.
         - Styled dark with contrasting highlight color
    ============================= -->
    <div class="contact-info">
      <div class="info-content">
        <h2>Get In Touch</h2>
        <p>
          We’re here to help! Whether you have questions, feedback,
          or just want to say hello, reach out to us anytime.
        </p>

        <!-- ============================
             GRID OF CONTACT DETAILS
             - Each "info-item" is one contact block (Email, Phone, etc.)
             - Layout: 2x2 grid on desktop, 1x4 on mobile
        ============================= -->
        <div class="info-details">
          <!-- Email -->
          <div class="info-item">
            <h4>Email</h4>
            <p>Contact us by email and we will respond shortly</p>
            <p>info@yourcompany.com</p>
          </div>

          <!-- Mobile -->
          <div class="info-item">
            <h4>Mobile</h4>
            <p>Call us on weekdays from 9 AM to 5 PM</p>
            <p>+27 00 000 0000</p>
          </div>

          <!-- Office -->
          <div class="info-item">
            <h4>Office</h4>
            <p>Visit us at our headquarters</p>
            <p>123 Business Street<br>Cape Town, South Africa</p>
          </div>
            <!-- Office -->
          <div class="info-item">
            <h4>Office</h4>
            <p>Visit us at our headquarters</p>
            <p>123 Business Street<br>Cape Town, South Africa</p>
          </div>
        </div> <!-- /info-details -->
      </div> <!-- /info-content -->
    </div> <!-- /contact-info -->

    <!-- ============================
         RIGHT SIDE: CONTACT FORM
         - User input area to send messages
         - Form posts data to 'contact_submit.php'
    ============================= -->
    <div class="contact-form">
      <form id="contactForm" method="POST" action="contact_submit.php">
        <h3>Send Us a Message</h3>

        <!-- First/Last Name Row -->
        <div class="form-row">
          <!-- First Name -->
          <div class="form-group half-width">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName" placeholder="John" required>
          </div>

          <!-- Last Name -->
          <div class="form-group half-width">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
          </div>
        </div>

        <!-- Email Field -->
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="john.doe@example.com" required>
        </div>

        <!-- Message Field -->
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit">Send Message</button>
      </form>
    </div> <!-- /contact-form -->

  </div> <!-- /contact-container -->
</section>
