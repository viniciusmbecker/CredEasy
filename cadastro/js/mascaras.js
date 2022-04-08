
// Máscara para o CPF
const inputCPF = document.querySelector('input#cpf')

inputCPF.addEventListener('keypress', () => {
    
    // comprimento = 14 dígitos
    let inputLength = inputCPF.value.length

    // três dígitos . três digitos . três dígitos - dois dígitos
    if (inputLength == 3 || inputLength == 7) {
        inputCPF.value += '.'
    }else if (inputLength == 11) {
        inputCPF.value += '-'
    }

})

// Máscara para o Telefone
const inputTelefone = document.querySelector('input#phone')

inputTelefone.addEventListener('keypress', () => {
    
    // comprimento = 13 dígitos
    let inputLength = inputTelefone.value.length

    if(inputLength == 0) {
        inputTelefone.value += '('
    } else if(inputLength == 3) {
        inputTelefone.value += ')'
    } else if(inputLength == 9) {
        inputTelefone.value += '-'
    }

 })
