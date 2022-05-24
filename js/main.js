export function valida(input) {
    // para acessar o data attribute de um input, precisamos do dataset
    const tipoDeInput = input.dataset.tipo

    if(validadores[tipoDeInput]) {
        validadores[tipoDeInput](input)
    }

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
    //'typeMismatch',
    //'patternMismatch',
    'customError'
];

 const mensagensDeErro = {
    nome: {
        valueMissing: 'Preencha este campo.'
    },
    cpf: {
        valueMissing: 'CPF inválido.',
        customError: 'O CPF digitado não é válido.'
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

const validadores = {
    // dataNascimento:input => validaDataNascimento(input),
    cpf:input => validaCPF(input),
    //cep:input => recuperarCEP(input)
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

function validaCPF(input) {
    const cpfFormatado = input.value.replace(/\D/g, '')
    let mensagem = ''

    if(!checaCPFRepetido(cpfFormatado) || !checaEstruturaCPF(cpfFormatado)) {
        mensagem = 'O CPF digitado não é válido.'
    }

    input.setCustomValidity(mensagem)
}

function checaCPFRepetido(cpf) {
    const valoresRepetidos = [
        '00000000000',
        '11111111111',
        '22222222222',
        '33333333333',
        '44444444444',
        '55555555555',
        '66666666666',
        '77777777777',
        '88888888888',
        '99999999999'
    ]
    let cpfValido = true

    valoresRepetidos.forEach(valor => {
        if(valor == cpf) {
            cpfValido = false
        }
    })

    return cpfValido
}

function checaEstruturaCPF(cpf) {
    const multiplicador = 10

    return checaDigitoVerificador(cpf, multiplicador)
}

function checaDigitoVerificador(cpf, multiplicador) {
    if(multiplicador >= 12) {
        return true
    }

    let multiplicadorInicial = multiplicador
    let soma = 0
    const cpfSemDigitos = cpf.substr(0, multiplicador - 1).split('')
    const digitoVerificador = cpf.charAt(multiplicador - 1)
    for(let contador = 0; multiplicadorInicial > 1 ; multiplicadorInicial--) {
        soma = soma + cpfSemDigitos[contador] * multiplicadorInicial
        contador++
    }

    if(digitoVerificador == confirmaDigito(soma)) {
        return checaDigitoVerificador(cpf, multiplicador + 1)
    }

    return false
}

function confirmaDigito(soma) {
    let seiLa = 11 - (soma % 11);

    if (seiLa === 11 || seiLa === 10) {
        return 0
    }else {
        return seiLa;
    }

}