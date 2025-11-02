<!-- ============================ WHAT WE OFFER SECTION ============================= -->
<link rel="stylesheet" href="Sections/css/variables.css">
<link rel="stylesheet" href="Sections/css/whatweoffer-section.css">

<section id="what-we-offer" class="offer-container">
  <div class="offer-content">

    <!-- LEFT IMAGE -->
    <div class="image-block-offer" data-animate="fade-left">
      <img src="Sections/images/image_8.jpg" alt="What We Offer">
    </div>

    <!-- RIGHT CONTENT -->
    <div class="text-and-cards" data-animate="fade-right">

      <!-- SECTION HEADER -->
      <div class="section-header">
        <h2 data-animate="fade-up">What We Offer</h2>
        <p data-animate="fade-up">
          Professional website design, development, and hosting services built to launch and grow your business. 
          Whether you’re a startup needing a quick launch or an established company wanting something custom — we’ve got you covered.
        </p>
        <a href="#contact-us" class="btn-primary" data-animate="fade-up">Get Started</a>
      </div>

      <!-- OFFER CARDS -->
      <div class="offer-cards">
        <div class="offer-card" data-animate="fade-up">
          <h3>🚀 Kickstarter Website Package</h3>
          <p>
            Perfect for startups and small businesses. Get a one-page website with 5 essential sections, 
            domain registration, hosting (6GB storage), SEO setup, monthly content update, and ongoing maintenance — 
            all for <strong>R1500/month</strong> (no hidden costs).
          </p>
        </div>

        <div class="offer-card" data-animate="fade-up">
          <h3>💻 Custom Web Development</h3>
          <p>
            We design and build fully customized websites tailored to your business goals using modern, scalable technologies. 
            Includes responsive design, performance optimization, and brand integration.
          </p>
        </div>

        <div class="offer-card" data-animate="fade-up">
          <h3>📈 Digital Marketing & SEO</h3>
          <p>
            Drive traffic and grow visibility with targeted marketing campaigns, social media integration, and SEO strategies 
            that help you rank higher and reach your audience faster.
          </p>
        </div>

        <div class="offer-card" data-animate="fade-up">
          <h3>🛠️ Hosting & Maintenance</h3>
          <p>
            Reliable, secure hosting with regular maintenance, uptime monitoring, and technical support. 
            We keep your site running smoothly while you focus on your business.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SCROLL ANIMATION SCRIPT -->
<script>
const elements = document.querySelectorAll('[data-animate]');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) entry.target.classList.add('active');
    else entry.target.classList.remove('active');
  });
}, { threshold: 0.2 });
elements.forEach(el => observer.observe(el));
</script>
