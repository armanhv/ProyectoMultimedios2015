<?php

class Admin{
	
	private $id;
	private $nombre;
	private $apellidos;
	private $nombre_usuario;
	private $password;
	private $correo;
	private $admin_general;
	
	public function Admin($id, $nombre_usuario, $password, $correo, $nombre, $apellidos, $admin_general){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellidos = $apellidos;
		$this->nombre_usuario = $nombre_usuario;
		$this->password = $password;
		$this->correo = $correo;
		$this->admin_general = $admin_general;
	}
	
	public function __toString(){
		if ($this->nombre = ""){
			return "";
		}
		return $this->nombre;
	}
	
}
?>