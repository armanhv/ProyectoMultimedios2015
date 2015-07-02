<?php


class Provincias {
    private $idProvincia;
    private $nombreProvincia;
    
    function Provincias($idProvincia, $nombreProvincia) {
        $this->idProvincia = $idProvincia;
        $this->nombreProvincia = $nombreProvincia;
    }
    
    function getIdProvincia() {
        return $this->idProvincia;
    }

    function getNombreProvincia() {
        return $this->nombreProvincia;
    }

    function setIdProvincia($idProvincia) {
        $this->idProvincia = $idProvincia;
    }

    function setNombreProvincia($nombreProvincia) {
        $this->nombreProvincia = $nombreProvincia;
    }

    public function __toString() {
        return 'ID; '.$this->idProvincia.'  Nombre: '.$this->nombreProvincia;
    }


}
