<?php


include_once ('conexion.php');
include_once '../../Domain/Caracteristicas.php';

class SitioCaracteristicasData {

    public function SitioCaracteristicasData() {
        
    }

    public function insertSitioCaracteristicas($idCaracteristica,$idSitio) {
         $db = new Conexion();
        $query = "insert into sitio_caracteristicas values (" . $idCaracteristica.",".$idSitio . ");";
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
    public function deleteSitioCaracteristicas($idCaracteristica,$idSitio) {
         $db = new Conexion();
        $query = "delete from sitio_caracteristicas where id_caracteristica= " . $idCaracteristica ." and id_sitio=".$idSitio. ";";
       
        $result = mysqli_query($db, $query);
        mysqli_close($db);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
     public function getCaracteristicasSitioID($idSitio) {
        $db = new Conexion();
        $query = "select * from  sitio_caracteristicas where id_sitio=".$idSitio;
        $result = mysqli_query($db, $query);
        $arrayCaracteristicas = array();

        while ($row = mysqli_fetch_array($result)) {
            $caracteristica = new Caracteristicas($row['idcaracteristicas'], $row['id_sitio']);
            array_push($arrayCaracteristicas, $caracteristica);
        }

        mysqli_close($db);
        return $arrayCaracteristicas;
    }
       
  
     public function getCaracteristicasSitio() {
        $db = new Conexion();
        $query = "select * from  sitio_caracteristicas";
        $result = mysqli_query($db, $query);
        $arrayCaracteristicas = array();

        while ($row = mysqli_fetch_array($result)) {
            $caracteristica = new Caracteristicas($row['idcaracteristicas'], $row['id_sitio']);
            array_push($arrayCaracteristicas, $caracteristica);
        }

        mysqli_close($db);
        return $arrayCaracteristicas;
    }
}
