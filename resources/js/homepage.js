// Import Lethargy
// import * as Lethargy from './lethargy.min.js';

// Get elements and variables
const fade_in_elements = document.querySelectorAll('.fade-in');
const window_height = window.innerHeight;
const nav_hamburger = document.querySelector('.nav-hamburger');
const nav_tel = document.querySelector('.nav-tel');
const search_toggle = document.querySelector('#search-toggle');
window.lethargy = new Lethargy();

// Check if element is visible
function isElementVisible(element) {
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    return rect.top >= 0 && rect.bottom <= windowHeight;
}

// Initialize DocSlider
var docSliderContainer = document.querySelector(".docSlider");
if (docSliderContainer) {
    docSlider.init({
        pager: false,
        afterChange: function (index) {
            fade_in_elements.forEach(function (element) {
                if (isElementVisible(element)) {
                    element.classList.add('fade-in--visible');
                } else {
                    element.classList.remove('fade-in--visible');
                }
            });
            if (index == 4) {
                // document.querySelector('header').classList.add('header--scrolled');
            } else {
                // document.querySelector('header').classList.remove('header--scrolled');
            }

            // Change header elements color
            const backgroundColor = getComputedStyle(document.querySelector('.docSlider-current')).backgroundColor;
            if (backgroundColor === 'rgb(255, 255, 255)') {
                nav_hamburger.classList.add('dark');
                nav_tel.classList.add('dark');
                search_toggle.classList.add('dark');
            } else {
                nav_hamburger.classList.remove('dark');
                nav_tel.classList.remove('dark');
                search_toggle.classList.remove('dark');
            }

            // Change header background
            if (index == 3) {
                document.querySelector('header').classList.add('bg-[rgba(0.5,0.5,0.5,0.5)]');
                document.querySelector('header').classList.remove('bg-[rgba(0.5,0.5,0.5,0.0)]');
            } else {
                document.querySelector('header').classList.add('bg-[rgba(0.5,0.5,0.5,0.0)]');
                document.querySelector('header').classList.remove('bg-[rgba(0.5,0.5,0.5,0.5)]');
            }
        }
    });
}

// Initialize OwlCarousel
// import owlCarousel from 'owl.carousel';
const owl = document.querySelector('.owl-carousel');
$(owl).owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplaySpeed: 5000,
    autoplayHoverPause: true,
    autoHeight: true,
    dots: false,
    items: 4,
    stageClass: "flex items-center",
    slideTransition: 'linear',
    stagePadding: 150,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            stagePadding: 100,
        },
        640: {
            items: 2,
            stagePadding: 50,
        },
        768: {
            items: 2,
            stagePadding: 75,
        },
        1024: {
            items: 3,
            stagePadding: 100,
        }
    }
});