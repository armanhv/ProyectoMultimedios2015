<?php

include ('conexion.php');
include ('../../Domain/Provincias.php');

class ProvinciasData {
   
    public function ProvinciasData() {
        
    }

    public function insertProvincia($provincia) {
         $db = new Conexion();
        $query = "insert into provincias (nombre_provincia) values ('" . $provincia->getNombreProvincia() . "');";
        $result = mysqli_query( $db , $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProvincia( $provincia) {

         $db = new Conexion();
        $query = "update provincias set  nombre_provincia='" . $provincia->getNombreProvincia().
                "' where idprovincias= " . $provincia->getIdProvincia();
       
        $result = mysqli_query( $db , $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProvincia($idProvincia) {
        $db = new Conexion();
        $query = "delete from provincias where idprovincias= " . $idProvincia . ";";
        $result = mysqli_query( $db , $query);
        mysqli_close($db);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getProvincia($idProvincia) {
        $db = new Conexion();
        $query = "select * from  provincias where idprovincias= ".$idProvincia;
        $resulGeneral = mysqli_query( $db , $query);
        $row = $resulGeneral->fetch_array();
        $provincia = new Provincias($row['idprovincias'], $row['nombre_provincia']);
        mysqli_close($db);
        return $provincia;
    }
     public function getProvincias() {

       
        $db = new Conexion();
        $query = "select * from  provincias";
        $result = mysqli_query( $db , $query);
        $arrayProvincias = array();

        while ($row = mysqli_fetch_array($result)) {
            $provincia = new Provincias($row['idprovincias'], $row['nombre_provincia']);
            array_push($arrayProvincias, $provincia);
        }

        mysqli_close($db);
        return $arrayProvincias;
    }

}
