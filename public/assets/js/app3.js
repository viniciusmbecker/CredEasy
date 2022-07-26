import { valida } from './main.js'

const inputs = document.querySelectorAll('input#floatingInput.form-control.border-0')

inputs.forEach(input => {

    input.addEventListener('blur', (evento) => {
        valida(evento.target)
    })

    if(input.dataset.tipo === 'renda') {
        input.addEventListener('focus', () => {
        SimpleMaskMoney.setMask(input, {
            prefix: 'R$ ',
            fixed: true,
            fractionDigits: 2,
            decimalSeparator: ',',
            thousandsSeparator: '.',
            cursor: 'end'
        })})
    }
})