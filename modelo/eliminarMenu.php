<?php
include_once("../modelo/Menu.php");

class eliminarMenu{
    public function eliminaMenu(){
        $index = '';
        $oMenu = new Menu();
        $respuesta;
        
        $index = $_POST["index"];

        $oMenu->setIndex($index);

        try{
            if($oMenu->borrarMenu()){
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