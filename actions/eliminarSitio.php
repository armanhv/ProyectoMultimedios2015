<?php
//include("../pages/admin_session.php");
include_once '../Data/DataSitio.php';
include_once '../Data/ImagenesData.php';
include_once '../Data/DataCoordenada.php';
include_once '../Domain/Caracteristicas.php';
include_once '../Data/SitioCaracteristicasData.php';

//$idSitio = $_SESSION["idSitioAgregado"];
$idSitio=53;
$dataSitio = new DataSitio();
$sitio = $dataSitio->getSitioPorId($idSitio);
$imagenesD=new ImagenesData();

$imagenes= $imagenesD->getImagenesSitio($idSitio);
foreach ($imagenes as $img) {
    $imagenesD->deleteImagen($img->getId());
}

$dataCoordenadas=new DataCoordenada();
$coord=$dataCoordenadas->eliminarCoordenadas($idSitio);

$carData=new SitioCaracteristicasData();
$cars=$carData->getCaracteristicasSitioID($idSitio);
foreach ($cars as $caract) {
    $carData->deleteSitioCaracteristicas($caract->getId(), $idSitio);
}

$dataSitio=new DataSitio();
$dataSitio->deleteSitio($idSitio);

echo "El sitio se ha eliminado correctamente";

?>