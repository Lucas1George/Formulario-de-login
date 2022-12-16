const form = document.querySelector('#login');

function handleKeyUp (event) {
const target = event.target;
if(!target.checkValidity()) {
  target.classList.add('invalido');
  target.nextElementSibling.innerText = target.validationMessage;
}
}
form.addEventListener('keyup', handleKeyUp);
