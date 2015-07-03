<?php
include_once(".././Data/DataSitio.php");
include_once(".././Data/DataImagen.php");
include_once(".././Data/DataCoordenada.php");
include_once(".././Data/DataCaracteristica.php");
$idSitio = $_POST["idSitio"];

$da = new DataCoordenada();
$coordenada = $da->obtenerCoordenadas($idSitio);
?>

