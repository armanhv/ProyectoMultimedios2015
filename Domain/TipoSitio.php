<?php
class TipoSitio {
   private $id;
    private $nombre;
    
    
    function TipoSitio($id, $nombre) {
        $this->id=$id;
        $this->nombre=$nombre;
    }
    
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function __toString() {
        return "ID: ".$this->id." Nombre: ". $this->nombre;        
    }
}
