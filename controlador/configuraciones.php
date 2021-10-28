<!-- PHP que permite recuperar al usuario para mostrarlo en la pagina realizar pedido -->
<?php
	session_start();
	include 'formulario.php';
	$con=mysqli_connect('localhost','root','','pizzapp') or die ('Error en la conexion servidor');
	$usuario=$_SESSION["Usuario"];
	$contrasena=$_SESSION["contrasena"];
	$sql="SELECT `Id_Usuario` FROM `usuario` WHERE Usuario='".$usuario."' AND Contrasena='".$contrasena."'";
	$resultado=mysqli_query($con,$sql);
	$id = mysqli_fetch_array($resultado,MYSQL_ASSOC);
	$_SESSION["Id_Usuario"]=$id["Id_Usuario"];
	if (isset($_POST['hacerpedido']) ){
		echo  '<script> window.location="../vistas/usuario/pedido.php";</script>';
	}
?>