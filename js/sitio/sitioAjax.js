/* Metodos para el mantenimiento de un sitio o Atractivo Turistico */

function insertarSitioAtractivo() {

    if (verificarCliente() && validarEmail()) {
        var parametros = {
            "nombreCliente": depurarTexto($('#txtNombreCliente').val()),
            "primerApellido": depurarTexto($('#txtPrimerApellido').val()),
            "segundoApellido": depurarTexto($('#txtSegundoApellido').val()),
            "correoCliente": depurarTexto($('#txtEmailEmpleado').val())

        };

        if (confirm("¿ Desea ingresar este cliente ?")) {
            $.ajax({
                data: parametros,
                url: '../../actions/cliente/insertarCliente.php',
                type: 'post',
                success: function (response) {
                    //se recarga el combo y limpan los espacios
                    $('input[type=text]').val("");
                    $('#txtEmailEmpleado').val("");
                    obtenerClientes();
                    $("#resultado").html(response);
                }
            });
        }
    }
}


/********************* Seccion de validaciones ************************/
function verificarCliente() {
    var expresion = /^[a-zA-Z ÑÁÉÍÓÚñáéíóú]*$/; // exprecion para solo letras

    var nombre = $('#txtNombreCliente').val();
    var primerApellido = $('#txtPrimerApellido').val();
    var segundoApellido = $('#txtSegundoApellido').val();
    var correoCliente = document.getElementById("txtEmailEmpleado").value;

    if (!(nombre.match(expresion)) || ($.trim(nombre) === '')) {
        mandarMensaje("El nombre es inválido");
        txtNombreCliente.focus();
        return false;
    }

    if (!(primerApellido.match(expresion)) || ($.trim(primerApellido) === '')) {
        mandarMensaje("El primer apellido es inválido");
        txtPrimerApellido.focus();
        return false;
    }

    if ($.trim(correoCliente) === '') {
        mandarMensaje("El email es inválido");
        txtEmailEmpleado.focus();
        return false;
    }

    if (!(segundoApellido.match(expresion)) || ($.trim(segundoApellido) === '')) {
        mandarMensaje("El segundo apellido es inválido");
        txtSegundoApellido.focus();
        return false;
    }

    return true;
}


