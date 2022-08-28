'use strict';

export default function () {
  const placeholders = document.querySelectorAll('.form-template .placeholder')
  if (placeholders.length >= 1) {
    const inputs = document.querySelectorAll('.form-template .placeholder input')
    placeholders.forEach((text, index) => {
      text.addEventListener('click', () => {
        inputs[index].focus()
      })
    })

    inputs.forEach((input, index) => {
      input.addEventListener('focus', () => {
        placeholders[index].classList.add('focus')
      })
      input.addEventListener('focusout', () => {
        if (!input.value) {
          placeholders[index].classList.remove('focus')
        }
      })
    })
  }
}