<?php

include_once ('conexion.php');
include_once ('.././Domain/Imagen.php');
	
class DataImagen{
		
	public function result_to_imagen($resultados) {
		$image;
		if ($resultados !=NULL) {
			$image = new Imagen($resultados['idimagenes'], $resultados['url_imagen']); 
		}
		return $image;
	}
	
	public function get_images($id){
		$db = new Conexion();
		$result = $db->query("call sp_get_images('$id');");
		$arrayImage = array();
		
		while ($fila = mysqli_fetch_array($result)){
			array_push($arrayImage, $this->result_to_imagen($fila));;
		}
		
		mysqli_free_result($result);
		mysqli_close($db);
		
		$_SESSION['images'] = $arrayImage;
		
		/*foreach($arrayImage as $k => $cur)
		{
			echo $cur->url_imagen;
			echo ',';
		}*/
	}
        
        public function obtenerImages($id){
		$db = new Conexion();
		$result = $db->query("call sp_get_images('$id');");
		$arrayImage = array();
		
		while ($fila = mysqli_fetch_array($result)){
			array_push($arrayImage, $this->result_to_imagen($fila));;
		}		
		mysqli_free_result($result);
		mysqli_close($db);		
		return $arrayImage;
	}
	
}

?>