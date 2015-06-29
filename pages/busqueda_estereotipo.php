<?php include("../pages/user_session.php"); 
include_once(".././Data/DataSitio.php");
	$da = new DataSitio();
	$da->sitio_estereotipo();
?>

<!DOCTYPE HTML>
<head>
    <title>Proyecto de Multimedios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script> 
    
    <link href="../segundoTemplate/css/style2.css" rel="stylesheet" type="text/css" media="all" />
    <script>
		function recargarSitios(){
				$.ajax({
						data:  /*{"func" : "estereotipo"},*/ $("#form").serialize(),
						url:   '../Data/DataSitio.php',
						type:  'post',
						success: function (data) {
							$('#lista').html(data);
						  },
						  error: function(jqXHR, textStatus, error) {
							alert( "error: " + jqXHR.responseText);
						  }
						});/*
						beforeSend: function () {
								$("#lista").html("Procesando, espere por favor...");
						},
						error: function(){
								$("#lista").html("Error");
						},
						success:  function (response) {
								$("#lista").html(response);
						}
				});*/
				
		}
	</script>
</head>
<body>
    <?php include("user_header.php"); ?>
    
    <div class="content">	 
        <div class="categories">
            <ul>
                <li class="cate">Tipo de Busqueda</li>
                <li><a href="actividades_atractivos.php">Lo mas visitados</a></li>
                <li><a href="busqueda_avanzada.php">Busqueda Avanzada</a></li>
                <li class="active"><a href="busqueda_estereotipo.php">Busqueda por Estereotipos</a></li>                
            </ul>				
        </div>
    </div>
    
    <div class="main">
        <div class="content">
            <div class="wrap">
                <div class="content">	 
                    

                    <div class="services">                       
                        <div class="section group">
                        	<form method="post" action="../Data/DataSitio.php?func=estereotipo" id="form">
                            <input type="hidden" name="func" value="estereotipo"/>
                            <div class="col_1_of_4 span_1_of_4">                                    
                                <div class="services_list">
                                    <input type="checkbox" name="SanJose" value="San Jose"> San José<br>
                                    <input type="checkbox" name="Cartago" value="Cartago"> Cartago<br>
                                    <input type="checkbox" name="Heredia" value="Heredia"> Heredia<br>
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4">                                   
                                <div class="services_list">
                                    <input type="checkbox" name="Puntarenas" value="Puntarenas"> Puntarenas<br>
                                    <input type="checkbox" name="Limon" value="Limon"> Limón<br>
                                    <input type="checkbox" name="Guanacaste" value="Guanacaste"> Guanacaste<br>
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4">                                   
                                <div class="services_list">
                                    <input type="checkbox" name="Alajuela" value="Alajuela"> Alajuela<br> 
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4"> 
                                <div class="services_list">
                                Estereotipo:<br/>
                                    <input type="radio" name="estereotipo" value="tranquilo" 
                                    	<?php if ( (strcmp($_SESSION['estereotipo'], 'tranquilo')) == 0 )
										{ echo 'checked="checked"';} ?>/>Tranquilo<br>
                                    <input type="radio" name="estereotipo" value="extremo" 
                                    <?php if ( (strcmp($_SESSION['estereotipo'], 'extremo')) == 0 )
										{ echo 'checked="checked"';} ?>/>Extremo<br>
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4">                                   
                                <div class="services_list">
                                	<input type="submit" value="Buscar" href="javascript:;" onclick="recargarSitios();return false;"/>
                                </div>
                            </div>
                            </form>
                        </div>                                
                    </div>
                </div>
                <div class="spa_products">
                    <h2>Busqueda por Estereotipo</h2>
                    <div class="section group" id="lista">                        
                            
                           <?php foreach($_SESSION['sitios_estereotipo'] as $k => $cur)
							{?>
                            	<div class="products_1_of_3">
                                    <h3><?php echo $cur->nombre; ?></h3>
                                    <img src="<? echo $cur->url_imagen ?>" alt="" />
                                    <p><?php echo $cur->descripcion1; ?></p>
                                    <p>Provincia:  <?php echo $cur->provincia; ?></p>
                                    <div class="read_more"><a href="vista_sitio.php?id=<?php echo $cur->id_stio ?>">Ver</a></div>
                        		</div>
                            <?php }?>

                        
                    </div>
                </div>
            </div>
            <!----->            
        </div>
    </div>

   <?php include("user_footer.php"); ?>
   
</body>

</html>


