<?php include("../pages/user_session.php"); ?>
<!DOCTYPE HTML>
<head>
    <title>Preferencias de Usuaio</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script> 
</head>
<body>
    <?php include("user_header.php"); ?>
    
    <div class="main">
        <div class="content">
            <div class="wrap">       
                <div class="services">
                <form action="../actions/preferencias.php" method="post">
                    <h2>Seleccione sus preferencias entre las siguientes opciones, para crear un mejor estereotipo sobre usted: </h2>
                    <br><br>
                    <div class="section group">
                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Comida</span></h3>
                            <div class="services_list">
                                <input type="radio" name="comida" value="carnivoro" />Carnívoro
                                <input type="radio" name="comida" value="vegetariano" />Vegetariano 
                            </div>
                        </div>
                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Música</span></h3>
                            <div class="services_list">
                                <input type="radio" name="musica" value="fuerte" />Fuerte
                                <input type="radio" name="musica" value="suave" />Suave 
                            </div>
                        </div>
                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Paisaje</span></h3> 
                            <div class="services_list">
                                <input type="radio" name="paisaje" value="playa" />Playa
                                <input type="radio" name="paisaje" value="montania" />Montaña
                            </div>
                        </div>

                    </div>
                    <div class="section group">
                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Hospedaje</span></h3> 
                            <div class="services_list">
                                <input type="radio" name="hospedaje" value="bajoTecho" />Bajo Techo 
                                <input type="radio" name="hospedaje" value="aireLibre" />Aire Libre
                            </div>
                        </div> 
                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Tiempo de Duración</span></h3> 
                            <div class="services_list">
                                <input type="radio" name="tiempo" value="corto" />Corto 
                                <input type="radio" name="tiempo" value="largo" />Largo
                            </div>
                        </div>

                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Tipo de Atractivo o Actividad</span></h3> 
                            <div class="services_list">
                                <input type="radio" name="tipoActividad" value="tranquilas" />Tranquilas
                                <input type="radio" name="tipoActividad" value="extremas" />Extremas
                            </div>
                        </div>                                              
                    </div>

                </div>
                <div class="contact-form">
                                         
                        <div>
                            <span><input type="submit" value="Guardar Preferencias" class="myButton"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include("user_footer.php"); ?>
</body>
</html>
