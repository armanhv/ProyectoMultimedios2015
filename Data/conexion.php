<?php

class Conexion extends mysqli{
	private $host = "163.178.173.144:3306";
	private $user = "multimedios";
	private $password = "multimedios";
	private $db = "multimedios_dds";

	public function __construct(){
		parent::__construct($this->host,$this->user,$this->password ,$this->db);
	}
	
	public function recorrer($y){
		return mysqli_fetch_array($y);
	}
}

?>