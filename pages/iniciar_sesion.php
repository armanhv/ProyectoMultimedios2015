<?php include("../pages/user_session.php"); ?>
<!DOCTYPE HTML>
<head>
    <title>Iniciar Sesión</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="shortcut icon" href="../images/icono.png"/> 
    <script src="../js/jquery.min.js"></script> 
</head>
<body>
    <?php include("user_header.php"); ?>
    
    <div class="main">
        <div class="content">
            <div class="wrap">
                <div class="contact-form">
                    <h2>Iniciar Sesión</h2>
                    <form method="post" action="../actions/iniciar_sesion.php" class="left_form">
                        <div>
                            <span><label>Nombre de Usuario</label></span>
                            <span><input name="userName" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Contraseña</label></span>
                            <span><input name="userPassword" type="password" class="textbox"></span>
                        </div>
                        <div>
                        	<span><label style="color:#F00" id="error">
							<?php print ( isset($_SESSION['failure_message']) ? $_SESSION['failure_message'] : '' ); ?></label></span>
                            <?php unset($_SESSION['failure_message']);?>
                        </div>
                         <div >
                        <span ><input type="submit" value="Iniciar Sesión" class="myButton" onClick="location.href = 'principal_administrador.html'" ></span>
                    </div>
                    </form>
                   
                   
                    <div class="clear"></div>
                </div>               
            </div>
        </div> 
    </div>

    <?php include("user_footer.php"); ?>
</body>
</html>

