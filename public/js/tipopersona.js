window.addEventListener('load', () => {
    const form = document.getElementById('form')
    const tipopersona = document.getElementById('Tipopersona')

    form.addEventListener('submit', (e) => {
        e.preventDefault()
        validaCampos()
    })

    const validaCampos = () => {
        //capturar los valores ingresados por el usuario
        const tipopersonaValor = tipopersona.value.trim()

        //validando campo marca
        if (!tipopersonaValor) {
            //console.log('CAMPO VACIO')
            validaFalla(tipopersona, 'No puedes dejar vacio el campo de Tipo de Persona')
        } else {
            validaOk(tipopersona, form.submit())
        }


    }

    const validaFalla = (input, msje) => {
        const formControl = input.parentElement
        const aviso = formControl.querySelector('span')
        aviso.innerText = msje

        formControl.className = 'form-control falla'
    }
    const validaOk = (input) => {
        const formControl = input.parentElement
        formControl.className = 'form-control ok'
    }

})