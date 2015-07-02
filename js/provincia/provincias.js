function getProvincias() {
    $.ajax({
        type: "POST",
        url: "../actions/provincia/getProvincias.php",
        data: "",
        success: function (response) {
            $("#provincias").html(response);
        }
    });
}