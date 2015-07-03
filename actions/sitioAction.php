<?php

include_once '.././Data/DataSitio.php';
include_once '.././Domain/Sitio.php';
$sitioData = new DataSitio();
$sitio = new Sitio(0, "Prueba", 50000, 0, 0, "854584554", "cartago", "prueba@gmail.com",  "esta es una prueba", "esta es la misma prueba", "SypRXOHzTTQ", 1, 1, 1,"");
echo $sitioData->getIdSitio("Prueba");
//$result = $sitioData->insertSitio($sitio);
//
//if ($result) {
//    echo '<span class="correcto">Cliente ingresado correctamente</span>';
//} else {
//    echo '<span class="incorrecto">Error al ingresar el cliente</span>';
//}
