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