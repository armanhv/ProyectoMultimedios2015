<?php

include_once '.././Data/DataSitio.php';
include_once '.././Domain/Sitio.php';

$id_stio=0;
$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$visitas=0;
$visitas_estereotipo=0;
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];
$correo=$_POST["email"];
$descripcion1=$_POST["descripcionCorta"];
$descripcion2=$_POST["descripcionLarga"];
$url_video=$_POST["urlVideo"];
$tipo_sitio=$_POST["tipoSitio"];
$apto_para=$_POST["estereotipo"];
$provincia=$_POST["provincia"];
$sitioData = new DataSitio();
$sitio = new Sitio($id_stio, $nombre, $precio, $visitas, $visitas_estereotipo, $telefono, $direccion,
        $correo, $descripcion1, $descripcion2, $url_video, $tipo_sitio, $apto_para,$provincia, "");
//echo $sitioData->getIdSitio("Prueba");
$result = $sitioData->insertSitio($sitio);
if($result->id_stio!=0){
    echo '<span class="correcto">Sitio ingresado correctamente</span>';
} else {
    echo '<span class="incorrecto">Error al ingresar el sitio</span>';
}
