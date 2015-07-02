<?php include("../pages/user_session.php"); 
?>
<!DOCTYPE HTML>
<head>
    <title>Búsqueda Avanzada</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script> 

    <link href="../segundoTemplate/css/style2.css" rel="stylesheet" type="text/css" media="all" />
    <script>
		function recargarSitios(){
				$.ajax({
						data:  $("#form").serialize(),
						url:   '../Data/BusquedaAvanzada.php',
						type:  'post',
						success: function (data) {
							$('#lista').html(data);
						  },
						  error: function(jqXHR, textStatus, error) {
							alert( "error: " + jqXHR.responseText);
						  }
						});				
		}
	</script>
</head>
<body>
    <?php include("user_header.php"); ?>
	
    <div class="content">	 
        <div class="categories">
            <ul>
                <li class="cate">Tipo de Busqueda</li>
                <li ><a href="actividades_atractivos.php">Lo mas visitados</a></li>
                <li class="active"><a href="busqueda_avanzada.php">Busqueda Avanzada</a></li>
                <li><a href="busqueda_estereotipo.php">Busqueda por Estereotipos</a></li>                
            </ul>            
        </div><br>
    </div>
        <div class="main">
            <div class="content">
                <div class="wrap">
                	<div class="content">
                        <div class="services">                       
                            <div class="section group">
                            <form method="post" action="../Data/DataSitio.php?func=avanzada" id="form">
                            <input type="hidden" name="func" value="avanzada"/>
                            <div class="contact-form">
                                <span><label>Buscar:</label><input name="palabrasForm" type="text" class="textbox" style="width:70%"></span>
                                <span></span>
                            </div>
                               
                                 <div class="col_1_of_4 span_1_of_4">                                    
                                    <div class="services_list">
                                    	<p>
                                        <input type="checkbox" name="Familiar" value="Familiar"> Familiar<br>
                                        <input type="checkbox" name="Tour" value="Tour"> Tour<br>
                                        <input type="checkbox" name="Montania" value="Montania"> Montaña<br></p>
                                    </div>
                                </div>
                                <div class="col_1_of_4 span_1_of_4">                                   
                                    <div class="services_list">
                                    	<p>
                                        <input type="checkbox" name="Deporte" value="Deporte"> Deporte<br>
                                        <input type="checkbox" name="Restaurante" value="Restaurante"> Restaurante<br>
                                        <input type="checkbox" name="Playa" value="Playa"> Playa<br></p>
                                    </div>
                                </div>
                                <div class="col_1_of_4 span_1_of_4">                                   
                                    <div class="services_list">
                                    	<p>
                                        <input type="checkbox" name="FacilAcceso" value="Facil Acceso"> Fácil Acceso<br>
                                        <input type="checkbox" name="Cultural" value="Cultural"> Cultural<br></p>
                                    </div>
                                </div>
                                <div class="col_1_of_4 span_1_of_4">                                   
                                    <div class="services_list">
                                    	<p>
                                        <label >Precio:</label>
                                        <select name="precio">
                                            <option value="0">----</option>
                                            <option value="1">1 - 10 000</option>
                                            <option value="2">10 000 - 80 000</option>
                                            <option value="3">80 000 - 150 000</option>
                                            <option value="4">150 000 - 500 000</option>
                                            <option value="5">500 000 - 1 000 000</option>
                                            <option value="6">Más de 1 000 000</option>
                                        </select><br>
                                        <label >Provincia:</label>
                                        <select name="provincia">
                                            <option value="0">No importa</option>
                                            <option value="Cartago">Cartago</option>
                                            <option value="San Jose">San José</option>
                                            <option value="Alajuela">Alajuela</option>
                                            <option value="Heredia">Heredia</option>
                                            <option value="Guanacaste">Guanacaste</option>
                                            <option value="Limon">Limón</option>
                                            <option value="Puntarenas">Puntarenas</option>
                                        </select> <br> <br> </p>
                                    </div>
                                </div>
                                <input type="submit" value="Buscar" href="javascript:;" onclick="recargarSitios();return false;"/>
                                
                                <!--<input type="submit"/>-->
                            </form>
                            </div>                                
                        </div>
                    </div>
                    <div class="spa_products">
                        
                        <div class="section group" id="lista">                        
                                
                                                      
                        </div>
                    </div>
            	</div>
            </div>
            <!----->            
        </div>
    </div>

    <?php include("user_footer.php"); ?>
</body>
</html>

