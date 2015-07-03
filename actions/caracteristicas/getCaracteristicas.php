<?php
include_once '../../Data/CaracteristicasData.php';
$caracteristicasData = new CaracteristicasData();
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
 <button  type="submit" onclick="addCaracteristicas()" >Agregar</button>  
 <select name="cbxCaracteristicasAgregadas" id="cbxCaracteristicasAgregadas" multiple="multiple" >
   
</select>
 <button  type="submit" onclick="removeCaracteristicas()" >Remover</button>  
