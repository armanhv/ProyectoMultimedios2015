<?php include("../pages/user_session.php"); ?>
<!DOCTYPE HTML>
<head>
    <title>Acerca De</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script>
    <script
		src="http://maps.googleapis.com/maps/api/js">
	</script>
	
	<script type="text/javascript">
		var myCenter=new google.maps.LatLng(9.827356300000002,-83.86845949999997);
		
		function initialize()
		{
		var mapProp = {
		  center:myCenter,
		  zoom:5,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
		  };
		
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		
		var marker=new google.maps.Marker({
		  position:myCenter,
		  });
		
		marker.setMap(map);
		map.setZoom(9);
  		map.setCenter(marker.getPosition());
		/*map.
		streetViewControl:*/
		//navigator.geolocation.getCurrentPosition();
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
	</script> 
</head>
<body>
    <?php include("user_header.php"); ?> 
    <div class="main">
        <div class="content">
            <div class="wrap">
                <div class="contact_info">
                    <h2>Encuentranos en</h2>
                    <div id="googleMap" style="width:100%;height:250px;"></div>
                    <form action = "http://maps.google.com/maps" = "get" target = "_blank">
                        <input type="hidden" id="saddr"/> 
                        <input type = "hidden" name = "daddr" value = "Universidad de Costa Rica, Paraíso"/> 
                    	<input type="submit" value="¿Cómo llegar?" />
                    </form>
                    
                </div>
                <div class="company_address"></br></br>
                    <h2>Información de la Empresa:</h2>
                    <p>Curso Multimedios</p>
                    <p>Profesor: Ph.D. Arnoldo Rodríguez C.</p>
                    <p>Universidad de Costa Rica, Recinto Paraíso</p>
                    <p>Costa Rica</p>
                    <p>Teléfono (+506) 8599 8164</p>
                    <p>Email: <span>dalaian@outlook.com</span></p>
                </div>
                <div class="spa_products">
                    <h2>Desarrolladores</h2>
                    <div class="section group">
                        <div class="creditos">
                            <img src="../images/Desarrolladores/1.jpg" alt="" />
                            <h3>Armando Vega </h3>
                            
                        </div>
                        <div class="creditos">
                            <img src="../images/Desarrolladores/2.jpg" alt="" />
                            <h3>Diana Mendez</h3>                            
                        </div>
                        <div class="creditos">
                            <img src="../images/Desarrolladores/3.jpg" alt="" />
                            <h3>Dalaian Flores</h3>                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <?php include("user_footer.php"); ?>
    <script type="text/javascript">
		var x = document.getElementById("saddr");

			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
			}
		
		function showPosition(position) {
			x.value= position.coords.latitude + ","+ position.coords.longitude; 
		}
	</script> 
</body>
</html>

