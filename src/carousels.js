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
    loop: false,
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
      },
      slideChangeTransitionEnd: function () {
        const circle1 = document.getElementById('circle-1');
        circle1.style.display = 'block';

        const circle2 = document.getElementById('circle-2');
        circle2.style.display = 'block';

        const circle3 = document.getElementById('circle-3');
        circle3.style.display = 'block';

        AOSwiper.init();
      },
    },
});