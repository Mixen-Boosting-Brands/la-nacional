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
        console.log('swiper initialized');

        const elements = [
          'circle-1', 'circle-2', 'circle-3',
          'square-1', 'square-2', 'square-3', 'square-4', 'square-5',
          'milk-1', 'milk-2', 'milk-3', 'milk-4', 'milk-5', 'milk-6'
        ];
    
        elements.forEach(elementId => {
            const element = document.getElementById(elementId);
            element.style.display = 'none';
            element.classList.remove("aos-init", "aos-animate", "data-aos-delay");
        });
      },
      slideChangeTransitionEnd: function () {
        const elements = [
          'circle-1', 'circle-2', 'circle-3',
          'square-1', 'square-2', 'square-3', 'square-4', 'square-5',
          'milk-1', 'milk-2', 'milk-3', 'milk-4', 'milk-5', 'milk-6'
        ];
    
        elements.forEach(elementId => {
            const element = document.getElementById(elementId);
            element.style.display = 'block';
        });

        AOSwiper.init();
      },
    },
});

const swiperEncuentranos = new Swiper('.swiper-encuentranos-top', {
  // configure Swiper to use modules
  modules: [Autoplay],

  // Optional parameters
  spaceBetween: 30,
  slidesPerView: 3,
  autoplay: {
      delay: 2500,
      disableOnInteraction: false,
  },
});