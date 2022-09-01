window.addEventListener('load', () => {
    const form = document.getElementById('form');
    const cedula = document.getElementById('Cedula');
    const primernombre = document.getElementById('Primernombre');
    const segundonombre = document.getElementById('Segundonombre');
    const apellidos = document.getElementById('Apellidos');
    const direccion = document.getElementById('Direccion');
    const telefono = document.getElementById('Telefono');
    const ciudad = document.getElementById('Ciudad');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        validaCampos();
    })

    const validaCampos = () => {
        //capturar los valores ingresados por el usuario
        const cedulaValor = cedula.value.trim();

        //validando campo
        if (!cedulaValor) {
            //console.log('CAMPO VACIO')
            validaFalla(cedula, 'No puedes dejar vacio el campo Cedula');
        } else {
            validaOk(cedula, form.submit())
        }
        const primernombreValor = primernombre.value.trim();

        //validando campo
        if (!primernombreValor) {
            //console.log('CAMPO VACIO')
            validaFalla(primernombre, 'No puedes dejar vacio el campo de Primer Nombre');
        } else {
            validaOk(primernombre, form.submit())
        }
        const segundonombreValor = segundonombre.value.trim();

        //validando campo
        if (!segundonombreValor) {
            validaFalla(segundonombre, 'No puedes dejar vacio el campo de Segundo Nombre');
        } else {
            validaOk(segundonombre, form.submit());
        }
        const apellidosValor = apellidos.value.trim();

        //validando campo
        if (!apellidosValor) {
            validaFalla(apellidos, 'No puedes dejar vacio el campo de Apellidos');
        } else {
            validaOk(apellidos, form.submit());
        }
        const direccionValor = direccion.value.trim();

        //validando campo
        if (!direccionValor) {
            validaFalla(direccion, 'No puedes dejar vacio el campo de Direccion');
        } else {
            validaOk(direccion, form.submit());
        }
        const telefonoValor = telefono.value.trim();

        //validando campo
        if (!telefonoValor) {
            validaFalla(telefono, 'No puedes dejar vacio el campo de Telefono');
        } else {
            validaOk(telefono, form.submit());
        }
        const ciudadValor = ciudad.value.trim();

        //validando campo
        if (!ciudadValor) {
            validaFalla(ciudad, 'No puedes dejar vacio el campo de Ciudad');
        } else {
            validaOk(ciudad, form.submit());
        }


    }

    const validaFalla = (input, msje) => {
        const formControl = input.parentElement;
        const aviso = formControl.querySelector('span');
        aviso.innerText = msje;

        formControl.className = 'form-control falla';
    };
    const validaOk = (input) => {
        const formControl = input.parentElement;
        formControl.className = 'form-control ok';
    };

});