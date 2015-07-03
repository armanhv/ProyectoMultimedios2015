<?php

include_once ('conexion.php');
include_once ('.././Domain/Coordenadas.php');

class DataCoordenada {

    public function get_coordenadas($id) {
        $db = new Conexion();
        $sql = $db->query("call sp_get_coordenada('$id');");
        $datos = $db->recorrer($sql);

        $coordenada = new Coordenadas($datos['idSitio'], $datos['latitud'], $datos['longitud']);
        $_SESSION['coordenada'] = serialize($coordenada);
    }

    public function insertCoordenadas($idSitio, $coordenadas) {
        $db = new Conexion();
        $query = "insert into coordenadas values (" . $idSitio
                . ", " . $coordenadas->latitud . ", " . $coordenadas->longuitud . ");";
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
     public function actualizarCoordenadas($idSitio, $coordenadas) {
        $db = new Conexion();
        $query = "update coordenadas set  latitud=" . $coordenadas->latitud . ", longitud=" . $coordenadas->longuitud . " where idsitio=".$idSitio;
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerCoordenadas($idSitio) {
        $db = new Conexion();
        $query = "select * from coordenadas where idsitio='" . $idSitio . "'";
        $result = mysqli_query($db, $query);
        $resultados = mysqli_fetch_array($result);
        mysqli_close($db);

        if ($resultados) {
            return new Coordenadas($resultados['idSitio'], $resultados['latitud'], $resultados['longitud']);
        } else {
            return 0;
        }
    }

    public function eliminarCoordenadas($idSitio) {
        $db = new Conexion();
        $query = "delete from coordenadas where idsitio='" . $idSitio . "'";
        $result = mysqli_query($db, $query);
        mysqli_close($db);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    

}

?>