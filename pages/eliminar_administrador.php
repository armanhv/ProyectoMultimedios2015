<?php include("../pages/admin_session.php"); ?>
<?php 

$id= ""; 
$nombre  = "";
$correo = "";
$apellidos = "";
$usuario = "" ;

if(isset($_POST["buscar"]))
{
	try {
		$conexion=mysql_connect("163.178.173.144:3306", "multimedios", "multimedios") or die("No fue posible conectar con el servidor");
		mysql_select_db("multimedios_dds") or die("No fue posible selecionar la base de datos");
		$result=mysql_query("select * from admin where id='$_POST[id]' and admin_general=0",$conexion);
		while($row=mysql_fetch_array($result))
		{
			
			$nombre = $row['nombre'];
			$apellidos = $row['apellidos'];
			$correo = $row['correo'];
			$usuario= $row['nombre_usuario'];  
			$id= $row['id'];  
			
		}
		mysql_close($conexion);
		
	} catch (Exception $e) {
		echo "Caught Exception ('{$e->getMessage()}')\n{$e}\n";
	}

}
?>
<?php 
	if(isset($_POST["eliminar"]))
	{
		mysql_connect("163.178.173.144:3306", "multimedios", "multimedios") or die("No fue posible conectar con el servidor");
		
		mysql_select_db("multimedios_dds") or die("No fue posible selecionar la base de datos");
			
				$id = $_POST['id'];
				/*$nombre = $_POST['userName'];
				$apellidos = $_POST['userapellido'];
				$correo = $_POST['usercorreo'];
				$usuario = $_POST['user'];*/
				
		
		$query = "DELETE FROM admin where id = '$_POST[id]'";
		mysql_query($query);
		
		mysql_close();
	}


?> 
 
<!DOCTYPE HTML>
<head>
    <title>Eliminar Administrador</title>
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
                    <h2>Eliminar Administrador</h2>
                    <form method="post" class="left_form">
                    	<div>
                            <span><label>Identificación:</label></span>
                            <span><input name="id"  type="text" class="textbox" value="<?php echo $id?>"/></span>                            
                        </div>
                    	 <div >
                            <span ><input type="submit" value="Buscar" class="myButton" name="buscar"/></span>
                        </div>
                        <div>
                            <span><label>Nombre:</label></span>
                            <span><input name="userName"  type="text" class="textbox" value="<?php echo $nombre?>"></span>
                        </div>
                        <div>
                            <span><label>Apellidos:</label></span>
                            <span><input name="userapellido"  type="text" class="textbox" value="<?php echo $apellidos?>"></span>
                        </div>
                        <div>
                            <span><label>Email:</label></span>
                            <span><input name="usercorreo" type="text"  class="textbox" value="<?php echo $correo?>"></span>
                        </div>
                        <div>
                            <span><label>Usuario:</label></span>
                            <span><input name="user" type="text" class="textbox" value="<?php echo $usuario?>"></span>
                        </div>
                        <div >
                            <span ><input type="submit" value="Eliminar" class="myButton" name="eliminar"  ></span>
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

