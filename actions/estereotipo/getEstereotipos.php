<?php
include_once '../../Data/EstereotipoData.php';
$estereotipoData = new EstereotipoData();
$estereotipos= $estereotipoData->getEstereotipos();
?>
<label>Apto para: </label> 
<select name="cbxEstereotipo" id="cbxEstereotipo" >
    <?php foreach ($estereotipos as $currentEstereotipo) {
        ?>
        <option value="<?php echo $currentEstereotipo->getId(); ?>"><?php echo $currentEstereotipo->getNombreEstereotipo(); ?> </option>
        <?php }
    ?>
</select>
