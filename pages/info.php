<?php
mysql_connect("163.178.173.144:3306", "multimedios", "multimedios") or die("No fue posible conectar con el servidor");

mysql_select_db("multimedios_dds") or die("No fue posible selecionar la base de datos");


if($_POST["modificar"])

	{
		//$id=$admin->id;
		$password = $_POST['userEmail10'];  
		$id= $_POST['userName11']; 
		$nombre=$_POST['userName']; 
		$apellidos=$_POST['userapellidos']; 
		$correo=$_POST['usercorreo']; 
		


$query = "UPDATE admin set password= '$password',nombre='$nombre',apellidos='$apellidos',correo='$correo' where id ='$id'";

mysql_query($query);

mysql_close();

	}
 ?>