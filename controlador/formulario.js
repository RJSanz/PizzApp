function logIn(Usuario, Contrasena){
	var usuario = Usuario.value;
    var contrasenia = Contrasena.value;
    var dataString ={
                "usuario" : usuario,
                "contrasena" : contrasenia
    };

    $.ajax({

        type: "POST",
        url: "../modelo/login.php",
        data: dataString,
        success: function(response) {


        	if (response == 0) {
        		 alert("Datos incorrectos");
        	}

        	if (response == 1) {
        		 alert("Bienvenido Administrador");
        		window.location.href = "../vistas/admin/IndexA.php"
        	}

        	if (response == 2) {
        		 alert("Bienvenido Usuario");
        		 window.location.href = "../vistas/usuario/IndexU.php"
        	}

        }

    });
}

function signIn(){
	
}