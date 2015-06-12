<?php

class Imagen{
	public $id;
	public $url_imagen;
	
	public function __construct($id=null, $url_imagen=null){
		 $this->id = $id;
		$this->url_imagen = $url_imagen;
	}

}
?>