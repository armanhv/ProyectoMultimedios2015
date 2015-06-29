<?php

include_once ('conexion.php');
	
class DataCaracteristica{

	public function result_to_caracteristica($resultados) {
		$image;
		if ($resultados !=NULL) {
			$image = $resultados['nombre']; 
		}
		return $image;
	}
	
	public function get_caracteristicas($id){
		$db = new Conexion();
		$result = $db->query("call sp_get_caracteristicas('$id');");
		$arrayCaracteristica = array();
		
		while ($fila = mysqli_fetch_array($result)){
			array_push($arrayCaracteristica, $this->result_to_caracteristica($fila));;
		}
		
		mysqli_free_result($result);
		mysqli_close($db);
		
		$_SESSION['caracteristicas'] = $arrayCaracteristica;
		
		/*foreach($arrayImage as $k => $cur)
		{
			echo $cur->url_imagen;
			echo ',';
		}*/
	}
	
	
	
	
}

?>