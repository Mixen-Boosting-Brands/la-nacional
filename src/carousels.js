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
    }
});