const form = document.getElementById('form')
const inputfield = document.getElementById('inputfield')

const nome = document.getElementById('nome')
const email = document.getElementById('email')
const codCPF = document.getElementById('codCPF')
const telefone = document.getElementById('telefone')
const senha = document.getElementById('senha')
const confirmSenha = document.getElementById('confirm_senha')

form.addEventListener('submit', (e) => {
    e.preventDefault()

    checkInputs()
})

function checkInputs() {

    const nomeValue = nome.value.trim()
    const emailValue = email.value.trim()
    const codCPFValue = codCPF.value.trim()
    const telefoneValue = telefone.value.trim()
    const senhaValue = senha.value.trim()
    const confirmSenhaValue = confirmSenha.value.trim()

    if(nomeValue === '') {

        errorValidation(nome, 'Preencha esse campo')
        inputfield.style.border = "3px solid crimson"
    }




}

function errorValidation(input, message) {
    inputfield.parentElement;
}