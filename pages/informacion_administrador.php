<?php include("../pages/admin_session.php"); ?>
<?php 



if(isset($_POST["modificar"]))
	{
		
	mysql_connect("163.178.173.144:3306", "multimedios", "multimedios") or die("No fue posible conectar con el servidor");
	mysql_select_db("multimedios_dds") or die("No fue posible selecionar la base de datos");

		$id = $_POST['id']; 
		$nombre = $_POST['userName']; 
		$apellidos = $_POST['userapellidos'];
		$password = $_POST['userEmail10'];  
		 
		$correo = $_POST['usercorreo']; 
		
		$query = "UPDATE admin set password = '$password',nombre ='$nombre',apellidos ='$apellidos',correo ='$correo' where id ='$id'";
	
		mysql_query($query);
	
		mysql_close();
	}
 ?>
 
<!DOCTYPE HTML>
<head>
    <title>Información Administrador</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="shortcut icon" href="../images/icono.png"/> 
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
                    <input type="hidden" name="id" value="<?php echo $admin->id ?>"/>
                        <div>
                            <span><label>Nombre:</label></span>
                            <span><input name="userName" value="<?php echo $admin->nombre ?>" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Apellidos:</label></span>
                            <span><input name="userapellidos" value="<?php echo $admin->apellidos ?>" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Email:</label></span>
                            <span><input name="usercorreo" type="text" value="<?php echo $admin->correo ?>" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Nueva Contraseña:</label></span>
                            <span><input name="userEmail10" type="password" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Vuelva a digitar la Contraseña:</label></span>
                            <span><input name="userEmail10" type="password" class="textbox" ></span>
                        </div>
                        <div >
                            <span ><input type="submit" value="Actualizar Información" class="myButton" name="modificar"  ></span>
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

