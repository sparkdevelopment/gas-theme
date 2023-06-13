(() => {
  // resources/js/homepage.js
  var fade_in_elements = document.querySelectorAll(".fade-in");
  var window_height = window.innerHeight;
  var nav_hamburger = document.querySelector(".nav-hamburger");
  var nav_tel = document.querySelector(".nav-tel");
  var search_toggle = document.querySelector("#search-toggle");
  window.lethargy = new Lethargy();
  function isElementVisible(element) {
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    return rect.top >= 0 && rect.bottom <= windowHeight;
  }
  var docSliderContainer = document.querySelector(".docSlider");
  if (docSliderContainer) {
    docSlider.init({
      pager: false,
      afterChange: function(index) {
        fade_in_elements.forEach(function(element) {
          if (isElementVisible(element)) {
            element.classList.add("fade-in--visible");
          } else {
            element.classList.remove("fade-in--visible");
          }
        });
        if (index == 6) {
          document.querySelector("header").classList.add("header--scrolled");
        } else {
          document.querySelector("header").classList.remove("header--scrolled");
        }
        const backgroundColor = getComputedStyle(document.querySelector(".docSlider-current")).backgroundColor;
        if (backgroundColor === "rgb(255, 255, 255)") {
          nav_hamburger.classList.add("dark");
          nav_tel.classList.add("dark");
          search_toggle.classList.add("dark");
        } else {
          nav_hamburger.classList.remove("dark");
          nav_tel.classList.remove("dark");
          search_toggle.classList.remove("dark");
        }
      }
    });
  }
  var owl = document.querySelector(".owl-carousel");
  $(owl).owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5e3,
    autoplaySpeed: 5e3,
    autoplayHoverPause: true,
    autoHeight: true,
    items: 4,
    stageClass: "flex items-center",
    slideTransition: "linear",
    stagePadding: 150,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        stagePadding: 100
      },
      640: {
        items: 2,
        stagePadding: 50
      },
      768: {
        items: 2,
        stagePadding: 75
      },
      1024: {
        items: 3,
        stagePadding: 100
      }
    }
  });
})();
