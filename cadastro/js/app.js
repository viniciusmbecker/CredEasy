import { valida } from './main.js'

const inputs = document.querySelectorAll('.container-input input')

inputs.forEach(input => {
    input.addEventListener('blur', (evento) => {
        valida(evento.target)
    })
})
