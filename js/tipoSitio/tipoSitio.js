function getTiposSitios() {
    $.ajax({
        type: "POST",
        url: "../actions/tipoSitio/getTiposSitios.php",
        data: "",
        success: function (response) {
            $("#tipoSitios").html(response);
        }
    });
}