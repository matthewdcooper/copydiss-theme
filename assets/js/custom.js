"use strict";

window.addEventListener('DOMContentLoaded', function (e) {
  document.getElementById('btn-hamburger').classList.toggle('hidden');

  document.getElementById('btn-hamburger').onclick = function () {
    // toggle hamburger's appearance
    document.getElementById('btn-hamburger').classList.toggle('is-active');
    document.getElementById('hamburger-menu-overlay').classList.toggle('hamburger-overlay-visible'); // toggle hamburger menu

    document.getElementById('hamburger-toggle').click(); // prevent scrolling of body

    document.body.classList.toggle('prevent-scroll');
  };

  document.getElementById('hamburger-menu-overlay').onclick = function () {
    if (document.getElementById('hamburger-menu-overlay').classList.contains('hamburger-overlay-visible')) {
      document.getElementById('btn-hamburger').click();
    }
  };
});