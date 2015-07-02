<?php
include('../Data/DataAdmin.php');

$data = new DataAdmin($_POST['userName'],$_POST['userPassword']);
$data->verify_admin();

session_start();

if( !isset($_SESSION['admin'] ))
{
	header ('Location: ../pages/iniciar_sesion.php');
	$_SESSION['failure_message'] = "*Nombre de usuario o contraseña son incorrectos";
}
else{
	header ('Location: ../pages/admin_page.php');
}

?>