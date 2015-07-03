<?php

include ('conexion.php');
include ('../../Domain/TipoSitio.php');

class TipoSitioData {

    private $conexion;

    public function TipoSitioData() {
        
    }

    public function insertTipoSitio( $tipoSitio) {
        $db = new Conexion();
        $query = "insert into tipo_sitio (nombre_tipo) values ('" . $tipoSitio->getNombre() . "');";
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateTipoSitio( $tipoSitio) {

        $db = new Conexion();
        $query = "update tipo_sitio set  nombre_tipo=  '" . $tipoSitio->getNombre().
                "' where idtipo= " . $tipoSitio->getId();
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTipoSitio($idTipoSitio) {
        $db = new Conexion();
        $query = "delete from tipo_sitio where 	idtipo= " . $idTipoSitio . ";";
        $result = mysqli_query($db, $query);
        mysqli_close($db);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getTipoSitio($idTipoSitio) {
        $db = new Conexion();
        $query = "select * from  tipo_sitio where 	idtipo= " . $idTipoSitio . "";
        $resulGeneral = mysqli_query($db, $query);
        $row = $resulGeneral->fetch_array();
        $sitio = new TipoSitio($row['idtipo'], $row['nombre_tipo']);
        mysqli_close($db);
        return $sitio;
    }
    
    public function getTipoSitios() {
       
        $db = new Conexion();
        $query = "select * from  tipo_sitio";
        $result = mysqli_query($db, $query);
        $arrayTipoSitio = array();

        while ($row = mysqli_fetch_array($result)) {
            $sitio = new TipoSitio($row['idtipo'], $row['nombre_tipo']);
            array_push($arrayTipoSitio, $sitio);
        }

        mysqli_close($db);
        return $arrayTipoSitio;
    }

}
