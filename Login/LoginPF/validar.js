const fields = document.querySelectorAll("[required]")
const inputBox = document.getElementById('inputBox')

function ValidateField(field) {
    // logica para verificar se existem erros
    function verifyErrors() {
        let foundError = false;

        for(let error in field.validity) {
            // se não for customError
            // então verifica se tem erro
            if (field.validity[error] && !field.validity.valid ) {
                foundError = error
            }
        }
        return foundError;
    }

    function customMessage(typeError) {
        const messages = {
            text: {
                valueMissing: "Preencha todos os campos corretamente"
            },
            email: {
                valueMissing: "Preencha todos os campos corretamente",
                typeMismatch: "Preencha todos os campos corretamente"
            },
            password:{
                valueMissing: "Preencha todos os campos corretamente"
            }
        }

        return messages[field.type][typeError]
    }

    function setCustomMessage(message) {
        const spanError = document.getElementById('error')
        
        if (message) {
            spanError.classList.remove("error")
            spanError.classList.add("active")
            spanError.innerHTML = message
        } else {
            spanError.classList.add("error")
            spanError.classList.remove("active")
            spanError.innerHTML = ""
        }
    }

    return function() {

        const error = verifyErrors()

        if(error) {
            const message = customMessage(error)

            field.parentNode.style.border = "1px solid crimson"
            setCustomMessage(message)
        } else {
            field.parentNode.style.border = "1px solid rgb(88, 252, 88)"
            setCustomMessage()
        }
    }
}


function customValidation(event) {

    const field = event.target
    const validation = ValidateField(field)

    validation()

}

for( field of fields ){
    field.addEventListener("invalid", event => { 
        // eliminar o bubble
        event.preventDefault()

        customValidation(event)
    })
    field.addEventListener("blur", customValidation)
}


document.querySelector("form")
.addEventListener("submit", event => {
    console.log("enviar o formulário")

    // não vai enviar o formulário

})