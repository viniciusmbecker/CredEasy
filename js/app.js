import { valida } from './main.js'

const inputs = document.querySelectorAll('.container-input input')

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
