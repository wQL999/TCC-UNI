const form = document.getElementById('form')
const nome = document.getElementById('nome')
const email = document.getElementById('email')
const cpf = document.getElementById('codCPF')
const telefone = document.getElementById('telefone')
const senha = document.getElementById('senha')
const csenha = document.getElementById('confirm_senha')

/* ---------- REGEX -----------------*/

function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

function mcpf(v) {
    v=v.replace(/\D/g,"") // Remove tudo que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2") // 3 digitos depois . (ponto)
    v=v.replace(/(\d{3})(\d)/,"$1.$2") // 3 dígitos depois . 
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") // 3 dígitos hífen 2 dígitos
    return v
}

function mtel(v){
    v=v.replace(/\D/g,"") //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2")//Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2") //Coloca hífen entre o quarto e o quinto dígitos
    return v
}

function mlet(v) {
    v = v.replace(/[^a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ' ]/g, '')
    return v
}

window.onload = formatacpf(), formatatel(), formatalet()

function formatacpf(){
	cpf.onkeyup = function(){
		mascara( this, mcpf );
	}
}

function formatatel(){
	telefone.onkeyup = function(){
		mascara( this, mtel )
	}
}

function formatalet() {
    nome.onkeyup = function() {
        mascara(this, mlet)
    }
}


/* ----------------- VALIDAÇÃO ----------------*/
form.addEventListener('submit', e => {

    checkInputs()

    const validar = document.getElementsByClassName('success')

    if(validar.length != 6) {
        console.log("algo errado")
        e.preventDefault()
    } 

})

function setError (input, message) {
    const inputControl = input.parentElement
    const errorDisplay = inputControl.querySelector('.error')

    errorDisplay.innerText = message
    inputControl.classList.add('error')
    inputControl.classList.remove('success')
}

function setSuccess (input) {
    const inputControl = input.parentElement
    const errorDisplay = inputControl.querySelector('.error')

    errorDisplay.innerText = ''
    inputControl.classList.add('success')
    inputControl.classList.remove('error')
}

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    return re.test(String(email).toLowerCase())
}

function checkInputs() {
    const nomeValue = nome.value.trim()
    const emailValue = email.value.trim()
    const cpfValue = cpf.value.trim()
    const telValue = telefone.value.trim()
    const senhaValue = senha.value.trim()
    const csenhaValue = csenha.value.trim()


    if(nomeValue === '') {
        setError(nome, 'Este campo é obrigatório!')
    } else {
        setSuccess(nome)
    }

    if(emailValue === '') {
        setError(email, 'Este campo é obrigatório!')
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Informe um endereço de email válido')
    } else {
        setSuccess(email)
    }

    if(cpfValue === '') {
        setError (cpf, 'Este campo é obrigatório!')
    } else if(cpfValue.length != 14) {
        setError(cpf, 'Insira um CPF válido')
    } 
    else {
        setSuccess(cpf)
    }

    if (telValue === '') {
        setError(telefone, 'Este campo é obrigatório!')
    } else if(telValue.length < 14) {
        setError(telefone, 'Informe um número de telefone inválido')
    } 
    else {
        setSuccess(telefone)
    }

    if(senhaValue === '') {
        setError(senha, 'Este campo é obrigatório!')
    } else if (senhaValue.length < 8 ) {
        setError(senha, 'A senha precisa de no mínimo 8 dígitos')
    } else {
        setSuccess(senha)
    }

    if(csenhaValue === '') {
        setError(csenha, 'Por favor, confirme sua senha')
    } else if (csenhaValue !== senhaValue) {
        setError(csenha, "Senhas não coincidem")
    } else {
        setSuccess(csenha)
    }



}


/*

function cnpj(v){
    v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
    return v
}

*/

