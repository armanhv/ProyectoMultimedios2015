<?php

include ('conexion.php');
include ('../Domain/Imagenes.php');

class ImagenesData {

    private $conexion;

    public function ImagenesData() {
        
    }

    public function insertImagen($idSitio, $imagenes) {
        $this->conexion = new conexion();
        $query = "insert into imagenes (id_sitio,url_imagen,principal) values (" . $idSitio
                . ", '" . $imagenes->getUrl() . "', " . $imagenes->getPrincipal() . ");";
        
        $result = mysqli_query($this->conexion, $query);
        mysqli_close($this->conexion);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateImagen($imagenes) {

        $this->conexion = new conexion();
        $query = "update imagenes set  url_imagen='" . $imagenes->getUrl() . "', principal=  " . $imagenes->getPrincipal() .
                " where idimagenes= " . $imagenes->getId();
        $result = mysqli_query($this->conexion, $query);
        mysqli_close($this->conexion);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteImagen($idImagen) {
        $this->conexion = new conexion();
        $query = "delete from imagenes where idimagenes= " . $idImagen . ";";
        $result = mysqli_query($this->conexion, $query);
        mysqli_close($this->conexion);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getImagen($idImagen) {
        $this->conexion = new conexion();
        $query = "select * from  imagenes where idimagenes= " . $idImagen . "";
        $resulGeneral = mysqli_query($this->conexion, $query);
        $row = $resulGeneral->fetch_array();
        $imagenes = new Imagenes($row['idimagenes'], $row['url_imagen'], $row['principal']);
        mysqli_close($this->conexion);
        return $imagenes;
    }

    public function getImagenesSitio($idSitio) {


        $this->conexion = new conexion();
        $query = "select * from  imagenes where id_sitio=".$idSitio." ";
        $result = mysqli_query($this->conexion, $query);
        $arrayImagenes = [];

        while ($row = mysqli_fetch_array($result)) {
            $imagenes = new Imagenes($row['idimagenes'], $row['url_imagen'], $row['principal']);
            array_push($arrayImagenes, $imagenes);
        }

        mysqli_close($this->conexion);
        return $arrayImagenes;
    }

}
