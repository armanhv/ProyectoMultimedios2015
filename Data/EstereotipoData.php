<?php

include_once  ('conexion.php');
include_once  ('../../Domain/Estereotipo.php');

class EstereotipoData {


    public function EstereotipoData() {
        
    }

    public function getIdEstereotipo() {
        $db = new Conexion();
        $query = "select max(idestereotipo) from  estereotipo";
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if (mysqli_num_rows($result) != 0) {
            $id = mysqli_fetch_array($result);
            return ++$id[0];
        } else {
            return 1;
        }
    }

    public function insertEstereotipo($estereotipo) {
        $query = "insert into estereotipo  values (" . $this->getIdEstereotipo() . ",'" . $estereotipo->getNombreEstereotipo() . "');";
        $db = new Conexion();
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function updateEstereotipo($estereotipo) {

        $db = new Conexion();
        $query = "update estereotipo set  nombre_estereotipo=  '" . $estereotipo->getNombreEstereotipo() .
                "' where idestereotipo= " . $estereotipo->getId();
        $result = mysqli_query($db, $query);
        mysqli_close($db);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteEstereotipo($idEstereotipo) {
       $db = new Conexion();
        $query = "delete from estereotipo where idestereotipo= " . $idEstereotipo . ";";
        $result = mysqli_query($db, $query);
        mysqli_close($db);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getEstereotipo($idEstereotipo) {
        $db = new Conexion();
        $query = "select * from  estereotipo where idestereotipo= " . $idEstereotipo . "";
        $resulGeneral = mysqli_query($db, $query);
        $row = $resulGeneral->fetch_array();
        $estereotipo = new Estereotipo($row['idestereotipo'], $row['nombre_estereotipo']);
        mysqli_close($db);
        return $estereotipo;
    }

    public function getEstereotipos() {
        $db = new Conexion();
        $query = "select * from  estereotipo";
        $result = mysqli_query($db, $query);
        $arrayEstereotipo = [];

        while ($row = mysqli_fetch_array($result)) {
            $caracteristica = new Estereotipo($row['idestereotipo'], $row['nombre_estereotipo']);
            array_push($arrayEstereotipo, $caracteristica);
        }

        mysqli_close($db);
        return $arrayEstereotipo;
    }

}
