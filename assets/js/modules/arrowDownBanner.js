'use strict'

export default function () {
  const banner = document.querySelector('.hero-banner')
  if (banner) {
    let heightBanner = banner.clientHeight + 92
    const arrowDown = banner.querySelector('.arrow-down-container a')
    arrowDown.addEventListener('click', (e) => {
      e.preventDefault();
      let heightBanner = banner.clientHeight + 92
      window.scrollTo({
        top: heightBanner,
        behavior: 'smooth'
      })
    })
  }
}