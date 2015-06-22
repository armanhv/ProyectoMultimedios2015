<?php include("../pages/user_session.php"); ?>
<!DOCTYPE HTML>
<head>
    <title>Preferencias de Usuaio</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script> 
    <script type="text/javascript">
	
		function comida_radio(myRadio) {
			var value = myRadio.value; 
			var ovalue = myRadio.name;
			$.post("preferencias_sessions.php", {"value": value, "atribute": ovalue}, function(results) {
			});
		}
		
    </script>

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
                                <input type="radio" name="comida" value="carnivoro" onClick="comida_radio(this)"
                                <?php if(strcmp($_SESSION['comida'],'carnivoro')==0) echo 'checked="checked"';?>/>Carnívoro
                                <input type="radio" name="comida" value="vegetariano" onClick="comida_radio(this)" 
                                <?php if(strcmp($_SESSION['comida'],'vegetariano')==0) echo 'checked="checked"';?>/>Vegetariano 
                            </div>
                        </div>
                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Música</span></h3>
                            <div class="services_list">
                            	<input type="radio" name="musica" value="fuerte" onClick="comida_radio(this)"
                                <?php if(strcmp($_SESSION['musica'],'fuerte')==0) echo 'checked="checked"';?>/>Fuerte
                                <input type="radio" name="musica" value="suave" onClick="comida_radio(this)" 
                                <?php if(strcmp($_SESSION['musica'],'suave')==0) echo 'checked="checked"';?>/>Suave
                            </div>
                        </div>
                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Paisaje</span></h3> 
                            <div class="services_list">
                           		<input type="radio" name="paisaje" value="playa" onClick="comida_radio(this)"
                                <?php if(strcmp($_SESSION['paisaje'],'playa')==0) echo 'checked="checked"';?>/>Playa
                            	<input type="radio" name="paisaje" value="montania" onClick="comida_radio(this)" 
                                <?php if(strcmp($_SESSION['paisaje'],'montania')==0) echo 'checked="checked"';?>/>Montaña
                            </div>
                        </div>

                    </div>
                    <div class="section group">
                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Hospedaje</span></h3> 
                            <div class="services_list">
                            	<input type="radio" name="hospedaje" value="bajoTecho" onClick="comida_radio(this)"
                                <?php if(strcmp($_SESSION['hospedaje'],'bajoTecho')==0) echo 'checked="checked"';?>/>Bajo Techo
                            	<input type="radio" name="hospedaje" value="aireLibre" onClick="comida_radio(this)" 
                                <?php if(strcmp($_SESSION['hospedaje'],'aireLibre')==0) echo 'checked="checked"';?>/>Aire Libre
                            </div>
                        </div> 
                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Tiempo de Duración</span></h3> 
                            <div class="services_list">
                            	<input type="radio" name="tiempo" value="corto" onClick="comida_radio(this)"
                                <?php if(strcmp($_SESSION['tiempo'],'corto')==0) echo 'checked="checked"';?>/>Corto
                            	<input type="radio" name="tiempo" value="largo" onClick="comida_radio(this)" 
                                <?php if(strcmp($_SESSION['tiempo'],'largo')==0) echo 'checked="checked"';?>/>Largo
                            </div>
                        </div>

                        <div class="col_1_of_4 span_1_of_4">
                            <h3><span>Tipo de Atractivo o Actividad</span></h3> 
                            <div class="services_list">
                            	<input type="radio" name="tipoActividad" value="tranquilas" onClick="comida_radio(this)"
                                <?php if(strcmp($_SESSION['tipoActividad'],'tranquilas')==0) echo 'checked="checked"';?>/>Tranquilas
                            	<input type="radio" name="tipoActividad" value="extremas" onClick="comida_radio(this)" 
                                <?php if(strcmp($_SESSION['tipoActividad'],'extremas')==0) echo 'checked="checked"';?>/>Extremas
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
