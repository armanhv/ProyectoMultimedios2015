<?php include("../pages/admin_session.php"); ?>
<?php 
mysql_connect("163.178.173.144:3306", "multimedios", "multimedios") or die("No fue posible conectar con el servidor");

mysql_select_db("multimedios_dds") or die("No fue posible selecionar la base de datos");


if($_POST["insertar"])

	{
		$nombre = $_POST['userName'];
		$apellidos = $_POST['userapellido'];
		$correo = $_POST['usercorreo'];
		$usuario= $_POST['user'];  
		$contraseña= $_POST['usercontra'];  

$query = "insert into admin values(null,'$usuario','$contraseña','$correo','$nombre','$apellidos','0')";

mysql_query($query);

mysql_close();
//echo  "<script>alert('Administrador Ingresado Exitosamente!!')</script>";

	}
 ?>
 
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
                    <h2>Nuevo de Administrador</h2>
                    <form method="post" class="left_form">
                        <div>
                            <span><label>Nombre:</label></span>
                            <span><input name="userName"  type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Apellidos:</label></span>
                            <span><input name="userapellido"  type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Email:</label></span>
                            <span><input name="usercorreo" type="text"  class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Usuario:</label></span>
                            <span><input name="user" type="password" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Contraseña:</label></span>
                            <span><input name="usercontra" type="password" class="textbox" ></span>
                        </div>
                        <div >
                            <span ><input type="submit" value="Agregar Administrador" class="myButton" name="insertar"  ></span>
                        </div>
                        <div>
                         
                           
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

