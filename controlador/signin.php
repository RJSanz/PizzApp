<?php
include_once("../modelo/UsuarioBuilder.php");
if(isset( $_POST['correo'] )){
    $ub = new UsuarioBuilder();
    $resultado = $ub -> buildUsuario();
    echo $resultado;

}
?>