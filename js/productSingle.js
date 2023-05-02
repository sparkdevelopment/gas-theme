(() => {
  // resources/js/productSingle.js
  jQuery(document).ready(function($2) {
    $2(".owl-carousel").owlCarousel({
      items: 1,
      loop: true,
      nav: false,
      dots: false,
      autoplay: false
    });
  });
  $(".js-carousel-previous").click(function() {
    $(".owl-carousel").trigger("prev.owl.carousel");
  });
  $(".js-carousel-next").click(function() {
    $(".owl-carousel").trigger("next.owl.carousel");
  });
})();
