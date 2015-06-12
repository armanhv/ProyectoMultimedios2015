<?php include("../pages/user_session.php"); ?>
<!DOCTYPE HTML>
<head>
    <title>Proyecto de Multimedios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/sticky_menu.css" rel="stylesheet" type="text/css"/>
    
    <!-- Para el template 2!-->
    <link href="../segundoTemplate/css/bootstrap.css" rel='stylesheet' type='text/css' />

    <link href="../segundoTemplate/css/style2.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,600italic,700italic' rel='stylesheet' type='text/css'>
    
    <script src="../js/jquery.min.js"></script> 
    
	<script type="text/javascript">
		$(document).ready(function() {
			$('#cssmenu').addClass('no_sticky');
		var stickyNavTop = $('#cssmenu').offset().top;
		var stickyNav = function(){
		var scrollTop = $(window).scrollTop();
			  
		if (scrollTop > stickyNavTop) { 
			$('#cssmenu').addClass('sticky');
		} else {
			$('#cssmenu').removeClass('sticky'); 
		}
		};
		 
		stickyNav();
		 
		$(window).scroll(function() {
			stickyNav();
		});
		});
    </script>
</head>
<body>
<a href="top"/>
    <?php include("user_header.php"); 
			include_once(".././Data/DataSitio.php");
			include_once(".././Data/DataImagen.php");
			$da = new DataSitio();
			$da->load_sitio($_GET['id']);
			$sitio = unserialize($_SESSION['sitio']);
			$da = new DataImagen();
			$da->get_images($_GET['id']);
	?>
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
              <div class="slider_left">
                    <div class="image group">                                        
                        <div class="grid span_2_of_3">
                            
                            <h3> <span> <?php echo $sitio->nombre; ?></span></h3>
                            <p  align="justify">
                                <?php echo $sitio->descripcion2; ?>
                            </p>
                        </div>
                    </div>

                </div>				
                <div class="slider_right">
                    <div class="image group">                                        
                        <div class="grid span_2_of_3">
                            <h3>Tipo de Visualización</h3>
                            <div class="slider_bottom">	 
        <div class="categories">
            <ul>
                  <li><a href="vistaTexto.html"><img src="../images/tipoVisualizacion/texto.png"   alt="" height="38" width="38"/>Texto</a></li>
              <li><a href="vista_video.html"> <img src="../images/tipoVisualizacion/video.png"/ height="38" width="38">Video</a></li>
                  <li><a href="vista_combinado.html"><img src="../images/tipoVisualizacion/combinado.png"/ height="38" width="38">Combinado</a></li>                
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
                    
                    	<?php foreach($_SESSION['images'] as $k => $cur)
							{?>
                            	<div class="creditos">
                                    <img src="<? echo $cur->url_imagen ?>" alt="" />
                        		</div>
                        <?php }?> 
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
                        <div class="map">
                          <iframe width="100%" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
                        </div>
                    </div>
                    <div class="company_address">
                        <h2>Información de Contacto:</h2>
                        <p>Cuenta con:</p>
                        <p>      Facil Acceso, Cultural,  Familiar</p>
                        <p>Apto para: <?php echo $sitio->apto_para; ?></p>
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
</body>
</html>

