<?php include("../pages/user_session.php"); ?>
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
    <?php include("user_header.php"); 
	include_once(".././Data/DataSitio.php");
	$da = new DataSitio();
	$da->sitio_recomendados();
	?>

    <div class="content">	 
        <div class="categories">
            <ul>
                <li class="cate">Tipo de Busqueda</li>
                <li class="active"><a href="actividades_atractivos.php">Lo mas visitados</a></li>
                <li><a href="busqueda_avanzada.php">Busqueda Avanzada</a></li>
                <li><a href="busqueda_estereotipo.php">Busqueda por Estereotipos</a></li>                
            </ul>				
        </div>
    </div>
    <div class="main">
        <div class="content">
            <div class="wrap">
               
                

                <div class="spa_products">
                    <h2>Los mas visitados</h2>
                    <div class="section group">                        
                           <?php foreach($_SESSION['sitios_recomendado'] as $k => $cur)
							{?>
                            	<div class="products_1_of_3">
                                    <h3><?php echo $cur->nombre; ?></h3>
                                    <img src="<? echo $cur->url_imagen ?>" alt="" />
                                    <p><?php echo $cur->descripcion1; ?></p>
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

