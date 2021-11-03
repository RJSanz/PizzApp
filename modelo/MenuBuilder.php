<?php
include_once('IBuilder.php');
include_once("../modelo/Menu.php");

class MenuBuilder implements IBuilder{

	public function buildPedido(){}

	public function buildUsuario(){}

	public function buildMenu(){
		$nombre ="";
        $ingredientes = "";
        $tipo = "";
        $precio = "";
        $oMenu = new Menu();
        $respuesta;

        $nombre = $_POST["nombre"];
        $ingredientes = $_POST["ingredientes"];
        $tipo = $_POST["tipo"];
        $precio = $_POST["precio"];

        $oMenu->setNombre($nombre);
        $oMenu->setIngredientes($ingredientes);
        $oMenu->setTipo($tipo);
        $oMenu->setPrecio($precio);

        try{
            if($oMenu->crearMenu()){
                $respuesta = 1;
            }
            else{
                $respuesta = 0;
            }
        }catch(Exception $e){
            $respuesta = 0;
        }
        echo $respuesta;
	}
}

?>