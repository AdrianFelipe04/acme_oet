window.addEventListener('load', () => {
    const form = document.getElementById('form')
    const color = document.getElementById('Color')

    form.addEventListener('submit', (e) => {
        e.preventDefault()
        validaCampos()
    })

    const validaCampos = () => {
        //capturar los valores ingresados por el usuario
        const colorValor = color.value.trim()

        //validando campo marca
        if (!colorValor) {
            //console.log('CAMPO VACIO')
            validaFalla(color, 'No puedes dejar vacio el campo Color')
        } else {
            validaOk(color, form.submit())
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