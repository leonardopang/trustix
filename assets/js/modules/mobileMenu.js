'use strict';

export default function () {
  const hamburguer = document.querySelector('.hamburguer-menu')
  const mobileMenu = document.querySelector('.menu-mobile')
  hamburguer.addEventListener('click', () => {
    mobileMenu.classList.toggle('active')
  })
}