<?php

include_once '../../Data/ImagenesData.php';
include_once '../../Domain/Imagenes.php';
$idSitio=$_POST["idSitio"];
$url=$_POST["urlImagen"];
$imagenesData = new ImagenesData();
$imagen= $imagenesData->insertImagen($idSitio, new Imagenes(0, $url, 1));
if($imagen){
    echo 'Imagen ingresada correctamente';
} else {
    echo 'Error al ingresar la Imagen';
}