<html>
  <head>
    <title>3D Carousel</title>
    <link
      rel="stylesheet"
      href="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/css/3d-rotational-carousel-images.php.css"
    />
  </head>

  <body>
    <div class="banner">
      <div class="slider" style="--quantity: 10">
        <div class="item" style="--position: 1">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
        <div class="item" style="--position: 2">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
        <div class="item" style="--position: 3">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
        <div class="item" style="--position: 4">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
        <div class="item" style="--position: 5">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
        <div class="item" style="--position: 6">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
        <div class="item" style="--position: 7">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
        <div class="item" style="--position: 8">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
        <div class="item" style="--position: 9">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
        <div class="item" style="--position: 10">
          <img
            src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg"
            alt=""
          />
        </div>
      </div>
    </div>

    <script>
      const slider = document.querySelector('.slider');
      let isDragging = false;
      let startX = 0;
      let currentRotation = 0;
      let lastRotation = 0;

      // --- Mouse events ---
      slider.addEventListener('mousedown', (e) => {
        isDragging = true;
        startX = e.clientX;
        slider.style.transition = 'none';
      });

      window.addEventListener('mouseup', () => {
        isDragging = false;
        lastRotation = currentRotation;
        slider.style.transition = 'transform 0.5s ease-out';
      });

      window.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const deltaX = e.clientX - startX;
        currentRotation = lastRotation + deltaX * 0.4;
        slider.style.transform = `perspective(1000px) rotateX(-10deg) rotateY(${currentRotation}deg)`;
      });

      // --- Touch events for mobile ---
      slider.addEventListener('touchstart', (e) => {
        isDragging = true;
        startX = e.touches[0].clientX;
        slider.style.transition = 'none';
      });

      window.addEventListener('touchend', () => {
        isDragging = false;
        lastRotation = currentRotation;
        slider.style.transition = 'transform 0.5s ease-out';
      });

      window.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        const deltaX = e.touches[0].clientX - startX;
        currentRotation = lastRotation + deltaX * 0.4;
        slider.style.transform = `perspective(1000px) rotateX(-10deg) rotateY(${currentRotation}deg)`;
      });

      // --- Optional: auto-rotate when not dragging ---
      let autoRotate = true;
      setInterval(() => {
        if (!isDragging && autoRotate) {
          currentRotation += 0.3; // adjust speed
          lastRotation = currentRotation;
          slider.style.transform = `perspective(1000px) rotateX(-10deg) rotateY(${currentRotation}deg)`;
        }
      }, 30);
    </script>
  </body>
</html>
