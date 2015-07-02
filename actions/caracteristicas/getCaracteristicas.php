<?php
include_once '../../Data/DataCaracteristica.php';
$caracteristicasData = new DataCaracteristica();
$caracteristicas= $caracteristicasData->getCaracteristicas();
?>
<label>Características: </label> 
<select name="cbxCaracteristicas" id="cbxCaracteristicas"  multiple="multiple">
    <?php foreach ($caracteristicas as $currentCaracteristica) {
        ?>
        <option value="<?php echo $currentCaracteristica->getId(); ?>"><?php echo $currentCaracteristica->getNombre(); ?> </option>
        <?php }
    ?>
</select>
 <button  type="submit" onclick="agregarCaracteristicas()" >Agregar</button>  
 <select name="cbxCaracteristicasAgregadas" id="cbxCaracteristicasAgregadas" multiple="multiple" >
   
</select>
 <button  type="submit" onclick="removerValores()" >Remover</button>  
