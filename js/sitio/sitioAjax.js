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
        "tipoSitio": $("#cbxTipoSitio option:selected").val(),
        "estereotipo": $("#cbxEstereotipo option:selected").val(),
        "provincia": $("#cbxProvincias option:selected").val(),
        "latitud": $("#txtLatitud").val(),
        "longitud": $("#txtLongitud").val(),
        "ImagenP": $("#urlImagenP").val(),
        "ImagenS1": $("#urlImagen1").val(),
        "ImagenS2": $("#urlImagen2").val(),
        "ImagenS3": $("#urlImagen3").val()
        

    };

    if (confirm("¿ Desea ingresar este sitio ?")) {
        $.ajax({
            data: parametros,
            url: './../actions/agregarSitioAction.php',
            type: 'post',
            success: function (response) {
                if(response!='Error al ingresar el sitio'){
                   // $("#btnAgregarSitio").hide();
                   getCaracteristicas();
                }
                $("#resultado").html(response);
            }
        });
    }
}



function eliminarSitioAtractivo() {
  
    
    if (confirm("¿ Desea eliminar este sitio ?")) {
        $.ajax({
            data: parametros,
            url: './../actions/caracteristicas/eliminarSitio.php',
            type: 'post',
            success: function (response) {
               $("#resultado").html(response);
            }
        });
    }
}

function obtenerInformacionAdicional(){
    var parametros = {
        "idSitio": $('#txtIdSitio').val()
    };
     $.ajax({
            data: parametros,
            url: './../actions/agregarInfomacionAdicionalSitio.php',
            type: 'post',
            success: function (response) { 
               
                $("#informacionAdicional").html(response);
            }
        });
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


