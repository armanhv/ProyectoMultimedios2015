<?php

include ('conexion.php');

class SitioCaracteristicasData {

    private $conexion;

    public function SitioCaracteristicasData() {
        
    }

    public function insertSitioCaracteristicas($idCaracteristica,$idSitio) {
        $this->conexion = new conexion();
        $query = "insert into sitio_caracteristicas values (" . $idCaracteristica.",".$idSitio . ");";
        $result = mysqli_query($this->conexion, $query);
        mysqli_close($this->conexion);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
    public function deleteSitioCaracteristicas($idCaracteristica,$idSitio) {
        $this->conexion = new conexion();
        $query = "delete from sitio_caracteristicas where id_caracteristica= " . $idCaracteristica ." and id_sitio=".$idSitio. ";";
        echo $query;
        $result = mysqli_query($this->conexion, $query);
        mysqli_close($this->conexion);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
