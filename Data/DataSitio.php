<?php
include_once ('conexion.php');
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
		
		if(!array_key_exists('estereotipo',$_SESSION) || empty($_SESSION['estereotipo'])) {//si no hay sesion estereotipo inicializa estereotipo
			$_SESSION['estereotipo'] = "" ;
		}
		
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
		if(!strcmp($_SESSION['estereotipo'],"")) {//si no hay sesion pone todos los sitios
			$_SESSION['sitios_estereotipo'] = $_SESSION['sitios'];
		}
		else{
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
	
	public function sitio_recomendados(){
		$this->load_sitios();
		
		$array_recomendado = array();
		
		foreach($_SESSION['sitios'] as $k => $cur)
		{	
				array_push($array_recomendado, $cur);
		}
		
		function sort_objects_by_total($a, $b) {
		if($a->visitas == $b->visitas){ return 0 ; }
			return ($a->visitas < $b->visitas) ? 1 : -1;
		}
		
		usort($array_recomendado, 'sort_objects_by_total');
		
		$_SESSION['sitios_recomendado'] = $array_recomendado;
	}	
	
	public function load_sitio($id){
		$db = new Conexion();
		$sql = $db->query("call sp_get_sitio('$id');");
		$datos = $db->recorrer($sql);
		
		$sitio = new Sitio($datos['idsitio'],$datos['nombre'],$datos['precio'],$datos['visitas'],$datos['visitas_estereotipo'],$datos['telefono'], $datos['direccion'], $datos['correo'], $datos['descripcion1'], $datos['descripcion2'], $datos['url_video'], $datos['tipo_sitio'], $datos['nombre_estereotipo'], $datos['provincia']);
		
		$_SESSION['sitio'] = serialize($sitio);
		$estereotipo = $_SESSION['estereotipo'];
		$db = new Conexion();
		$slq = $db->query("call sp_sitio_seleccionado('$id','$estereotipo');");
	}
}

/*
if (isset($_GET['func'])) {
	if (strcmp($_POST['func'], "estereotipo")){
		$_SESSION['estereotipo'] = $_POST['estereotipo'];

		}
  
}*/
/*
$da = new DataSitio();
//$da->load_sitios();
//$da->sitio_estereotipo();
$da->load_sitio(1);*/

?>