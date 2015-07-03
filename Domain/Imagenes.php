<?php


class Imagenes {
    private $id;
    private $url;
    private $principal;
    
    
    public function Imagenes($id,$url,$principal){
        $this->id=$id;
        $this->url=$url;
        $this->principal=$principal;
    }
    
    function getId() {
        return $this->id;
    }

    function getUrl() {
        return $this->url;
    }

    function getPrincipal() {
        return $this->principal;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setPrincipal($principal) {
        $this->principal = $principal;
    }

    public function __toString() {
        return "ID: ".$this->id. " URL: ".$this->url." Principal: ".$this->principal;
    }

    
}
