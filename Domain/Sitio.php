<?php

class Sitio{
	public $id_stio;
	public $nombre;
	public $precio;
	public $visitas;
	public $visitas_estereotipo;
	public $telefono;
	public $direccion;
	public $correo;
	public $descripcion1;
	public $descripcion2;
	public $url_video;
	public $tipo_sitio;
	public $apto_para;
	public $provincia;
	public $url_imagen;
	
	public function Sitio($id_stio=null, $nombre=null, $precio=null, $visitas=null, $visitas_estereotipo=null, $telefono=null, $direccion=null, $correo=null, $descripcion1=null, $descripcion2=null, $url_video=null, $tipo_sitio=null, $apto_para=null, $provincia=null, $url_imagen=null){
		 $this->id_stio = $id_stio;
		$this->nombre = $nombre;
		$this->precio = $precio;
		$this->visitas = $visitas;
		$this->visitas_estereotipo = $visitas_estereotipo;
		$this->telefono = $telefono;
		$this->direccion = $direccion;
		$this->correo = $correo;
		$this->descripcion1 = $descripcion1;
		$this->descripcion2 = $descripcion2;
		$this->url_video = $url_video;
		$this->tipo_sitio = $tipo_sitio;
		$this->apto_para = $apto_para;
		$this->provincia = $provincia;
		$this->url_imagen = $url_imagen;
	}
	
	public function __toString(){
		return "asd";
	}
	
	
	
	
}

?>
