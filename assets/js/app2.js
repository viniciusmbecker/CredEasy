import { valida } from './main.js'

const inputs = document.querySelectorAll('.col-md-5.mb-3.form-floating input')

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
