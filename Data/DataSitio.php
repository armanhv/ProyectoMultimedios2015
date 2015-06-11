<?php
include ('conexion.php');
include_once ('.././Domain/Sitio.php');

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
	
	public function sitio_estereotipo(){
		$this->load_sitios();
		if(!array_key_exists('estereotipo',$_SESSION) || empty($_SESSION['estereotipo'])) {//si no hay sesion estereotipo pone tranquilo
			$_SESSION['estereotipo'] = "tranquilo" ;
		}
		
		$array_estereotipo = array();
		
		foreach($_SESSION['sitios'] as $k => $cur)
		{	
			if(strcmp($cur->apto_para, $_SESSION['estereotipo']) == 0){
				array_push($array_estereotipo, $cur);
			}
		}
				
		function cmp($a, $b)
		{
			return strcmp($a->visitas_estereotipo, $b->visitas_estereotipo);
		}
		
		usort($array_estereotipo, "cmp");
		
		$_SESSION['sitios_estereotipo'] = $array_estereotipo;
		
	}
	
	
}

if (isset($_GET['func'])) {
	if (strcmp($_POST['func'], "estereotipo")){
		$_SESSION['estereotipo'] = $_POST['estereotipo'];

		}
  
}

/*$da = new DataSitio();
$da->load_sitios();
$da->sitio_estereotipo();*/

?>