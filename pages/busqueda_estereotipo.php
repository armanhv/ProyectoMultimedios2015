

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,600italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php include("user_header.html"); 
	include(".././Data/DataSitio.php");
	$da = new DataSitio();
	$da->load_sitios();
	?>
    
    <div class="main">
        <div class="content">
            <div class="wrap">
                <div class="content">	 
                    <div class="categories">
                        <ul>
                            <li class="cate">Tipo de Busqueda</li>
                            <li><a href="actividades_atractivos.html">Lo mas visitados</a></li>
                            <li><a href="busqueda_avanzada.html">Busqueda Avanzada</a></li>
                            <li class="active"><a href="busqueda_estereotipo.php">Busqueda por Estereotipos</a></li>                
                        </ul>            
                    </div><br>

                    <div class="services">                       
                        <div class="section group">
                            <div class="col_1_of_4 span_1_of_4">                                    
                                <div class="services_list">
                                    <input type="checkbox" name="option1" value="Milk"> San José<br>
                                    <input type="checkbox" name="option1" value="Milk"> Cartago<br>
                                    <input type="checkbox" name="option1" value="Milk"> Heredia<br>
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4">                                   
                                <div class="services_list">
                                    <input type="checkbox" name="option1" value="Milk"> Puntarenas<br>
                                    <input type="checkbox" name="option1" value="Milk"> Limón<br>
                                    <input type="checkbox" name="option1" value="Milk"> Guanacaste<br>
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4">                                   
                                <div class="services_list">
                                    <input type="checkbox" name="option1" value="Milk"> Alajuela<br> 
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4"> 
                                <div class="services_list">
                                Estereotipo:<br/>
                                    <input type="radio" name="Grupo1" value="Tranquilo" />Tranquilo<br>
                                    <input type="radio" name="Grupo1" value="Extremo" />Extremo<br>
                                </div>
                            </div>
                            <div class="col_1_of_4 span_1_of_4">                                   
                                <div class="services_list">                                   
                                    <div class="read_more"><a>Buscar</a></div> 
                                </div>
                            </div>
                        </div>                                
                    </div>
                </div>
                <div class="spa_products">
                    <h2>Busqueda por Estereotipo</h2>
                    <div class="section group">                        
                            
                           <?php foreach($_SESSION['sitios'] as $k => $cur)
							{?>
                            	<div class="products_1_of_3">
                                    <h3><?php echo $cur->nombre; ?></h3>
                                    <img src="<? echo $cur->url_imagen ?>" alt="" />
                                    <p><?php echo $cur->descripcion1; ?></p>
                                    <div class="read_more"><a href="#">Ver</a></div>
                        		</div>
                            <?php }?>

                        
                    </div>
                </div>
            </div>
            <!----->            
        </div>
    </div>

   <?php include("user_footer.html"); ?>
   
</body>

</html>


