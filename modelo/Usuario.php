<?php
include_once('Conexion.php');

class Usuario{

	private $correo;
	private $nombre;
	private $usuario;
	private $password;
	private $direc;
	private $fecha;
	private $telefono;

	function setCorreo($dato){
		$this->correo = $dato;
	}

	function setNombre($dato){
		$this->nombre = $dato;
	}

	function setUsuario($dato){
		$this->usuario = $dato;
	}

	function setContrasena($dato){
		$this->password = $dato;
	}

	function setDireccion($dato){
		$this->direc = $dato;
	}

	function setFecha($dato){
		$this->fecha = $dato;
	}

	function setTelefono($dato){
		$this->telefono = $dato;
	}

	function getCorreo(){
		return $this->correo;
	}

	function getNombre(){
		return $this->nombre;
	}

	function getUsuario(){
		return $this->usuario;
	}

	function getContrasena(){
		return $this->password;
	}

	function getDireccion(){
		return $this->direc;
	}

	function getFecha(){
		return $this->fecha;
	}

	function buscarUsuario(){
		$con = new Conexion();
		$respuesta = true;
		if($con->conecta()){
			$query = "SELECT * FROM usuario WHERE Usuario='".$this->usuario."' AND Contrasena='".$this->contrasena."'";
			$resultado = $con->consultarUsuario($query);
			if ($resultado) {
				$this->usuario = $resultado[0][1];
				$this->password = $resultado[0][1];
				$respuesta = true;
			}
			else{
				$respuesta = false;
			}
			$con->desconecta();
		}
		else{
			$respuesta = false;
		}
		return $respuesta;
	}

	function crearUsuario(){
		$con = new Conexion();
		$respuesta = true;
		if($con->conecta()){
			$query = "INSERT INTO usuario VALUES(null,'".$this->usuario."','".$this->nombre."','".$this->correo."','".$this->fecha."','".$this->telefono."','".$this->direc."','".$this->password."','U')";
			$resultado = $con->insertarUsuario($query);
			if ($resultado) {
				$respuesta = true;
			}
			else{
				$respuesta = false;
			}
			$con->desconecta();
		}
		else{
			$respuesta = false;
		}
		return $respuesta;
	}
} 
?>