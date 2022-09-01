window.addEventListener('load', () => {
    const form = document.getElementById('form')
    const marca = document.getElementById('Marca')

    form.addEventListener('submit', (e) => {
        e.preventDefault()
        validaCampos()
    })

    const validaCampos = () => {
        //capturar los valores ingresados por el usuario
        const marcaValor = marca.value.trim()

        //validando campo marca
        if (!marcaValor) {
            //console.log('CAMPO VACIO')
            validaFalla(marca, 'No puedes dejar vacio el campo Marca')
        } else {
            validaOk(marca, form.submit())
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