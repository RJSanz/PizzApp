<?php
include_once("../modelo/MenuBuilder.php");
if(isset( $_POST['nombre'] )){
    $ub = new MenuBuilder();
    $resultado = $ub -> buildMenu();
    echo $resultado;

}
?>