<?php
include_once ('.././Data/DataSitio.php');

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
}
?>