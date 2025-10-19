<!-- ============================
     ABOUT US SECTION v1.8
     Author: Shayne Rothwell
     Using Bootstrap Icons + Scroll Motion
============================== -->

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/variables.css">
<link rel="stylesheet" href="Templates/Sections/AboutUs/assets/css/aboutus-section.css">
<!-- ============================
     ABOUT US SECTION v1.8
     Author: Shayne Rothwell
     Smooth scroll animations + parallax
============================= -->

<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/variables.css">
<link rel="stylesheet" href="Templates/Sections/AboutUs/assets/css/aboutus-section.css">

<section id="about" class="about-section">
  <div class="about-container">

    <!-- HEADER -->
    <div class="aboutus-header">
      <div>About Our Company</div>
    </div>

    <!-- BODY -->
    <div class="aboutus-body">
      <div class="aboutus-body-header">
        <h3>Who We Are</h3>
      </div>
      <div class="aboutus-body-text">
        <p>We are a team of passionate professionals committed to delivering innovative solutions that empower businesses and enhance digital experiences.</p>
      </div>
      <div class="aboutus-body-text">
        <p>Our goal is to help clients achieve success through smart strategies, cutting-edge technology, and creative design. Your vision drives our mission.</p>
      </div>
    </div>

    <!-- INFO CARDS -->
    <div class="aboutus-content">
      <div class="aboutus-content-info">
        <div class="aboutus-content-icon-container">
          <i class="bi bi-lightbulb"></i>
        </div>
        <div class="aboutus-content-header">Our Strategy</div>
        <div class="aboutus-content-text">We craft tailored strategies to grow your business and reach the right audience with precision.</div>
      </div>

      <div class="aboutus-content-info">
        <div class="aboutus-content-icon-container">
          <i class="bi bi-brush"></i>
        </div>
        <div class="aboutus-content-header">Creative Design</div>
        <div class="aboutus-content-text">We focus on innovative, modern designs that captivate users and enhance engagement.</div>
      </div>

      <div class="aboutus-content-info">
        <div class="aboutus-content-icon-container">
          <i class="bi bi-cpu"></i>
        </div>
        <div class="aboutus-content-header">Technology</div>
        <div class="aboutus-content-text">We leverage the latest technology to build solutions that are efficient, scalable, and future-ready.</div>
      </div>
    </div>

    <!-- IMAGE SECTION -->
    <div class="aboutus-image-content">
      <div class="aboutus-image-content-mainimage"></div>
      <div class="aboutus-image-content-subimage"></div>
    </div>

  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".aboutus-header div");
  const bodyHeaders = document.querySelectorAll(".aboutus-body-header");
  const bodyTexts = document.querySelectorAll(".aboutus-body-text");
  const cards = document.querySelectorAll(".aboutus-content-info");
  const mainImage = document.querySelector(".aboutus-image-content-mainimage");
  const subImage = document.querySelector(".aboutus-image-content-subimage");

  // Helper: check if element is in viewport
  function isInViewport(el, offset = 0) {
    const rect = el.getBoundingClientRect();
    return rect.top <= (window.innerHeight || document.documentElement.clientHeight) - offset &&
           rect.bottom >= 0 + offset;
  }

  function animateElements() {
    // Header
    if (isInViewport(header, 100)) header.classList.add("visible");
    else header.classList.remove("visible");

    // Body headers
    bodyHeaders.forEach(h => {
      if (isInViewport(h, 100)) h.classList.add("visible");
      else h.classList.remove("visible");
    });

    // Body texts
    bodyTexts.forEach(t => {
      if (isInViewport(t, 100)) t.classList.add("visible");
      else t.classList.remove("visible");
    });

    // Cards with stagger
    cards.forEach((card, i) => {
      if (isInViewport(card, 100)) {
        setTimeout(() => card.classList.add("visible"), i * 150);
      } else {
        card.classList.remove("visible");
      }
    });

    // Images
    if (isInViewport(mainImage, 150)) mainImage.classList.add("visible");
    else mainImage.classList.remove("visible");

    if (isInViewport(subImage, 150)) subImage.classList.add("visible");
    else subImage.classList.remove("visible");
  }

  window.addEventListener("scroll", animateElements);
  animateElements(); // initial check
});

</script>

