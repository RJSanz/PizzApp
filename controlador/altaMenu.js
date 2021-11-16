const header = require("gulp-header");

function GuardarMenu(nombre, ingredientes, tipo, precio){
    var n = nombre.value;
    var i = ingredientes.value;
    var t = tipo.value;
    var p = precio.value;

    var dataString ={
        "nombre" : n,
        "ingredientes" : i,
        "tipo" : t,
        "precio" : p
    };


    $.ajax({
        type: "POST",
        url: "../../controlador/save.php",
        data: dataString,
        success: function(response) {

        	if (response == 0) {
        		 alert("No se ha agregado el menu");
        	}

        	if (response == 1) {
        		 alert("Se ha agregado Correctamente tu menu");
        	}

        }

    });


}

function borrarMenu(Menu){
    var index = Menu;

    $.ajax({
        type: "POST",
        url: "../../controlador/delete.php",
        data: {"index": index},
        success: function(response){
            if (response == 0) {
                alert("No se ha eliminado el Menu");
           }

           if (response == 1) {
                alert("Se ha eliminado Correctamente tu menu");
                window.location.href="DarAlta.php"
           }
        }
    });
}