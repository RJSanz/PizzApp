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

function signIn(Correo, Nombre, Usuario, Contraseña, Confirmar, Direccion, Fecha, Telefono){
    
    alert("estoy en signin")
    var correo = Correo.value;
    var nombre = Nombre.value;
    var usuari = Usuario.value;
    var contra = Contraseña.value;
    var segcon = Confirmar.value;
    var direcc = Direccion.value;
    var fechan = Fecha.value;
    var telefo = Telefono.value;
    var dataString ={
                "correo" : correo,
                "nombre" : nombre,
                "usuari" : usuari,
                "contra" : contra,
                "segcon" : segcon,
                "direcc" : direcc,
                "fechan" : fechan,
                "telefo" : telefo
    };
    if(contra==segcon){
        $.ajax({

            type: "POST",
            url: "../controlador/signin.php",
            data: dataString,
            success: function(response) {

                if (response == 0) {
                    alert("No se ha podido crear Usuario");
                }

                if (response == 1) {
                    alert("Se ha agregado a " + usuari + "\n Puedes Iniciar Sesion tranquilamente");
                }
            }

        });
    }
    else{
        alert("Las contraseñas no concuerdan entre si\nVuelve a ingresarlas");
    }
}