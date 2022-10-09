const form = document.getElementById('form')
const inputBox = document.getElementById('inputBox')

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

    if(nomeValue == "") {

        nome.focus()

        console.log("erro nome")
   
    } 

    if(emailValue == "") {

        email.focus()

        console.log("erro email")
   
    }

    if(codCPFValue == "") {

        codCPF.focus()

        console.log("erro cpf")
   
    }

    if(telefoneValue == "") {

        telefone.focus()

        console.log("erro telefone")
   
    }

    if(senhaValue == "") {

        senha.focus()

        console.log("erro senha")
   
    }

    if(confirmSenhaValue == "") {

        confirmSenha.focus()

        console.log("erro confirmsenha")
   
    }




}

