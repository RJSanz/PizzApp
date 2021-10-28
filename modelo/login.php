<?php
	//Codigo php que conecta con la base de datos creada para los usuarios
	$con=mysqli_connect('localhost','root','','pizzapp') or die ('Error en la conexion servidor');
	session_start();

	$row="";
	$jsonData="";
	$usuario=$_POST['usuario'];
	$contra=$_POST['contrasena'];
	$sql = "SELECT * FROM usuario WHERE Usuario='".$usuario."' AND Contrasena='".$contra."'";
	$resultado = mysqli_query($con,$sql);
	$row=mysqli_fetch_array($resultado);
	if(!$resultado){
		echo 0;
	}


	if(mysqli_num_rows($resultado)>0){
			$_SESSION["usuario"]=$usuario;
			$_SESSION["contrasena"]=$contra;
			if($row["Tipo"]=="A"){
				echo 1;
			}
			else{
				echo 2;
			}
			
	}

?>