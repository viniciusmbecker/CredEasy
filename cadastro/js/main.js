export function valida(input) {
    // para acessar o data attribute de um input, precisamos do dataset
    const tipoDeInput = input.dataset.tipo

    // if(validadores[tipoDeInput]) {
    //     validadores[tipoDeInput](input)
    // }

    if(input.validity.valid) {
        input.parentElement.classList.remove('input-container--invalido')
        input.parentElement.querySelector('.input-mensagem-erro').innerHTML = ''
    } else {
        input.parentElement.classList.add('input-container--invalido')
        input.parentElement.querySelector('.input-mensagem-erro').innerHTML = mostraMensagemDeErro(tipoDeInput, input)
    }
}

// const tiposDeErro = [
//     'valueMissing',
//     'typeMismatch',
//     'patternMismatch',
//     'customError'
// ]

// const mensagensDeErro = {
//     nome: {
//         valueMissing: 'O campo de nome não pode estar vazio.'
//     }
// }   


// function mostraMensagemDeErro(tipoDeInput, input) {
//     let mensagem = ''
//     tiposDeErro.forEach(erro => {
//         if(input.validity[erro]) {
//             mensagem = mensagensDeErro[tipoDeInput][erro]
//         }
//     })
    
//     return mensagem
// }