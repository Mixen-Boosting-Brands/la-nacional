// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import AOSwiper from 'aos';

// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/pagination';

// init Swiper:
const swiperJumbotron = new Swiper('.swiper-jumbotron', {
    // configure Swiper to use modules
    modules: [Navigation, Pagination],

    // Optional parameters
    direction: 'horizontal',
    loop: true,
    mousewheel: true,

    // Autoplay
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },

    // Events
    on: {
      slideChangeTransitionStart: function () {
        console.log('swiper initialized');

        const circle1 = document.getElementById('circle-1');
        circle1.style.display = 'none';
        circle1.classList.remove("aos-init", "aos-animate", "data-aos-delay");

        const circle2 = document.getElementById('circle-2');
        circle2.style.display = 'none';
        circle2.classList.remove("aos-init", "aos-animate", "data-aos-delay");

        const circle3 = document.getElementById('circle-3');
        circle3.style.display = 'none';
        circle3.classList.remove("aos-init", "aos-animate", "data-aos-delay");

        const milk1 = document.getElementById('milk-1');
        milk1.style.display = 'none';
        milk1.classList.remove("aos-init", "aos-animate", "data-aos-delay");

        const milk2 = document.getElementById('milk-2');
        milk2.style.display = 'none';
        milk2.classList.remove("aos-init", "aos-animate", "data-aos-delay");

        const milk3 = document.getElementById('milk-3');
        milk3.style.display = 'none';
        milk3.classList.remove("aos-init", "aos-animate", "data-aos-delay");

        const milk4 = document.getElementById('milk-4');
        milk4.style.display = 'none';
        milk4.classList.remove("aos-init", "aos-animate", "data-aos-delay");

        const milk5 = document.getElementById('milk-5');
        milk5.style.display = 'none';
        milk5.classList.remove("aos-init", "aos-animate", "data-aos-delay");

        const milk6 = document.getElementById('milk-6');
        milk6.style.display = 'none';
        milk6.classList.remove("aos-init", "aos-animate", "data-aos-delay");
      },
      slideChangeTransitionEnd: function () {
        const circle1 = document.getElementById('circle-1');
        circle1.style.display = 'block';

        const circle2 = document.getElementById('circle-2');
        circle2.style.display = 'block';

        const circle3 = document.getElementById('circle-3');
        circle3.style.display = 'block';

        const milk1 = document.getElementById('milk-1');
        milk1.style.display = 'block';

        const milk2 = document.getElementById('milk-2');
        milk2.style.display = 'block';

        const milk3 = document.getElementById('milk-3');
        milk3.style.display = 'block';

        const milk4 = document.getElementById('milk-4');
        milk4.style.display = 'block';

        const milk5 = document.getElementById('milk-5');
        milk5.style.display = 'block';

        const milk6 = document.getElementById('milk-6');
        milk6.style.display = 'block';

        AOSwiper.init();
      },
    },
});