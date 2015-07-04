<?php include("../pages/admin_session.php"); ?>
<?php
include_once(".././Data/DataSitio.php");
$da = new DataSitio();
$da->load_sitios();
?>

<!DOCTYPE HTML>
<head>
    <title>Mantenimiento Sitios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="shortcut icon" href="../images/icono.png"/> 
    <script src="../js/jquery.min.js"></script> 

    <link href="../segundoTemplate/css/style2.css" rel="stylesheet" type="text/css" media="all" />
    <script>
        function recargarSitios() {
            $.ajax({
                data: /*{"func" : "estereotipo"},*/ $("#form").serialize(),
                url: '../Data/DataSitio.php',
                type: 'post',
                success: function (data) {
                    $('#lista').html(data);
                },
                error: function (jqXHR, textStatus, error) {
                    alert("error: " + jqXHR.responseText);
                }
            });
        }
    </script>
</head>
<body>
    <?php include("admin_header.php"); ?>



    <div class="main">
        <div class="content">
            <div class="wrap">                
                <div class="spa_products">
                    <h2>Mantenimiento Sitios</h2>
                    <div class="section group" id="lista">                        

                        <?php foreach ($_SESSION['sitios'] as $k => $cur) {
                            ?>
                            <div class="products_1_of_3">
                                <h3><?php echo $cur->nombre; ?></h3>
                                <img src="<? echo $cur->url_imagen ?>" alt="" />
                                <p><?php echo $cur->descripcion1; ?></p>
                                <p>Provincia:  <?php echo $cur->provincia; ?></p>
                                <div class="read_more"><a href="editar_eliminar_AA.php?id=<?php echo $cur->id_stio ?>">Ver</a></div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
            <!----->            
        </div>
    </div>

    <?php include("admin_footer.php"); ?>

</body>

</html>


