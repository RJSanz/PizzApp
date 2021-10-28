<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!--titulo de la página web-->
    <title>Dar de Alta Productos</title>
    <!-- Hojas de estilo generadas por el programador (Raul) -->
    <link rel="stylesheet" href="../../css/stile.css">
    <link rel="stylesheet" href="../../css/estilos.css">
    <!-- Hoja de estilo generada por Bootstrap -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fuentes creadas para la pagina web descargadas desde bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Hoja de estilo generada para la página web -->
    <link href="../../css/business-casual.min.css" rel="stylesheet">
</head>

  <body>
    <!--etiqueta para la escritura de un header con sus clases de estilo, utiliza la hoja de estilos creados para la página web-->
    <h1 class="site-heading text-center text-white d-none d-lg-block"> 
      <span class="site-heading-upper text-primary mb-3">Bienvenidos a</span>
      <span class="site-heading-lower">PIZZAPP</span>
    </h1>

   <!-- Creacion y configuracion de la barra de navegacion que utiliza los estilos de hoja predeterminados y los estilos configurados por bootstrap, permite que la barra de navegación sea responsiva y señale la posicion actual del usuario durante la navegacion utiliza la hoja de estilos generadas para la pagina web-->
    
    <div id="nav-placeholder"></div>

    <!-- Contenedor que permite dar de alta productos asignandoles tipo, nombre y precio, para darlos de alta en la base de datos, utiliza las hojas de estilos creadas por el programador (Raul) -->
    <div class="contenedor-form">
      <!-- El primer contenedor almacena un formulario permite que el usuario no registrado, ingrese sus datos para que pueda ser dado de alta como usuario en la pagina web, valida por medio de formulario.php -->
        <div class="formulario">
          <div class="toggle">
            <span> Agregar </span>
        </div>
        
            <h2>Elimina Ingredientes</h2>
            <form method="POST" action="../controlador/formulario.php">
                <input type="email" name="Correo" placeholder="Correo Electronico" required>
                
                <input type="text" name="Nombre" placeholder="Nombre" required>

                <input type="text" name="Usuario" placeholder="Usuario" required>
                
                <input type="password" name="Contraseña" placeholder="Contraseña" required>
                
                <input type="password" name="Confirmar" placeholder="Confirmar Contraseña" required>
                
                <input type="text" name="Direccion" placeholder="Direccion" required>
                
                <input type="date" name="Fecha" placeholder="Fecha de nacimiento" required>
                
                <input type="text" name="Telefono" placeholder="Telefono" required>
                
                <input type="submit" name="Crear" value="Registrarse">
            </form>
        </div>
        <!-- El segundo contenedor almacena un formulario que valida el inicio de sesion del usuario dentro de la página web, valida por medio de formulario.php -->
        <div class="formulario">
          <div class="toggle">
            <span> Eliminar </span>
        </div>
        
            <h2>Agrega Ingredientes Disponibles</h2>
            <table border="0">
        <tbody>
            <tr>
                <td>Tipo de Ingrediente</td>
                <td>
                  <select name="tipo">
                    <option>****</option>
                  </select>
                </td>
              </tr>
          </tbody>
      </table>
      <p></p>
      <input type="text" placeholder="Nombre" required>
      <input type="text" placeholder="Precio" required>
      <p></p>
       <table border="0">
        <tbody>
            <tr>
                <td>Disponibilidad</td>
                <td>
                  <select name="tipo">
                    <option>Si</option>
                    <option>No</option>
                  </select>
                </td>
              </tr>
          </tbody>
      </table>
      <p></p>
    <input type="submit" value="Finalizar">
        </div>
    </div>
    

   
    <!-- Pie de Página de la aplicacion web -->
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Pizzapp 2018</p>
      </div>
    </footer>
    <!--Javascript generado por Bootstrap -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery-3.1.1.min.js"></script> 
    <!--Javascript generdo por el programador (Raul) -->   
    <script src="../../js/main.js"></script>
    <script>
      $(function() {
        $("#nav-placeholder").load("navA.php");
      });
    </script>
</body>
</html>