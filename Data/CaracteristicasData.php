<?php

include_once ('conexion.php');
include_once '../../Domain/Caracteristicas.php';

class CaracteristicasData {
   
    public function insertCaracteristicas($caracteristicas) {
        $db = new Conexion();
        $query = "insert into caracteristicas (nombre) values ('" . $caracteristicas->getNombre() . "');";
        // echo $query;
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateCaracteristicas($caracteristicas) {

        $db = new Conexion();
        $query = "update caracteristicas set  nombre=  '" . $caracteristicas->getNombre() .
                "' where idcaracteristicas= " . $caracteristicas->getId();
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCaracteristicas($idCaracteristica) {
        $db = new Conexion();
        $query = "delete from caracteristicas where idcaracteristicas= " . $idCaracteristica . ";";
        $result = mysqli_query($this->conexion, $query);
        mysqli_close($this->conexion);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getCaracteristica($idCaracteristica) {
        $db = new Conexion();
        $query = "select * from  caracteristicas where idcaracteristicas= " . $idCaracteristica . "";
        $resulGeneral = mysqli_query($db, $query);
        $row = $resulGeneral->fetch_array();
        $caracteristica = new Caracteristicas($row['idcaracteristicas'], $row['nombre']);
        mysqli_close($db);
        return $caracteristica;
    }

    public function getCaracteristicas() {
        $db = new Conexion();
        $query = "select * from  caracteristicas";
        $result = mysqli_query($db, $query);
        $arrayCaracteristicas = array();

        while ($row = mysqli_fetch_array($result)) {
            $caracteristica = new Caracteristicas($row['idcaracteristicas'], $row['nombre']);
            array_push($arrayCaracteristicas, $caracteristica);
        }

        mysqli_close($db);
        return $arrayCaracteristicas;
    }

}
