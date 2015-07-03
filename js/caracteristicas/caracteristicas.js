function getCaracteristicas() {
    $.ajax({
        type: "POST",
        url: "../actions/caracteristicas/getCaracteristicas.php",
        data: "",
        success: function (response) {
            $("#caracteristicas").html(response);
        }
    });
}

function addCaracteristicas() {
    var parametros = {
        "idSitio": $('#txtIdSitio').val(),
        "idCaracteristica":$("#cbxCaracteristicas option:selected").val()
    };
    $.ajax({
        type: "POST",
        url: "../actions/caracteristicas/agregarCaracteristicas.php",
        data: parametros,
        success: function (response) {
            if(response==='true'){
                $("#cbxCaracteristicasAgregadas").append($("#cbxCaracteristicas option:selected"));
            }
            $("#resultado").html(response);
        }
    });
}
function removeCaracteristicas() {
    var parametros = {
        "idSitio": $('#txtIdSitio').val(),
        "idCaracteristica":$("#cbxCaracteristicasAgregadas option:selected").val()
    };
    $.ajax({
        type: "POST",
        url: "../actions/caracteristicas/eliminarCaracteristicas.php",
        data: parametros,
        success: function (response) {
            if(response==='true'){
                $("#cbxCaracteristicas").append($("#cbxCaracteristicasAgregadas option:selected"));
            }
            $("#resultado").html(response);
        }
    });
}
