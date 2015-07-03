<?php

include_once ('conexion.php');
include_once  './../Domain/Imagenes.php';

class ImagenesData {

    public function ImagenesData() {
        
    }

    public function insertImagen($idSitio, $imagenes) {
         $db = new Conexion();
        $query = "insert into imagenes (id_sitio,url_imagen,principal) values (" . $idSitio
                . ", '" . $imagenes->getUrl() . "', " . $imagenes->getPrincipal() . ");";
        
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateImagen($idSitio,$imagenes) {

        $db = new Conexion();
        $query = "update imagenes set  url_imagen='" . $imagenes->getUrl() . "', principal=  " . $imagenes->getPrincipal() .
                " where idimagenes= " . $imagenes->getId();
        $result = mysqli_query($db, $query);
      
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteImagen($idImagen) {
         $db = new Conexion();
        $query = "delete from imagenes where idimagenes= " . $idImagen . ";";
        echo $query;
        $result = mysqli_query($db, $query);
        mysqli_close($db);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getImagen($idImagen) {
         $db = new Conexion();
        $query = "select * from  imagenes where idimagenes= " . $idImagen . "";
        $resulGeneral = mysqli_query($db);
        $row = $resulGeneral->fetch_array();
        $imagenes = new Imagenes($row['idimagenes'], $row['url_imagen'], $row['principal']);
        mysqli_close($db);
        return $imagenes;
    }

    public function getImagenesSitio($idSitio) { 
        $db = new Conexion();
        $query = "select * from  imagenes where id_sitio=".$idSitio." ";
        $result = mysqli_query($db, $query);
        $arrayImagenes = [];

        while ($row = mysqli_fetch_array($result)) {
            $imagenes = new Imagenes($row['idimagenes'], $row['url_imagen'], $row['principal']);
            array_push($arrayImagenes, $imagenes);
        }

        mysqli_close($db);
        return $arrayImagenes;
    }

}
