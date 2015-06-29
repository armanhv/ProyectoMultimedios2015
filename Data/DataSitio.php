<?php
include_once ('conexion.php');
include_once ('.././Domain/Sitio.php');

class DataSitio{
	
	public function DataSitio(){
	}
	
	public function result_to_sitio($resultados) {
		$Sitio;
		if ($resultados !=NULL) {
			$Sitio = new Sitio($resultados['idsitio'], $resultados['nombre'], $resultados['precio'], $resultados['visitas'], $resultados['visitas_estereotipo'], $resultados['telefono'], $resultados['direccion'], $resultados['correo'], $resultados['descripcion1'], $resultados['descripcion2'], $resultados['url_video'], $resultados['tipo_sitio'], $resultados['nombre_estereotipo'], $resultados['nombre_provincia'], $resultados['url_imagen']); 

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
		
		$sitio = new Sitio($datos['idsitio'],$datos['nombre'],$datos['precio'],$datos['visitas'],$datos['visitas_estereotipo'],$datos['telefono'], $datos['direccion'], $datos['correo'], $datos['descripcion1'], $datos['descripcion2'], $datos['url_video'], $datos['tipo_sitio'], $datos['nombre_estereotipo'], $datos['nombre_provincia']);
		
		$_SESSION['sitio'] = serialize($sitio);
		$estereotipo = $_SESSION['estereotipo'];
		$db = new Conexion();
		$slq = $db->query("call sp_sitio_seleccionado('$id','$estereotipo');");
	}
}

?>

<?php

if (isset($_POST['func'])) {
	if (strcmp($_POST['func'], "estereotipo") == 0){
		$_SESSION['estereotipo'] = $_POST['estereotipo'];
		$da = new DataSitio();
		$da->sitio_estereotipo();
				
		$array_estereotipo = array();
		if(!isset($_POST['Alajuela']) && !isset($_POST['Cartago']) && !isset($_POST['SanJose']) && !isset($_POST['Heredia']) &&
		 !isset($_POST['Guanacaste']) && !isset($_POST['Limon']) && !isset($_POST['Puntarenas'])){
		 	$array_estereotipo = $_SESSION['sitios_estereotipo'];
		 }
		 else{
			foreach($_SESSION['sitios_estereotipo'] as $k => $cur)
			{					
				if( isset($_POST['Alajuela']) && strcmp($cur->provincia, $_POST['Alajuela']) == 0){
						array_push($array_estereotipo, $cur);
				}elseif(isset($_POST['Cartago']) && strcmp($cur->provincia, $_POST['Cartago']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['SanJose']) && strcmp($cur->provincia, $_POST['SanJose']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['Heredia']) && strcmp($cur->provincia, $_POST['Heredia']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['Guanacaste']) && strcmp($cur->provincia, $_POST['Guanacaste']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['Limon']) && strcmp($cur->provincia, $_POST['Limon']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['Puntarenas']) && strcmp($cur->provincia, $_POST['Puntarenas']) == 0){
						array_push($array_estereotipo, $cur);
				}
			}	
		 }
			
		if(count($array_estereotipo) == 0){
			echo "No existen registros con esos criterios";
		}else{
			foreach($array_estereotipo as $k => $cur){?>
				<div class="products_1_of_3">
                                    <h3><?php echo $cur->nombre; ?></h3>
                                    <img src="<? echo $cur->url_imagen ?>" alt="" />
                                    <p><?php echo $cur->descripcion1; ?></p>
                                    <p>Provincia:  <?php echo $cur->provincia; ?></p>
                                    <div class="read_more"><a href="vista_sitio.php?id=<?php echo $cur->id_stio ?>">Ver</a></div>
                        		</div>
                            <?php }
		}
	} 
	
	if (strcmp($_POST['func'], "avanzada") == 0){
		$da = new DataSitio();
		$da->sitio_estereotipo();
				
		$array_estereotipo = array();
		$puntos = array();
		
			foreach($_SESSION['sitios'] as $k => $cur)
			{					
				$palabras = preg_split("/[\s,]+/", $_POST['palabras']);
				foreach($palabras as $palabra){
					
				}
				
				if ($cur->nombre)
				
				if( isset($_POST['Alajuela']) && strcmp($cur->provincia, $_POST['Alajuela']) == 0){
						array_push($array_estereotipo, $cur);
				}elseif(isset($_POST['Cartago']) && strcmp($cur->provincia, $_POST['Cartago']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['SanJose']) && strcmp($cur->provincia, $_POST['SanJose']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['Heredia']) && strcmp($cur->provincia, $_POST['Heredia']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['Guanacaste']) && strcmp($cur->provincia, $_POST['Guanacaste']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['Limon']) && strcmp($cur->provincia, $_POST['Limon']) == 0){
						array_push($array_estereotipo, $cur);
				}
				elseif(isset($_POST['Puntarenas']) && strcmp($cur->provincia, $_POST['Puntarenas']) == 0){
						array_push($array_estereotipo, $cur);
				}
			}	
		 
			
		if(count($array_estereotipo) == 0){
			echo "No existen registros con esos criterios";
		}else{
			foreach($array_estereotipo as $k => $cur){?>
				<div class="products_1_of_3">
                                    <h3><?php echo $cur->nombre; ?></h3>
                                    <img src="<? echo $cur->url_imagen ?>" alt="" />
                                    <p><?php echo $cur->descripcion1; ?></p>
                                    <p>Provincia:  <?php echo $cur->provincia; ?></p>
                                    <div class="read_more"><a href="vista_sitio.php?id=<?php echo $cur->id_stio ?>">Ver</a></div>
                        		</div>
                            <?php }
		}
	} 
}
?>
<?php
/*
$da = new DataSitio();
//$da->load_sitios();
//$da->sitio_estereotipo();
$da->load_sitio(1);*/

?>