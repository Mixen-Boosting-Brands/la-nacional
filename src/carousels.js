// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

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
        circle1.style.display = 'block';
        circle1.classList.add("aos-animate");
        circle1.setAttribute('data-aos','fade-left');
        circle1.setAttribute('data-aos-delay','250');

        const circle2 = document.getElementById('circle-2');
        circle2.style.display = 'block';
        circle2.classList.add("aos-animate");
        circle2.setAttribute('data-aos','fade-left');
        circle2.setAttribute('data-aos-delay','500');

        const circle3 = document.getElementById('circle-3');
        circle3.style.display = 'block';
        circle3.classList.add("aos-animate");
        circle3.setAttribute('data-aos','fade-left');
        circle3.setAttribute('data-aos-delay','750');
      },
    },
});