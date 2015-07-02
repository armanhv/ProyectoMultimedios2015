
<?php

include_once ('.././Data/DataSitio.php');
/*
if (isset($_POST['func'])) {
if (strcmp($_POST['func'], "avanzada") == 0){*/
		$da = new DataSitio();
		$da->load_sitios();	
			//$arrayAvanzada = array();

		//	$puntos = array();
		
		//$dc = new DataCaracteristica();
		
		//arreglo el arreglo de la palabra
		
		//if( strcmp($_POST['palabras'],"") != 0){
			echo count($_SESSION['sitios']);
			$a = "hola me llamo de los";
			$palabras = preg_split("/[\s,]+/", $a);
			
			//paso las palabras de la búsqueda a array
			foreach($palabras as &$valor){//quito palabras innecesarias
				if(($key = array_search("de", $palabras)) !== false || ($key = array_search("por", $palabras)) !== false || 
					($key = array_search("para", $palabras)) !== false || ($key = array_search("con", $palabras)) !== false || 
					($key = array_search("la", $palabras)) !== false || ($key = array_search("el", $palabras)) !== false || 
					($key = array_search("los", $palabras)) !== false || ($key = array_search("las", $palabras)) !== false || 
					($key = array_search("se", $palabras)) !== false) {
					unset($palabras[$key]);
				}
			}//fin arreglo*/
	
			print_r($claves);
		
			echo count($_SESSION['sitios']);
			foreach($_SESSION['sitios'] as $k => $cur)
			{		
			}
				/*$elemento = array($cur->id, 0);
				$cantidadPuntos = 0;
				
				foreach($palabras as $palabra){
					$percent;
					$palabrasSitio = preg_split("/[\s,]+/", $cur->nombre);
					foreach($palabrasSitio as $palabraSitio){//verifico por nombre
						similar_text($palabra, $palabraSitio, $percent); 
						if($percent = 100){
							$cantidadPuntos += 1.2;
						}
						elseif($percent > 91){
							$cantidadPuntos += 0.9;
						}
						elseif( strlen($palabraSitio) == 3 && $percent >= 60){
							$cantidadPuntos += 0.3;
						}
						elseif( strlen($palabraSitio) == 4 && $percent >= 75){
							$cantidadPuntos += 0.4;
						}
						elseif( strlen($palabraSitio) == 5 && $percent >= 80){
							$cantidadPuntos += 0.5;
						}
					}//fin for verificar por nombre
					
					$palabrasDesc = preg_split("/[\s,]+/", $cur->descripcion1);
					foreach($palabrasDesc as $palabraDesc){//verifico por descripción
						similar_text($palabra, $palabraDesc, $percent); 
						if($percent = 100){
							$cantidadPuntos += 1.2;
						}
						elseif($percent > 91){
							$cantidadPuntos += 0.9;
						}
						elseif(count($palabrasDesc) == 3 && $percent >= 60){
							$cantidadPuntos += 0.3;
						}
						elseif(count($palabrasDesc) == 4 && $percent >= 75){
							$cantidadPuntos += 0.4;
						}
						elseif(count($palabrasDesc) == 5 && $percent >= 80){
							$cantidadPuntos += 0.5;
						}
					}//fin verificarpor descripción
					
				}//fin for palabras
				
				
				$dc->get_caracteristicas($cur->id);
				
				foreach($_SESSION['caracteristicas'] as $caracteristica){
					
					if( isset($_POST['Familiar']) && strcmp($caracteristica, $_POST['Familiar']) == 0){
						$cantidadPuntos += 1;
					}elseif( isset($_POST['Tour']) && strcmp($caracteristica, $_POST['Tour']) == 0){
						$cantidadPuntos += 1;
					}
					elseif( isset($_POST['Montania']) && strcmp($caracteristica, $_POST['Montania']) == 0){
						$cantidadPuntos += 1;
					}
					elseif( isset($_POST['Deporte']) && strcmp($caracteristica, $_POST['Deporte']) == 0){
						$cantidadPuntos += 1;
					}
					elseif( isset($_POST['Restaurante']) && strcmp($caracteristica, $_POST['Restaurante']) == 0){
						$cantidadPuntos += 1;
					}
					elseif( isset($_POST['Playa']) && strcmp($caracteristica, $_POST['Playa']) == 0){
						$cantidadPuntos += 1;
					}
					elseif( isset($_POST['FacilAcceso']) && strcmp($caracteristica, $_POST['FacilAcceso']) == 0){
						$cantidadPuntos += 1;
					}
					elseif( isset($_POST['Cultural']) && strcmp($caracteristica, $_POST['Cultural']) == 0){
						$cantidadPuntos += 1;
					}
				}//fin características
				
				if( isset($_POST['provincia']) && strcmp($cur->provincia, $_POST['provincia']) == 0){
						$cantidadPuntos += 1.5;
				}//if provincia
				
				$precio = $_POST['precio'];
				switch ($precio){
					case 1:
						if(0 < $cur->precio && $cur->precio <= 10000){
							$cantidadPuntos += 1;
						}
						break;
					case 2:
						if(10000 < $cur->precio && $cur->precio <= 80000){
							$cantidadPuntos += 1;
						}
						break;
					case 3:
						if(80000 < $cur->precio && $cur->precio <= 150000){
							$cantidadPuntos += 1;
						}
						break;
					case 4:
						if(150000 < $cur->precio && $cur->precio <= 500000){
							$cantidadPuntos += 1;
						}
						break;
					case 5:
						if(500000 < $cur->precio && $cur->precio <= 1000000){
							$cantidadPuntos += 1;
						}
						break;
					case 6:
						if(1000000 < $cur->precio){
							$cantidadPuntos += 1;
						}
						break;				
					default:
						break;                   	
				}
				
				if($cantidadPuntos != 0){
					$elemento[1] = $cantidadPuntos;
					array_push($array_avanzada, $elemento);
				}
				
			}//fin foreach sitio	
			/*
			$price = array();
			foreach ($array_avanzada as $key => $row)
			{
				$price[$key] = $row[1];
			}
			array_multisort($price, SORT_DESC, $array_avanzada);
			var_dump($price);
		 
			/*
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
*/
?>