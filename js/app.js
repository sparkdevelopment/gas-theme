(() => {
  // resources/js/app.js
  var footerLogo = document.querySelector(".js-footer-logo");
  var header = document.querySelector("header");
  var options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5
  };
  var observer = new IntersectionObserver(function(entries, observer2) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        header.classList.add("header--scrolled");
      } else {
        header.classList.remove("header--scrolled");
      }
    });
  }, options);
  observer.observe(footerLogo);
  var productDetails = document.querySelector(".js-product-details");
  if (productDetails) {
    productDetailsObserver = new IntersectionObserver(function(entries, observer2) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          header.classList.add("header--scrolled");
        } else {
          header.classList.remove("header--scrolled");
        }
      });
    }, options);
    productDetailsObserver.observe(productDetails);
  }
  var productDetailsObserver;
  var main_navigation = document.querySelector("#primary-menu");
  var nav_cross = document.querySelector(".nav-cross");
  var nav_hamburger = document.querySelector(".nav-hamburger");
  document.querySelector("#primary-menu-toggle").addEventListener("click", function(e) {
    e.preventDefault();
    main_navigation.classList.toggle("visible");
    nav_cross.classList.toggle("hidden");
    nav_hamburger.classList.toggle("hidden");
  });
})();
