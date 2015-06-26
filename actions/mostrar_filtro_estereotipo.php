<?php
/*
session_start;
include_once ('.././Data/DataSitio.php');

if (isset($_POST['func'])) {
	if (strcmp($_POST['func'], "estereotipo") == 0){
		$_SESSION['estereotipo'] = $_POST['estereotipo'];
		$da = new DataSitio();
		$da->sitio_estereotipo();
				
		$array_estereotipo = array();
		foreach($_SESSION['sitios_estereotipo'] as $k => $cur)
		{		
			if( isset($_POST['Alajuela']) && strcmp($cur->provincia, $_POST['Alajuela']) == 0){
					array_push($array_estereotipo, $cur);
			}elseif(isset($_POST['Cartago']) && strcmp($cur->provincia, $_POST['Cartago']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['SanJose']) && strcmp($cur->provincia, $_POST['SanJose']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['Heredia']) && strcmp($cur->provincia, $_POST['Heredia']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['Guanacaste']) && strcmp($cur->provincia, $_POST['Guanacaste']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['Limon']) && strcmp($cur->provincia, $_POST['Limon']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['Puntarenas']) && strcmp($cur->provincia, $_POST['Puntarenas']) == 0){
					array_push($array_estereotipo, $cur);
			}
		}	?>
        <!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script> 

    <link href="../segundoTemplate/css/bootstrap.css" rel='stylesheet' type='text/css' />

    <link href="../segundoTemplate/css/style2.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,600italic,700italic' rel='stylesheet' type='text/css'>		
</head>
		<body>    
    <div class="main">
        <div class="content">
            <div class="wrap">
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
</body>
	<?php } 
}
?>
*/
session_start();
include_once ('.././Data/DataSitio.php');

if (isset($_POST['func'])) {
	if (strcmp($_POST['func'], "estereotipo") == 0){
		$_SESSION['estereotipo'] = $_POST['estereotipo'];
		$da = new DataSitio();
		$da->sitio_estereotipo();
				
		$array_estereotipo = array();
		foreach($_SESSION['sitios_estereotipo'] as $k => $cur)
		{		
			if( isset($_POST['Alajuela']) && strcmp($cur->provincia, $_POST['Alajuela']) == 0){
					array_push($array_estereotipo, $cur);
			}elseif(isset($_POST['Cartago']) && strcmp($cur->provincia, $_POST['Cartago']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['SanJose']) && strcmp($cur->provincia, $_POST['SanJose']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['Heredia']) && strcmp($cur->provincia, $_POST['Heredia']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['Guanacaste']) && strcmp($cur->provincia, $_POST['Guanacaste']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['Limon']) && strcmp($cur->provincia, $_POST['Limon']) == 0){
					array_push($array_estereotipo, $cur);
			}
			elseif(isset($_POST['Puntarenas']) && strcmp($cur->provincia, $_POST['Puntarenas']) == 0){
					array_push($array_estereotipo, $cur);
			}
		}	
		
		foreach($_SESSION['sitios_estereotipo'] as $k => $cur)
							{?>
			<div class="products_1_of_3">
                                    <h3><?php echo $cur->nombre; ?></h3>
                                    <img src="<? echo $cur->url_imagen ?>" alt="" />
                                    <p><?php echo $cur->descripcion1; ?></p>
                                    <p>Provincia:  <?php echo $cur->provincia; ?></p>
                                    <div class="read_more"><a href="vista_sitio.php?id=<?php echo $cur->id_stio ?>">Ver</a></div>
                        		</div>
                            <?php }
	} 
}
?>
