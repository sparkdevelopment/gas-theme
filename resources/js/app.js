// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      let nav_cross = document.querySelector('.nav-cross');
      let nav_hamburger = document.querySelector('.nav-hamburger');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
            nav_cross.classList.toggle('hidden');
            nav_hamburger.classList.toggle('hidden');
      });
});