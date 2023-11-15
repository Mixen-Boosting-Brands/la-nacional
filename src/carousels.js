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
      init: function () {
        // Refresh AOS animations on all slides when Swiper initializes
        this.slides.forEach(function (slide) {
            var slideElements = slide.querySelectorAll('[data-aos]');
            slideElements.forEach(function (element) {
                AOS.init({
                    offset: 50, // set the offset as desired
                    duration: 1000, // set the duration as desired
                });
                AOS.refresh(element);
            });
        });
    },
    slideChange: function () {
        console.log('slideChange event triggered');
        console.log('Active slide index:', this.realIndex);
        // Check if the current active slide is the second slide
        if (this.realIndex === 1) {
            console.log('Refreshing AOS animations on active slide');
            // Target child elements of the active slide with the data-aos attribute
            var activeSlideElements = this.slides[this.realIndex].querySelectorAll('[data-aos]');
            // Loop through each child element and refresh animations
            console.log('Active slide elements:', activeSlideElements);
            activeSlideElements.forEach(function (element) {
                // console.log(element)
                AOS.init({
                    offset: 50, // set the offset as desired
                    duration: 1000, // set the duration as desired
                });
                AOS.refresh(element);

            });
        }
    }
    },
});