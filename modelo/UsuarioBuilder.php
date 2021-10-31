<?php
include_once('IBuilder.php');
include_once("../modelo/Usuario.php");

class UsuarioBuilder implements IBuilder{

	public function buildPedido(){}

	public function buildMenu(){}

	public function buildUsuario(){
		$sesion="";
		$sCorreo="";
		$sNombre="";
		$sUsuario="";
		$sPwd="";
		$sSegpwd="";
		$sDirecc="";
		$sFechan="";
		$sTelefo="";
		$oUsuario = new Usuario();
		$respuesta;

	    $sCorreo = $_POST["correo"];
    	$sNombre = $_POST["nombre"];
    	$sUsuario = $_POST["usuari"];
    	$sPwd = $_POST["contra"];
    	$sSegpwd = $_POST["segcon"];
    	$sDirecc = $_POST["direcc"];
    	$sFechan = $_POST["fechan"];
    	$sTelefo = $_POST["telefo"];
    	$oUsuario->setCorreo($sCorreo);
    	$oUsuario->setNombre($sNombre);
    	$oUsuario->setUsuario($sUsuario);
   		$oUsuario->setContrasena($sPwd);
    	$oUsuario->setDireccion($sDirecc);
    	$oUsuario->setFecha($sFechan);
    	$oUsuario->setTelefono($sTelefo);
    
		try{
    		if ($oUsuario->crearUsuario()){
        		$respuesta = 1;
    		}else{
        		$respuesta = 0;
    		}
		}catch(Exception $e){
    		$respuesta = 0;
		}


		echo $respuesta;
	}
}

?>