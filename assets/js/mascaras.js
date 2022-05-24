
// Máscara para o CPF
const inputCPF = document.querySelector('input#floatingInputCPF');

inputCPF.addEventListener('keypress', (evento) => {
    
    // verificando se o valor digitado pelo usuário é uma letra
    let valorDigitado = evento.key;

    if (isNaN(valorDigitado)) {

        evento.preventDefault()

    }

    // comprimento = 14 dígitos
    let inputLength = inputCPF.value.length;

    // três dígitos . três digitos . três dígitos - dois dígitos
    if (inputLength === 3 || inputLength === 7) {

        inputCPF.value += '.'

    }else if (inputLength === 11) {

        inputCPF.value += '-'

    }

});

// Máscara para o Telefone
const inputTelefone = document.querySelector('input#floatingInputPhone');

inputTelefone.addEventListener('keypress', (evento) => {
    
    // verificando se o valor digitado pelo usuário é uma letra
    let valorDigitado = evento.key;

    if (isNaN(valorDigitado)) {

        evento.preventDefault();

    }
    
    // comprimento = 14 dígitos
    let inputLength = inputTelefone.value.length

    // ( dois dígitos ) cinco dígitos - quatro dígitos
    if(inputLength == 0) {

        inputTelefone.value += '('

    } else if(inputLength == 3) {

        inputTelefone.value += ')'

    } else if(inputLength == 9) {
        
        inputTelefone.value += '-'

    }

 });
