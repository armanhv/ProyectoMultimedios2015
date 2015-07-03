<?php
include("../pages/user_session.php");

include_once(".././Data/DataSitio.php");
include_once(".././Data/DataImagen.php");
include_once(".././Data/DataCoordenada.php");
include_once(".././Data/DataCaracteristica.php");
$da = new DataSitio();
$da->load_sitio($_GET['id']);
$sitio = unserialize($_SESSION['sitio']);

$da = new DataImagen();
$da->get_images($_GET['id']);

$da = new DataCoordenada();
$da->get_coordenadas($_GET['id']);
$coordenada = unserialize($_SESSION['coordenada']);

$da = new DataCaracteristica();
$da->get_caracteristicas($_GET['id']);
$idSitio = $_GET['id'];
?>
<!DOCTYPE HTML>
<head>
    <title>Sitio</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/sticky_menu.css" rel="stylesheet" type="text/css"/>

    <!-- Para el template 2!-->
    <link href="../segundoTemplate/css/style2.css" rel="stylesheet" type="text/css" media="all" />

    <script src="../js/jquery.min.js"></script> 
    <script
        src="http://maps.googleapis.com/maps/api/js">
    </script>

    <script type="text/javascript">

        var latitude = "<?php echo $coordenada->latitud; ?>";
        var longitud = "<?php echo $coordenada->longuitud; ?>";
        var myCenter = new google.maps.LatLng(latitude, longitud);

        function initialize()
        {
            var mapProp = {
                center: myCenter,
                zoom: 5,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,
            });

            marker.setMap(map);
            map.setZoom(13);
            map.setCenter(marker.getPosition());
            /*map.
             streetViewControl:*/
            //navigator.geolocation.getCurrentPosition();
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script> 

    <script type="text/javascript">
        $(document).ready(function () {
            $('#cssmenu').addClass('no_sticky');
            var stickyNavTop = $('#cssmenu').offset().top;
            var stickyNav = function () {
                var scrollTop = $(window).scrollTop();

                if (scrollTop > stickyNavTop) {
                    $('#cssmenu').addClass('sticky');
                } else {
                    $('#cssmenu').removeClass('sticky');
                }
            };

            stickyNav();

            $(window).scroll(function () {
                stickyNav();
            });
        });
    </script>
</head>
<body onload="vistaTexto(<?php echo $sitio->id_stio; ?>)">
    <a href="top"/>
    <?php include("user_header.php"); ?>
    <!---->
    <div id='cssmenu'>
        <ul>
            <li><a href='#top'><span>Inicio</span></a></li>
            <li><a href='#info'><span>Información</span></a></li>
            <li><a href='#gallery'><span>Galeria</span></a></li>
            <li class='last'><a href='#map'><span>Mapa y contacto</span></a></li>
        </ul>
    </div>
    <p><a name="info"></a>
    </p>
</p>
<p>&nbsp;</p>
<p>&nbsp; </p>
<div class="slider">
    <div class="wrap">
        <div class="slider_top">         
           <span id="tipoVista"></span>				
            <div class="slider_right">
                <div class="image group">                                        
                    <div class="grid span_2_of_3">
                        <h3>Tipo de Visualización</h3>
                        <div class="slider_bottom">	 
                            <div class="categories">
                                <ul>
                                    <li><a  onclick="vistaTexto(<?php echo $sitio->id_stio; ?>)"><img src="../images/tipoVisualizacion/texto.png"   alt="" height="38" width="38"/>Texto</a></li>
                                    <li><a  onclick="vistaVideo(<?php echo $sitio->id_stio; ?>)"> <img src="../images/tipoVisualizacion/video.png" height="38" width="38">Video</a></li>
                                    <li><a  onclick="vistaCom(<?php echo $sitio->id_stio; ?>)"> <img src="../images/tipoVisualizacion/combinado.png" height="38" width="38">Combinado</a></li>

                                </ul>				
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>			 
    </div>            
</div> 
</div>


<a name="gallery"></a>
<div class="main">
    <div class="content">
        <div class="wrap">
            <div class="spa_products">
                <h2>Galeria</h2>
                <div class="section group">

                    <?php foreach ($_SESSION['images'] as $k => $cur) {
                        ?>
                        <div class="creditos">
                            <img src="<? echo $cur->url_imagen ?>" alt="" />
                        </div>
                    <?php } ?> 
                    <div class="products_1_of_3">
                        <? echo $sitio->url_imagen; ?>
                        <img src="<? echo $sitio->url_imagen ?>" alt="" />                           
                    </div>
                </div>

            </div>

            <a name="map"></a>
            <div class="main">

                <div class="contact_info">
                    <h2>&nbsp;</h2>
                    <h2>&nbsp;</h2>
                    <h2>Encuentralo en</h2>
                    <div id="googleMap" style="width:100%;height:250px;"></div>
                    <form action = "http://maps.google.com/maps" = "get" target = "_blank">
                        <input type="hidden" id="saddr"/> 
                        <input type = "hidden" name = "daddr" value = "<?php echo $sitio->nombre . ', ' . $sitio->provincia; ?>"/> 
                        <input type="submit" value="¿Cómo llegar?" />
                    </form>
                </div>
                <div class="company_address">
                    </br></br>
                    <h2>Información de Contacto:</h2>
                    <p>Principales carácterísticas:
                        <?php
                        echo implode(", ", $_SESSION['caracteristicas']);
                        ?> 
                    </p>
                    <p>Apto para: <?php echo $sitio->apto_para; ?></p>
                    <p>Dirección: <?php echo $sitio->direccion; ?></p>
                    <p>Provincia: <?php echo $sitio->provincia; ?></p>
                    <p>Precio: <?php echo $sitio->precio; ?></p>
                    <p>Teléfono: <?php echo $sitio->telefono; ?></p>
                    <p>Email: <span><?php echo $sitio->correo; ?></span></p>
                </div>                           
            </div>
        </div>
        <!----->            
    </div>
</div>

<?php include("user_footer.php"); ?>
<script type="text/javascript">
    var x = document.getElementById("saddr");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
    }

    function showPosition(position) {
        x.value = position.coords.latitude + "," + position.coords.longitude;
    }
</script> 
<script type="text/javascript" src="../js/vistas/tipoVistaAjax.js"></script>
</body>
</html>

