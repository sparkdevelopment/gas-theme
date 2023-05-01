// If the footer logo comes into view, fade out the header logo
// If the footer logo leaves the view, fade in the header logo
var footerLogo = document.querySelector('.js-footer-logo');
var header = document.querySelector('header');
var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
};
var observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });
}
, options);
observer.observe(footerLogo);
// if js-product-details exists, set up observer
var productDetails = document.querySelector('.js-product-details');
if (productDetails) {
    var productDetailsObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                header.classList.add('header--scrolled');
            } else {
                header.classList.remove('header--scrolled');
            }
        });
    }
    , options);
    productDetailsObserver.observe(productDetails);
}

// Handle hamburger menu click
const main_navigation = document.querySelector('#primary-menu');
const nav_cross = document.querySelector('.nav-cross');
const nav_hamburger = document.querySelector('.nav-hamburger');
document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
    e.preventDefault();
    main_navigation.classList.toggle('visible');
    nav_cross.classList.toggle('hidden');
    nav_hamburger.classList.toggle('hidden');
});

// Cookie bar
// Check if the cookie has been set
function getCookie(name) {
    const value = "; " + document.cookie;
    const parts = value.split("; " + name + "=");
    if (parts.length === 2) {
        return parts.pop().split(";").shift();
    }
}

// Set cookie when the Accept button is clicked
document.getElementById("accept-btn").addEventListener("click", function () {
    document.cookie = "cookie_bar_shown=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
    document.getElementById("cookie-bar").classList.remove("show");
});

// Hide cookie bar if cookie has already been set
if (getCookie("cookie_bar_shown")) {
    document.getElementById("cookie-bar").style.display = "none";
} else {
    setTimeout(function () {
        document.getElementById("cookie-bar").classList.add("show");
    }, 1000);
}
  