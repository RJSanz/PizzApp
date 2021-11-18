<!-- PHP que permite recuperar al usuario para mostrarlo en la pagina realizar pedido -->
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/PizzApp/modelo/Propiedades.php');
 
    session_start();
    include 'formulario.php';

    $prop = new Propiedades();
    $con=mysqli_connect($prop->getHost(), $prop->getUser(), $prop->getPass(), $prop->getDB()) or die ('Error en la conexion servidor');

    $usuario=$_SESSION["Usuario"];
    $contrasena=$_SESSION["contrasena"];
    $sql="SELECT `Id_Usuario` FROM `usuario` WHERE Usuario='".$usuario."' AND Contrasena='".$contrasena."'";
    $resultado=mysqli_query($con,$sql);
    $id = mysqli_fetch_array($resultado);
    $_SESSION["Id_Usuario"]=$id["Id_Usuario"];
    if (isset($_POST['hacerpedido']) ){
            echo  '<script> window.location="../vistas/usuario/hacer-pedido.php";</script>';
    }
?>