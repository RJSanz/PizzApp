<?php
//require_once('http://' . $_SERVER['HTTP_HOST'] . '/modelo/Propiedades.php');
 require_once($_SERVER['DOCUMENT_ROOT'].'/PizzApp/modelo/Propiedades.php');
	//Codigo php que conecta con la base de datos creada para los usuarios
        $prop = new Propiedades();
	$con=mysqli_connect($prop->getHost(), $prop->getUser(), $prop->getPass(), $prop->getDB()) or die ('Error en la conexion servidor');
	//condicional para determinar si el usuario se ha registrado, usando un comando php para recuperar los datos ingresados por el usuario y con un comando SQL para registrar los datos del usuario en la tabla correspondiente
	if(isset($_POST['Crear'])){
		$confcon=$_POST["Confirmar"];
		$contra=$_POST["Contraseña"];
		if ($contra!=$confcon) {
			echo  '<script> alert("Datos erroneos, verifique que hayan sido ingresados correctamente.");</script>';
			echo  '<script> window.location="../vistas/signin.html";</script>';
		}
		else{
			
			$sql="INSERT INTO usuario VALUES(null,'".$_POST["Usuario"]."','".$_POST["Nombre"]."','".$_POST["Correo"]."','".$_POST["Fecha"]."','".$_POST["Telefono"]."','".$_POST["Direccion"]."','".$_POST["Contraseña"]."','U')";
			$resultado=mysqli_query($con,$sql);
			mysqli_close($con);
			echo  '<script> alert("Te has registrado correctamente.");</script>';
			echo  '<script> window.location="../vistas/login.html";</script>';
		}
	}
	//condicional para determinar si el usuario esta intentando iniciar sesion, usando un comando php para recuperar los datos ingresados por el usuario y con un comando SQL para comparar los datos del usuario con la tabla correspondiente y en caso de encontrar una similitud, permitirle iniciar sesion
	$row;
	if (isset($_POST['Login'])) {
		$usuario=$_POST['Usuario'];
		$contrasena=$_POST['Contrasena'];
		$sql="SELECT * FROM usuario WHERE Usuario='".$usuario."' AND Contrasena='".$contrasena."'";
		$resultado=mysqli_query($con,$sql);
		if(!$resultado){
  			echo mysqli_error($con);
		}
		if(mysqli_num_rows($resultado)>0){
			session_start();
			$row=mysqli_fetch_array($resultado);
			$_SESSION["Usuario"]=$usuario;
			$_SESSION["contrasena"]=$contrasena;
			echo  '<script> alert("Bienvenido de nuevo.");</script>';
			if ($row["Tipo"]=="A") {
				echo  '<script> window.location="../vistas/admin/IndexA.php";</script>';
			}
			else{
				echo  '<script> window.location="../vistas/usuario/IndexU.php";</script>';
			}
		}
		else{
			echo  '<script> alert("Nombre de Usuario o Contraseña incorrectos.");</script>';
			echo  '<script> window.location="../vistas/login.html";</script>';
		}
	}

?>