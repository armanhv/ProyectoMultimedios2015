function vistaTexto(id) {
//  alert("ID de atractivo:"+id);
    $.ajax({
        type: "POST",
        url: "../pages/vista/vistaTexto.php",
        data: {id: id},
        success: function (response) {
            $("#tipoVista").html(response);
        }
    });
}

/***************************************************************************************/
function vistaVideo(id) {
    $.ajax({
        type: "POST",
        url: "../pages/vista/vistaVideo.php",
        data: {id: id},
        success: function (response) {
            $("#tipoVista").html(response);
        }
    });
}
function vistaCom(id) {
    $.ajax({
        type: "POST",
        url: "../pages/vista/vistaCombinado.php",
        data: {id: id},
        success: function (response) {
            $("#tipoVista").html(response);
        }
    });
}

