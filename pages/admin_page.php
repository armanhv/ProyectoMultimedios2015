<?php include("../pages/admin_session.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Principal Administrador</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="shortcut icon" href="../images/icono.png"/> 
    <script src="../js/jquery.min.js"></script> 
</head>

<?php include("../pages/admin_header.php"); ?>

<body>

    
    
    <div class="slider">
        <div class="wrap">
            <div class="slider_top">         
                <div class="slider_left">
                    <div class="wmuSlider example2">
                        <div class="wmuSliderWrapper">
                            <article> <img src="../images/1.jpg" alt="" /> </article>
                            <article> <img src="../images/2.jpg" alt="" /> </article>
                            <article> <img src.="../images/3.jpg" alt="" />  </article>
                            <article> <img src="../images/4.jpg" alt="" />  </article>
                        </div>	
                        <script src="../js/jquery.wmuSlider.js"></script> 
                        <script type="text/javascript" src="../js/modernizr.custom.min.js"></script> 
                        <script>
                            $('.example2').wmuSlider({
                                touch: true,
                                animation: 'slide'
                            });

                        </script> 			
                    </div>
                </div>
                <div class="slider_right">
                    <div class="image group">                                        
                        <div class="grid span_2_of_3">
                            <h3> <span>INFOUCR</span></h3>
                            <p  align="justify">En este sitio web podrás encontrar las mejores sugerencias para tus vacaciones o días libres, 
                                para que disfrutes en familia, o bien te vayas de aventura, con un sin número de actividades 
                                al aire libre según tu gusto, pudiendo disfrutar de un día tranquilo o un día lleno de grandes aventuras.
                                Ingresa y encuentra las actividades y atractivos turísticos que mejor se adapten a tus gustos y preferencias! </p>

                        </div>
                    </div>

                </div>
                <div class="clear"></div>
                <br><br><br><br><br><br><br><br>
            </div>

        </div> 
    </div>
	


</body>
<?php include("../pages/admin_footer.php"); ?>
</html>