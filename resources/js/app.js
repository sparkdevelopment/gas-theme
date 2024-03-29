// If the footer logo comes into view, fade out the header logo
// If the footer logo leaves the view, fade in the header logo
var footerLogo = document.querySelector('.js-footer-logo');
var header = document.querySelector('header');
var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
};

if (header) {
    // Set up Intersection Observer
    var observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting && entry.intersectionRatio < 1) {
                // header.classList.add('header--scrolled');
            } else {
                // header.classList.remove('header--scrolled');
            }
        });
    }, options);

    // Observe footerLogo
    observer.observe(footerLogo);

    // Set up scroll event listener
    var productDetails = document.querySelector('.js-product-details');
    if (productDetails) {
        window.addEventListener("scroll", function () {
            var productDetailsTop = productDetails ? productDetails.getBoundingClientRect().top : Number.MAX_VALUE;
            if (productDetailsTop <= header.offsetHeight) {
                header.classList.add('header--scrolled');
            } else {
                header.classList.remove('header--scrolled');
            }
        });
    }

    // Show the header initially
    header.classList.remove('header--scrolled');
}

// Handle hamburger menu click
const main_navigation = document.querySelector('#primary-menu');
const nav_cross = document.querySelector('.nav-cross');
const nav_hamburger = document.querySelector('.nav-hamburger');
const menu_toggle = document.querySelector('#primary-menu-toggle');
if (menu_toggle) {
    menu_toggle.addEventListener('click', function (e) {
        e.preventDefault();
        main_navigation.classList.toggle('visible');
        nav_cross.classList.toggle('hidden');
        nav_hamburger.classList.toggle('hidden');
    });
}

// Handle search toggle click
const search_form = document.querySelector('#search-form');
const search_toggle = document.querySelector('#search-toggle');
if (search_toggle) {
    // If click or '/' key is pressed, toggle the search form
    document.addEventListener('keydown', function (e) {
        // Do not close the form if / is pressed
        if (e.key === '/' && document.querySelector('#search-form').classList.contains('opacity-0')) {
            openSearch(e);
        }
    });
    search_toggle.addEventListener('click', function (e) {
        openSearch(e);
    });
}

openSearch = function (e) {
    e.preventDefault();
    search_form.classList.toggle('opacity-0');
    search_form.classList.toggle('pointer-events-none');
    // Focus search field
    if (search_form.classList.contains('opacity-0')) {
        document.querySelector('#search-input').blur();
    } else {
        document.querySelector('#search-input').focus();
    }
}

// Handle search close click
const search_close = document.querySelector('#search-results-close');
if (search_close) {
    // If click or Escape key is pressed, toggle the search form
    search_close.addEventListener('click', function (e) {
        closeSearch(e);
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && ! document.querySelector('#search-form').classList.contains('opacity-0')) {
            closeSearch(e);
        }
    });
}

closeSearch = function (e) {
    e.preventDefault();
    search_form.classList.toggle('opacity-0');
    search_form.classList.toggle('pointer-events-none');
    // Reset search form and results
    document.querySelector('#search-input').value = '';
    document.querySelector('#search-results-list').innerHTML = '';
}


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
