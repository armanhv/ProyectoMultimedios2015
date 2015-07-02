/* Metodos para el mantenimiento de un sitio o Atractivo Turistico */

function insertarSitioAtractivo() {


    var parametros = {
        "nombre": $('#txtNombreSitio').val(),
        "precio": $('#txtPrecio').val(),
        "telefono": $('#txtTelefono').val(),
        "direccion": $('#txtDireccion').val(),
        "email": $('#txtEmail').val(),
        "descripcionCorta": $('#txtDescripcionCorta').val(),
        "descripcionLarga": $('#txtDescripcionLarga').val(),
        "urlVideo": $('#txtUrlVideo').val(),
        "tipoSitio": $('#cbxTipoSitio').val(),
        "estereotipo": $('#cbxEstereotipo').val(),
        "provincia": $('#cbxProvincias').val()

    };

    if (confirm("¿ Desea ingresar este sitio ?")) {
        $.ajax({
            data: parametros,
            url: '../../actions/sitio/agregarSitioAction.php',
            type: 'post',
            success: function (response) {               
                $("#resultado").html(response);
            }
        });
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


