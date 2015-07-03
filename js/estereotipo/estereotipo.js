function getEstereotipo() {
    $.ajax({
        type: "POST",
        url: "../actions/estereotipo/getEstereotipos.php",
        data: "",
        success: function (response) {
            $("#estereotipos").html(response);
        }
    });
}