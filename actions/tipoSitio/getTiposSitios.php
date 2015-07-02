<?php
include_once '../../Data/TipoSitioData.php';
$tipoSitioData = new TipoSitioData();
$tiposSitios= $tipoSitioData->getTipoSitios();
?>
<label>Tipo: </label> 
<select name="cbxTipoSitio" id="cbxTipoSitio" >
    <?php foreach ($tiposSitios as $currentSitios) {
        ?>
        <option value="<?php echo $currentSitios->getId(); ?>"><?php echo $currentSitios->getNombre(); ?> </option>
        <?php }
    ?>
</select>
