<?php

include_once '.././Data/DataSitio.php';
include_once '.././Domain/Sitio.php';
include_once '../Data/DataCoordenada.php';
include_once '../Domain/Coordenadas.php';
include_once './../Data/ImagenesData.php';
include_once './../Domain/Imagenes.php';
$id_stio = 0;
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


$sitioData = new DataSitio();
$sitio = new Sitio($id_stio, $nombre, $precio, $visitas, $visitas_estereotipo, $telefono, $direccion, $correo, $descripcion1, $descripcion2, $url_video, $tipo_sitio, $apto_para, $provincia, "");
//$result= $sitioData->getSitioPorId(13);
//echo $result->id_stio."  ".$result->nombre;
$result = $sitioData->insertSitio($sitio);
if ($result->id_stio != 0) {
    session_start(); 
    $_SESSION["idSitioAgregado"]=$result->id_stio;
    $da = new DataCoordenada();
    $coord = $da->insertCoordenadas($result->id_stio, new Coordenadas(0, $latitud, $longuitud));
    $imagenesData = new ImagenesData();
    $imagenesData->insertImagen($result->id_stio, new Imagenes(0, $ImagenP, 1));
    $imagenesData->insertImagen($result->id_stio, new Imagenes(0, $ImagenS1, 0));
    $imagenesData->insertImagen($result->id_stio, new Imagenes(0, $ImagenS2, 0));
    $imagenesData->insertImagen($result->id_stio, new Imagenes(0, $ImagenS3, 0));
    
    echo '<input id="txtIdSitio" type="hidden" value="' . $result->id_stio . '" >'
    . 'Sitio ingresado correctamente';
} else {
    echo 'Error al ingresar el sitio';
}
