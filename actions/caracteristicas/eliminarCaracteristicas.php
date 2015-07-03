<?php
include_once '../../Data/SitioCaracteristicasData.php';
$sitioCaracteristicasData = new SitioCaracteristicasData();
session_start(); 
$idSitio=$_SESSION["idSitioAgregado"];
$idCaracteristica=$_POST["idCaracteristica"];
$caracteristicas= $sitioCaracteristicasData->deleteSitioCaracteristicas($idCaracteristica, $idSitio);
if($caracteristicas){
    echo 'true';
}else{
    echo 'false';
}
?>
