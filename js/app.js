(() => {
  // resources/js/app.js
  var footerLogo = document.querySelector(".js-footer-logo");
  var header = document.querySelector("header");
  var options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5
  };
  if (header) {
    observer = new IntersectionObserver(function(entries, observer2) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting && entry.intersectionRatio < 1) {
        } else {
        }
      });
    }, options);
    observer.observe(footerLogo);
    productDetails = document.querySelector(".js-product-details");
    if (productDetails) {
      window.addEventListener("scroll", function() {
        var productDetailsTop = productDetails ? productDetails.getBoundingClientRect().top : Number.MAX_VALUE;
        if (productDetailsTop <= header.offsetHeight) {
          header.classList.add("header--scrolled");
        } else {
          header.classList.remove("header--scrolled");
        }
      });
    }
    header.classList.remove("header--scrolled");
  }
  var observer;
  var productDetails;
  var main_navigation = document.querySelector("#primary-menu");
  var nav_cross = document.querySelector(".nav-cross");
  var nav_hamburger = document.querySelector(".nav-hamburger");
  var menu_toggle = document.querySelector("#primary-menu-toggle");
  if (menu_toggle) {
    menu_toggle.addEventListener("click", function(e) {
      e.preventDefault();
      main_navigation.classList.toggle("visible");
      nav_cross.classList.toggle("hidden");
      nav_hamburger.classList.toggle("hidden");
    });
  }
  var search_form = document.querySelector("#search-form");
  var search_toggle = document.querySelector("#search-toggle");
  if (search_toggle) {
    document.addEventListener("keydown", function(e) {
      if (e.key === "/" && document.querySelector("#search-form").classList.contains("opacity-0")) {
        openSearch(e);
      }
    });
    search_toggle.addEventListener("click", function(e) {
      openSearch(e);
    });
  }
  openSearch = function(e) {
    e.preventDefault();
    search_form.classList.toggle("opacity-0");
    search_form.classList.toggle("pointer-events-none");
    if (search_form.classList.contains("opacity-0")) {
      document.querySelector("#search-input").blur();
    } else {
      document.querySelector("#search-input").focus();
    }
  };
  var search_close = document.querySelector("#search-results-close");
  if (search_close) {
    search_close.addEventListener("click", function(e) {
      closeSearch(e);
    });
    document.addEventListener("keydown", function(e) {
      if (e.key === "Escape" && !document.querySelector("#search-form").classList.contains("opacity-0")) {
        closeSearch(e);
      }
    });
  }
  closeSearch = function(e) {
    e.preventDefault();
    search_form.classList.toggle("opacity-0");
    search_form.classList.toggle("pointer-events-none");
    document.querySelector("#search-input").value = "";
    document.querySelector("#search-results-list").innerHTML = "";
  };
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
