<?php
include_once '../../Data/ProvinciasData.php';
$provinciasData = new ProvinciasData();
$provincias = $provinciasData->getProvincias();
?>
<label>Provincia: </label> 
<select name="cbxProvincias" id="cbxProvincias" >
    <?php foreach ($provincias as $currentProvincia) {
        ?>
        <option value="<?php echo $currentProvincia->getIdProvincia(); ?>"><?php echo $currentProvincia->getNombreProvincia(); ?> </option>
        <?php }
    ?>
</select>
