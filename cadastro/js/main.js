
const form = document.getElementById('form')
const nome = document.getElementById('nome')
const cpf = document.getElementById('cpf')
const telefone = document.getElementById('phone')
const endereco = document.getElementById('endereco')
const profissao = document.getElementById('profissao') 
const renda = document.getElementById('renda')
const email = document.getElementById('email')
const senha = document.getElementById('senha')

form.addEventListener('submit', (e) => {
    e.preventDefault()

    checkInputs()
})



































function checkInputs() {

    const nomeValue = nome.value.trim()
    const cpfValue = cpf.value.trim()
    const telefoneValue = telefone.value.trim()
    const enderecoValue = endereco.value.trim()
    const profissaoValue = profissao.value.trim()
    const rendaValue = renda.value.trim()
    const emailValue = email.value.trim()
    const senhaValue = senha.value.trim()


    if(nomeValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(nome, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(nome)
    }

    if(cpfValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(cpf, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(cpf)
    }

    if(telefoneValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(telefone, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(telefone)
    }

    if(enderecoValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(endereco, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(endereco)
    }

    if(profissaoValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(profissao, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(profissao)
    }

    if(rendaValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(renda, 'Preencha esse campo')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(renda)
    }

    if(emailValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(email, 'Preencha esse campo')
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Email inválido')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(email)
    }
   
    if(senhaValue === '') {
        // mostrar erro
        // add classe
        setErrorFor(senha, 'Preencha esse campo')

    } else if(senhaValue.length < 8) { 
        setErrorFor(senha, 'Senha deve ter mais que 8 caracteres')
    } else {
        // adicionar a classe de sucesso
        setSuccessFor(senha)
    }


}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small')

    small.innerText = message

    formControl.className = 'form-control error'
}

function setSuccessFor(input) {
    const formControl = input.parentElement;

    formControl.className = 'form-control success'
}

function isEmail(email) {
    return /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/.test(email)
}