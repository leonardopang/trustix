'use strict';

export default function () {
  const wpcf7Elm = document.querySelectorAll('.wpcf7');

  wpcf7Elm.forEach((form) => {
    let placeForm = form.querySelectorAll('.form-template .placeholder')
    form.addEventListener('wpcf7mailsent', function (event) {
      placeForm.forEach((input) => input.classList.remove('focus'))
    }, false);
  })

  const placeholders = document.querySelectorAll('.form-template .placeholder')
  if (placeholders.length >= 1) {

    placeholders.forEach((text, index) => {
      const itens = text.querySelector('.wpcf7-form-control')

      itens.addEventListener('focus', () => {
        placeholders[index].classList.add('focus')
      })
      itens.addEventListener('focusout', () => {
        if (!itens.value) {
          placeholders[index].classList.remove('focus')
        }
      })
    })

  }
}