<!DOCTYPE HTML>
<head>
    <title>Proyecto de Multimedios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script> 

    <!-- Para el template 2!-->
    <link href="../segundoTemplate/css/bootstrap.css" rel='stylesheet' type='text/css' />

    <link href="../segundoTemplate/css/style2.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,600italic,700italic' rel='stylesheet' type='text/css'>
    
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
                    </div><br>

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
                                	<input type="button" class="read_more" href="javascript:;" onclick="recargarSitios();return false;" value="Calcula"/>
                                    
                                    <input type="submit" class="read_more" onClick="recargarSitios()"/>
                                </div>
                            </div>
                            </form>
                        </div>                                
                    </div>
                </div>
                <div class="spa_products">
                    <h2>Busqueda por Estereotipo</h2>
                    
                </div>
            </div>
            <!----->            
        </div>
    </div>


<body>
</body>
</html>