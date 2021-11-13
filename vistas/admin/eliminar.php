<?php

 include_once('../../modelo/Conexion.php');

$Id_menu=$_POST["Id_menu"];



$sentencia=$conexion->prepare("DELETE FROM menu WHERE Id_menu=:Id_menu;");
$sentencia->bindParam(':Id_menu',$Id_menu);


if($sentencia->execute()){
    return header("Location:DarAlta.php");
}else{
    return "error";
}

?>

<script type="text/javascript">
alert("producto eliminado");
window.location.href="DarAlta.php"
</script>