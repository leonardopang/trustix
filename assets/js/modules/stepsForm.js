'use strict';

export default function () {

  const steps = document.querySelectorAll('.step-container')
  if (steps[0]) {
    const containerStep = document.querySelector('.steps-itens')
    const containerButton = document.querySelector('.button-step-form')
    const btnsteps = document.querySelector('.button-form-steps')
    steps[0].classList.add('active')
    btnsteps.setAttribute('disabled', 'disabled')
    let countStep = 1;
    steps.forEach((item, index) => { //Bullet Numbers Steps

      let step = document.createElement('span')
      step.classList.add('step--item')
      if (item.classList.contains('active')) {
        step.classList.add('form-complete')
      }
      step.innerText = countStep++;
      containerStep.appendChild(step)

    })

    let stepsBtn = 0;

    setTimeout(() => {
      const bulletStep = document.querySelectorAll('.step--item')

      bulletStep.forEach((item, index) => {
        item.addEventListener('click', () => {
          if (item.classList.contains('form-complete') && index < stepsBtn) {
            stepsBtn = index
            steps.forEach(item => item.classList.remove('active'))

            for (let i = index; i < steps.length; i++) {
              bulletStep[i].classList.remove('form-complete')
              bulletStep[i].style.cursor = "auto"
            }

            if (index != 0) {
              for (let x = index - 1; x >= 0; x--) {
                bulletStep[x].style.cursor = "pointer"
              }
            }

            liberabtn = 0
            steps[index].classList.add('active')
            item.classList.add('form-complete')
            item.style.cursor = "auto"
            btnsteps.innerText = "Next"
            validacao = steps[stepsBtn].querySelectorAll('input')
            if (steps[stepsBtn].dataset.steps == steps.length) {
              btnsteps.removeAttribute('disabled')
            }
            validacaoInput(validacao)
          }
        })
      })

      btnsteps.addEventListener('click', (e) => {
        steps.forEach(item => item.classList.remove('active'))

        if (stepsBtn <= steps.length - 1) {
          e.preventDefault();

          for (let x = stepsBtn; x >= 0; x--) {
            bulletStep[x].style.cursor = "pointer"
          }

          stepsBtn++
          if (stepsBtn == steps.length - 1) {
            btnsteps.innerText = "Submit"
          }
        }

        liberabtn = 0
        steps[stepsBtn].classList.add('active')
        bulletStep[stepsBtn].classList.add('form-complete')
        btnsteps.setAttribute('disabled', 'disabled')
        validacao = steps[stepsBtn].querySelectorAll('input')
        if (steps[stepsBtn].dataset.steps == steps.length) {
          btnsteps.removeAttribute('disabled')
        }
        validacaoInput(validacao)
      })

    }, 2000)

    let validacao = steps[stepsBtn].querySelectorAll('input')
    let liberabtn = 0

    function validacaoInput(valida) {

      valida.forEach((input) => {
        input.addEventListener('change', () => {
          if (input.value.length > 0 && !input.classList.contains('wpcf7-not-valid')) {
            liberabtn++
            steps[stepsBtn].dataset.steps = liberabtn
          } else {
            if (liberabtn <= 0) {
              liberabtn = 0
            }
            liberabtn--
          }
          if (liberabtn >= valida.length) {
            btnsteps.removeAttribute('disabled')
          } else {
            btnsteps.setAttribute('disabled', 'disabled')
          }
        })
      })
    }

    validacaoInput(validacao)
  }

}
