// Initialise the carousel
jQuery(document).ready(function ($) {
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: false,
        autoplay: false,
        // animateOut: 'slideLeft',
        // animateIn: 'slideRight',
    });
});

// Control carousel with arrow images
$('.js-carousel-previous').click(function () {
    $('.owl-carousel').trigger('prev.owl.carousel');
});
$('.js-carousel-next').click(function () {
    $('.owl-carousel').trigger('next.owl.carousel');
});
