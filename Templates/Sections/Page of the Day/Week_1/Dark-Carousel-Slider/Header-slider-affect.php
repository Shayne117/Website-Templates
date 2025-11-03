<html>
    <head>
   <link rel="stylesheet" href="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/css/Header-slider-affect.css">
        <title>Header Slider affect</title>
    </head>
    <body>
        <header>
            <nav>
                <a href=""> Home</a>
                <a href=""> Contacts</a>
                <a href=""> Info</a>
            </nav>
        </header>
            <div class="carousel">
                <div class="list">
                    <div class="item">
                        <img src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg" alt="">
                        <div class="content">
                            <div class="auther">LUNDEV</div>
                            <div class="title">Design Slider</div>
                            <div class="topic">Animal</div>
                            <div class="des">lorem ipsum dolor sit amet, consecctorusdfas awdfasdf asdfsdf </div>
                            <div class="buttons">
                                <button>See More</button>
                                <button>Subscribe</button>
                            </div>
                        </div>                     
                    </div>  
                     <div class="item">
                        <img src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty3.jpg" alt="">
                        <div class="content">
                            <div class="auther">LUNDEV</div>
                            <div class="title">Design Slider</div>
                            <div class="topic">Animal</div>
                            <div class="des">lorem ipsum dolor sit amet, consecctorusdfas awdfasdf asdfsdf </div>
                            <div class="buttons">
                                <button>See More</button>
                                <button>Subscribe</button>
                            </div>
                        </div>                     
                    </div>        
                </div>            
                <div class="thumbnail">
                    <div class="item">
                        <img src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty.jpg" alt="">
                        <div class="content">
                            <div class="title">Name Slider</div>
                            <div class="des">Description</div>
                        </div>
                    </div>   
                     <div class="item">
                        <img src="Templates/Sections/Page of the Day/Week_1/Dark-Carousel-Slider/assets/images/loyalty3.jpg" alt="">
                        <div class="content">
                            <div class="title">Name Slider</div>
                            <div class="des">Description</div>
                        </div>
                    </div>              
                </div>  
                 <div class="arrows">
                    <button id="prev"><</button>
                    <button id="next">></button>
                </div>
                <div class="time"></div>      
            </div>
<script>
  const nextDom = document.getElementById('next');
  const prevDom = document.getElementById('prev');
  const carouselDom = document.querySelector('.carousel');
  const listItemDom = document.querySelector('.carousel .list');
  const thumbnailDom = document.querySelector('.carousel .thumbnail');

  const timeRunning = 3000;  // animation lock time
  const autoDelay = 7000;    // time between slides
  let isAnimating = false;   // prevent spam clicks

  nextDom.onclick = () => showSlider('next', true);
  prevDom.onclick = () => showSlider('prev', true);

  // 🔁 Auto run every few seconds
  let autoRun = setInterval(() => {
    showSlider('next', false);
  }, autoDelay);

  function showSlider(type, manualTrigger) {
    if (isAnimating) return; // prevent double triggers during transitions
    isAnimating = true;

    const itemSlider = document.querySelectorAll('.carousel .list .item');
    const itemThumbnail = document.querySelectorAll('.carousel .thumbnail .item');

    if (type === 'next') {
      listItemDom.appendChild(itemSlider[0]);
      thumbnailDom.appendChild(itemThumbnail[0]);
      carouselDom.classList.add('next');
    } else {
      const last = itemSlider.length - 1;
      listItemDom.prepend(itemSlider[last]);
      thumbnailDom.prepend(itemThumbnail[last]);
      carouselDom.classList.add('prev');
    }

    // 🔁 Reset classes after animation finishes
    setTimeout(() => {
      carouselDom.classList.remove('next');
      carouselDom.classList.remove('prev');
      isAnimating = false;
    }, timeRunning);

    // 🔄 Restart auto-run if user clicked manually
    if (manualTrigger) {
      clearInterval(autoRun);
      autoRun = setInterval(() => {
        showSlider('next', false);
      }, autoDelay);
    }

    // ✅ retrigger text animation for new first slide
    carouselDom.classList.remove('reveal');
    void carouselDom.offsetWidth; // force reflow
    carouselDom.classList.add('reveal');
  }

  // ✅ Initial reveal on load
  window.addEventListener('load', () => {
    void carouselDom.offsetWidth;
    carouselDom.classList.add('reveal');
  });
</script>

    </body>
</html>