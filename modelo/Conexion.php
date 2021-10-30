<?php
error_reporting(E_ALL);
class Conexion{
	private $conexion = null;

	function conecta(){
		$val = false;
		try{
			$this->conexion = mysqli_connect('localhost','root','','pizzapp') or die ('Error en la conexion servidor');
			$val = true; 
		}catch(Exception $e){
			throw $e;
		}
		return $val;
	}

	function desconecta(){
		$val = false;
		if($this->conexion != null){
			$this->conexion = null;
			$val = true;
		}
		return $val;
	}

	function insertarUsuario($consulta){
		$datos = null;
		$resultado = null;
		if ($consulta == null){
			throw new Exception("Error en archivo conexion ---> La consulta esta vacia");
		}
		if ($this->conexion == null){
			throw new Exception("Error en la conexion con la base de datos");
		}
		try{
			$datos = mysqli_query($this->conexion, $consulta);
		}catch(Exception $e){
			throw $e;
		}
		if ($datos) {
			$resultado = true;
		}
		else{
			$resultado = false;
		}

		return $resultado;
	}

	function consultarUsuario(){

	}


}

?>