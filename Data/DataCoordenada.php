<?php

include_once ('conexion.php');
include_once ('.././Domain/Coordenadas.php');
	
class DataCoordenada{
	
	public function get_coordenadas($id){
		$db = new Conexion();
		$sql = $db->query("call sp_get_coordenada('$id');");
		$datos = $db->recorrer($sql);
		
		$coordenada = new Coordenadas($datos['idSitio'], $datos['latitud'], $datos['longitud']); 
		$_SESSION['coordenada'] = serialize($coordenada);	
	}
	
}

/*$as = new DataCoordenada();
$as->get_coordenadas(1);
echo $_SESSION['coordenada'];
*/
?>