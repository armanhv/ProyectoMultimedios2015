<?php

class Estereotipo {
    private $id;
    private $nombreEstereotipo;
    
    function __construct($id, $nombreEstereotipo) {
        $this->id = $id;
        $this->nombreEstereotipo = $nombreEstereotipo;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombreEstereotipo() {
        return $this->nombreEstereotipo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombreEstereotipo($nombreEstereotipo) {
        $this->nombreEstereotipo = $nombreEstereotipo;
    }
    public function __toString() {
        return "ID: ".$this->id. " Nombre: ".$this->nombreEstereotipo ;
        
    }



}
