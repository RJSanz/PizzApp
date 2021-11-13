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
