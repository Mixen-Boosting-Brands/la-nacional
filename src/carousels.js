// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
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
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },

    // Events
    on: {
      slideChangeTransitionStart: function () {
        const videoLeches = document.getElementById('video-leches');
        videoLeches.setAttribute("autoplay");
      },
      slideChangeTransitionEnd: function () {
        
      },
    },
});

const swiperEncuentranosTop = new Swiper('.swiper-encuentranos-top', {
  // configure Swiper to use modules
  modules: [Autoplay],

  // Optional parameters
  spaceBetween: 30,
  slidesPerView: 3,
  loop: true,
  autoplay: {
      delay: 2500,
      disableOnInteraction: false,
  },
});

const swiperEncuentranosBottom = new Swiper('.swiper-encuentranos-bottom', {
  // configure Swiper to use modules
  modules: [Autoplay],

  // Optional parameters
  spaceBetween: 30,
  slidesPerView: 3,
  loop: true,
  autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      reverseDirection: true,
  },
});