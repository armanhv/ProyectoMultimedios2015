function AgregarImagenPrincipal() {
    var parametros = {
        "idSitio": $('#txtIdSitio').val(),
        "urlImagen": $('#urlImagenP').val()
    };
    $.ajax({
        data: parametros,
        url: './../actions/imagenes/agregarImagenPrincipal.php',
        type: 'post',
        success: function (response) {

            $("#resultadoImagenP").html(response);
        }
    });
}



