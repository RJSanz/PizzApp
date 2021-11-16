<?php
include_once("../modelo/eliminarMenu.php");
if(isset( $_POST['index'] )){
    $em = new eliminarMenu();
    $resultado = $em -> eliminaMenu();
    echo $resultado;

}

?>