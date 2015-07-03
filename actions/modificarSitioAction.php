<?php

include_once '.././Data/DataSitio.php';
include_once '.././Domain/Sitio.php';
include_once '../Data/DataCoordenada.php';
include_once '../Domain/Coordenadas.php';
include_once './../Data/ImagenesData.php';
include_once './../Domain/Imagenes.php';
session_start();
$id_stio = $_SESSION["idSitioAgregado"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$visitas = 0;
$visitas_estereotipo = 0;
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$correo = $_POST["email"];
$descripcion1 = $_POST["descripcionCorta"];
$descripcion2 = $_POST["descripcionLarga"];
$url_video = $_POST["urlVideo"];
$tipo_sitio = $_POST["tipoSitio"];
$apto_para = $_POST["estereotipo"];
$provincia = $_POST["provincia"];
$latitud = $_POST["latitud"];
$longuitud = $_POST["longitud"];
$ImagenP = $_POST["ImagenP"];
$ImagenS1 = $_POST["ImagenS1"];
$ImagenS2 = $_POST["ImagenS2"];
$ImagenS3 = $_POST["ImagenS3"];

$idImgP = $_SESSION["idIm0"];
$idImg1 = $_SESSION["idIm1"];
$idImg2 = $_SESSION["idIm2"];
$idImg3 = $_SESSION["idIm3"];


$sitioData = new DataSitio();
$sitio = new Sitio($id_stio, $nombre, $precio, $visitas, $visitas_estereotipo, $telefono, $direccion, $correo, $descripcion1, $descripcion2, $url_video, $tipo_sitio, $apto_para, $provincia, "");

$result = $sitioData->actualizarSitio($sitio);
if ($result->id_stio != 0) {
   
    $da = new DataCoordenada();
    $coord = $da->actualizarCoordenadas($result->id_stio, new Coordenadas(0, $latitud, $longuitud));
    $imagenesData = new ImagenesData();
    $imagenesData->updateImagen($result->id_stio, new Imagenes($idImgP, $ImagenP, 1));
    $imagenesData->updateImagen($result->id_stio, new Imagenes($idImg1, $ImagenS1, 0));
    $imagenesData->updateImagen($result->id_stio, new Imagenes($idImg2, $ImagenS2, 0));
    $imagenesData->updateImagen($result->id_stio, new Imagenes($idImg3, $ImagenS3, 0));

    echo '<input id="txtIdSitio" type="hidden" value="' . $result->id_stio . '" >'
    . 'Sitio ingresado correctamente';
} else {
    echo 'Error al modificar el sitio';
}
