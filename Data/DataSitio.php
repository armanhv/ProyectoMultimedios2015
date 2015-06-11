<?php
include ('conexion.php');
include ('.././Domain/Sitio.php');

class DataSitio{
	
	public function DataSitio(){
	}
	
	public function result_to_sitio($resultados) {
		$Sitio;
		if ($resultados !=NULL) {
			$Sitio = new Sitio($resultados['idsitio'], $resultados['nombre'], $resultados['precio'], $resultados['visitas'], $resultados['visitas_estereotipo'], $resultados['telefono'], $resultados['direccion'], $resultados['correo'], $resultados['descripcion1'], $resultados['descripcion2'], $resultados['url_video'], $resultados['tipo_sitio'], $resultados['nombre_estereotipo'], $resultados['provincia'], $resultados['url_imagen']); 

		}
		return $Sitio;
	}
	
	public function load_sitios(){
		$db = new Conexion();
		$result = $db->query("call sp_get_sitios();");
		$arraySitio = array();
		
		while ($fila = mysqli_fetch_array($result)){
			array_push($arraySitio, $this->result_to_sitio($fila));;
		}
		mysqli_free_result($result);
		mysqli_close($db);
		
		$_SESSION['sitios'] = $arraySitio;
		
		/* mostrar registros
		foreach($arraySitio as $k => $cur)
		{
			echo $cur->nombre;
			echo ',';
		}*/
	}
	
	
}
/*
$da = new DataSitio();
$da->load_sitios();*/

?>