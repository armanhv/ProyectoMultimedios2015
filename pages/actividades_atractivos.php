<?php include("../pages/user_session.php"); 

?>
<!DOCTYPE HTML>
<head>
    <title>Los más visitados</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="shortcut icon" href="../images/icono.png"/> 
    <script src="../js/jquery.min.js"></script> 

    <!-- Para el template 2!-->
    <link href="../segundoTemplate/css/style2.css" rel="stylesheet" type="text/css" media="all" />
   
    <script type="text/javascript">
    	$(document).ready(function(){
			cargar(1);			
		});
		 
		// la funcion esta fuera del scope de jQuery, es creado el objeto en tu 'document'
		function cargar(pagina) {
		   $.ajax({
						url:   '../actions/busqueda_visitados.php?p='+pagina,
						type:  'get',
						success: function (data) {
							$('#lista').html(data);
						  },
						error: function(jqXHR, textStatus, error) {
							alert( "error: " + jqXHR.responseText);
						  },
						beforeSend: function () {
								$("#lista").html("<img src='../images/loading.gif' alt='' />");
						  }
						});
		}
	</script>
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
                </br>
                    <h2>Los mas visitados</h2>
                    <div class="section group" id="lista">                        
                        
                </div>
            </div>
            <!----->            
        </div>
    </div>

        <?php include("user_footer.php"); ?>
</body>
</html>

