'use strict';

export default function () {

  const steps = document.querySelectorAll('.step-container ')
  const containerStep = document.querySelector('.steps-itens')
  const containerButton = document.querySelector('.button-step-form')
  steps[0].classList.add('active')
  let countStep = 1;
  steps.forEach((item, index) => {
    let step = document.createElement('span')
    step.classList.add('step--item')
    if (countStep == 1) {
      step.classList.add('form-complete')
    }
    step.innerText = countStep++;
    containerStep.appendChild(step)
  })

}