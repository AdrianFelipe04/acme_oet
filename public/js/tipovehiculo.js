window.addEventListener('load', () => {
    const form = document.getElementById('form')
    const tipovehiculo = document.getElementById('Tipovehiculo')

    form.addEventListener('submit', (e) => {
        e.preventDefault()
        validaCampos()
    })

    const validaCampos = () => {
        //capturar los valores ingresados por el usuario
        const tipovehiculoValor = tipovehiculo.value.trim()

        //validando campo tipovehiculo
        if (!tipovehiculoValor) {
            //console.log('CAMPO VACIO')
            validaFalla(tipovehiculo, 'No puedes dejar vacio el campo Tipo de vehiculo')
        } else {
            validaOk(tipovehiculo, form.submit())
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