export function valida(input) {
    // para acessar o data attribute de um input, precisamos do dataset
    const tipoDeInput = input.dataset.tipo

    // if(validadores[tipoDeInput]) {
    //     validadores[tipoDeInput](input)
    // }

    if(input.validity.valid) {
        input.parentElement.classList.remove('container-input--invalido')
        input.parentElement.querySelector('.container-input-mensagem-erro').innerHTML = ''
    } else {
        input.parentElement.classList.add('container-input--invalido')
        input.parentElement.querySelector('.container-input-mensagem-erro').innerHTML = mostraMensagemDeErro(tipoDeInput, input)
    }
}

const tiposDeErro = [
    'valueMissing',
//     'typeMismatch',
//     'patternMismatch',
//     'customError'
]

 const mensagensDeErro = {
    nome: {
        valueMissing: 'Preencha este campo.'
    },
    cpf: {
        valueMissing: 'CPF inválido.'
    },
    phone: {
        valueMissing: 'Preencha este campo.'
    },
    endereco: {
        valueMissing: 'Preencha este campo.'
    },
    profissao: {
        valueMissing: 'Preencha este campo.'
    },
    renda: {
        valueMissing: 'Preencha este campo.'
    },
    email: {
        valueMissing: 'Preencha este campo.'
    },
    senha: {
        valueMissing: 'Preencha este campo.'
    }
}   


function mostraMensagemDeErro(tipoDeInput, input) {
    let mensagem = ''
    tiposDeErro.forEach(erro => {
        if(input.validity[erro]) {
            mensagem = mensagensDeErro[tipoDeInput][erro]
        }
    })
    
    return mensagem
}