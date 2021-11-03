<?php
include_once('Conexion.php');

class Menu{

    private $nombre;
    private $ingredientes;
    private $tipo;
    private $precio;

    function setNombre($dato){
		$this->nombre = $dato;
	}

    function setIngredientes($dato){
		$this->ingredientes = $dato;
	}

    function setTipo($dato){
		$this->tipo = $dato;
	}

    function setPrecio($dato){
		$this->precio = $dato;
	}

    function getNombre(){
		return $this->nombre;
	}

    function getIngredientes(){
		return $this->ingredientes;
	}

    function getTipo(){
		return $this->tipo;
	}

    function getPrecio(){
		return $this->precio;
	}

    function crearMenu(){
        $con = new Conexion();
        $respuesta = true;
        if($con->conecta()){
            $query = "INSERT INTO menu VALUES(null,'".$this->nombre."','".$this->precio."','".$this->ingredientes."','".$this->tipo."')";
            $resultado = $con->agregarMenu($query);
            if($resultado){
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