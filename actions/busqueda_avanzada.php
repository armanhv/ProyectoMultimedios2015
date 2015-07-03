<?php
   session_start();
   include_once(".././Domain/Sitio.php");

function paginar($v, $l, $p) {
	
	$paginas = ceil(count($v) / $l);
	$inicio = ($p-1)*$l;
	$final = $p*$l;
	
		  for ($i=$inicio; $i<$final; $i++) {
			 if (isset($v[$i])){
				 $object = new stdClass();
				foreach ($v[$i] as $key => $value)
				{
					$object->$key = $value;
				}

				?><div class="products_1_of_3">
                                    <h3><?php echo $object->nombre; ?></h3>
                                    <img src="<? echo $object->url_imagen ?>" alt="" />
                                    <p align="justify"><?php echo $object->descripcion1; ?></p>
                                    <div class="read_more"><a href="vista_sitio.php?id=<?php echo $object->id_stio ?>">Ver</a></div>
                        		</div><?php
			 }
			 else 
				break;
		  }
		  echo  "</div>";
		  echo '<div class="section">';
		  if ($p>1){?>
			 &nbsp;&nbsp;<a href="javascript:;" onclick="cargar(<?php echo $_SESSION['p'] - 1 ; ?>);return false;"\>P&aacute;gina Anterior&nbsp;</a><?php }
		  for ($i=1; $i<=$paginas; $i++) {
			 if ($i == $p)
				echo "<strong>$i</strong>&nbsp;";
			 else 
				echo '<a href="javascript:;" onclick="cargar('.$i.');return false;"\>'.$i.'</a>&nbsp;';
		  }
		  
		  if ($p < $paginas){?>
			 &nbsp;&nbsp;<a href="javascript:;" onclick="cargar(<?php echo $_SESSION['p'] + 1 ; ?>);return false;"\>P&aacute;gina Siguiente&nbsp;</a>
             <?php }
		  echo '</div>';
	return;
   }  

   $vector = $_SESSION['sitios_estereotipo'];
      
	$_SESSION['p'] = $_GET['p'];
   paginar($vector, 20, $_SESSION['p']);
?>

