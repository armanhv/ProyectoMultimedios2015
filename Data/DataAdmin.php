<?php
include ('conexion.php');
include ('../Domain/Admin.php');

class DataAdmin{
	
	protected $user;
	protected $pass;
	
	public function DataAdmin($usuario, $password){
		$this->user = $usuario;
		$this->pass = $password;
	}

	public function verify_admin(){
		$db = new Conexion();
		$sql = $db->query("call sp_autenticar_admin('$this->user','$this->pass');");
		$datos = $db->recorrer($sql);
		
		$admin = new Admin($datos['id'],$datos['nombre_usuario'],$datos['password'],$datos['correo'],$datos['nombre'],$datos['apellidos'],						$datos['admin_general']);
		
		if(count($datos) != 0){
			session_start();
			$_SESSION['admin'] = $admin;
		}
	}
	
}

?>