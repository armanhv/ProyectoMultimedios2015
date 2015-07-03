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
		try {
			$db = new Conexion();
			$sql = $db->query("call sp_autenticar_admin('$this->user','$this->pass');");
			$datos = $db->recorrer($sql);
			$admin = new Admin($datos['id'],$datos['nombre_usuario'],$datos['password'],$datos['correo'],$datos['nombre'],$datos['apellidos'],						$datos['admin_general']);
		
			if(count($datos) != 0){
				session_start();
				$_SESSION['admin'] = serialize($admin);
			}
			$sql->close();
		} catch (Exception $e) {
		  echo "Error al conectar a la base de datos, por favor intente más tarde y si el problema persiste, por favor indicarselo a nuestros administradores";
		  return;
		}		
	}
	
}

?>