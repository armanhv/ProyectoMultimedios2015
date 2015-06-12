<?php include("../pages/admin_session.php"); ?>
<!DOCTYPE HTML>
<head>
    <title>Información Administrador</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/jquery.min.js"></script> 
</head>
<body>
    <?php include("../pages/admin_header.php"); ?>
    
    <div class="main">
        <div class="content">
            <div class="wrap">
                <div class="contact-form">
                    <h2>Informacíon de Administrador</h2>
                    <form method="post" class="left_form">
                        <div>
                            <span><label>Nombre:</label></span>
                            <span><input name="userName" value="Roberto" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Apellidos:</label></span>
                            <span><input name="userName" value="Lopez" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Email:</label></span>
                            <span><input name="userName" type="text" value="robertolopez@gmail.com" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Nueva Contraseña:</label></span>
                            <span><input name="userEmail" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Vuelva a digitar la Contraseña:</label></span>
                            <span><input name="userEmail" type="text" class="textbox"></span>
                        </div>
                        <div >
                            <span ><input type="submit" value="Actualizar Información" class="myButton"  ></span>
                        </div>

                    </form>


                    <div class="clear"></div>
                </div>               
            </div>
        </div> 
    </div>


    <?php include("../pages/admin_footer.php"); ?>
</body>
</html>

