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

function agregarCaracteristicas() {    
    $("#cbxCaracteristicasAgregadas").append($("#cbxCaracteristicas option:selected"));
    //$("#cbxCaracteristicas option:selected").remove();   
}

function removerValores() {
    $("#cbxCaracteristicas").append($("#cbxCaracteristicasAgregadas option:selected"));
    
}