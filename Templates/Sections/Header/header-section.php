<!-- ============================
     HEADER SECTION (Reusable Component)
     File: headersection.php
     Author: Shayne Rothwell
     Description:
     - Responsive hero section with ball-shaped bottom curve
     - Desktop, tablet, and mobile layouts
============================= -->

<link rel="stylesheet" href="assets/css/variables.css">
<link rel="stylesheet" href="Templates/Sections/Header/assets/css/header-section.css">
<section id="hero-header" class="header-container dark-theme">
  <div class="header-content">

    <!-- TEXT BLOCK -->
    <div class="text-block">
      <h3>Design. Develop. Deliver.</h3>
      <h1>Building Digital Experiences That Inspire</h1>
      <p>We craft professional websites tailored to your brand — from stunning visuals to seamless user experience and powerful performance.</p>
      <a href="#contact" class="btn-primary">Get Started</a>
    </div>

    <!-- IMAGE BLOCK -->
    <div class="image-block-header">
      <img src="./assets/images/august-1-world-wide-web-day (1).webp" alt="Web design illustration">
    </div>

  </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".header-content > *, .image-block-header");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add("visible");
      } else {
        entry.target.classList.remove("visible"); // Animate out when scrolling out
      }
    });
  }, { threshold: 0.2 });

  elements.forEach(el => observer.observe(el));

  // Parallax effect for image
  const image = document.querySelector(".image-block-header img");
  window.addEventListener("scroll", () => {
    const rect = image.getBoundingClientRect();
    const offset = window.scrollY - image.offsetTop + window.innerHeight/2;
    image.style.transform = `translateY(${offset * 0.05}px)`; // subtle parallax
  });
});
</script>