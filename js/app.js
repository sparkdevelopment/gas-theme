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
  function getCookie(name) {
    const value = "; " + document.cookie;
    const parts = value.split("; " + name + "=");
    if (parts.length === 2) {
      return parts.pop().split(";").shift();
    }
  }
  document.getElementById("accept-btn").addEventListener("click", function() {
    document.cookie = "cookie_bar_shown=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
    document.getElementById("cookie-bar").classList.remove("show");
  });
  if (getCookie("cookie_bar_shown")) {
    document.getElementById("cookie-bar").style.display = "none";
  } else {
    setTimeout(function() {
      document.getElementById("cookie-bar").classList.add("show");
    }, 1e3);
  }
})();
