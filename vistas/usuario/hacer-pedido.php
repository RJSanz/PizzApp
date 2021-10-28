<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- PHP que inicia sesion y almacena las variables globales para mostrar los datos de los precios -->
    <?php
      session_start();
      include '../../controlador/formulario.php';
      $usuario=$_SESSION["Usuario"];

    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../../css/stile.css">
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Titulo de la página web -->
    <title>Realizar pedido</title>

    <!-- Hoja de estilos generada por Bootstrap -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fuentes creadas para la pagina web descargadas desde bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Hoja de estilos creada para la página web -->
    <link href="../../css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>
     <!--etiqueta para la escritura de un header con sus clases de estilo, utiliza la hoja de estilos creados para la página web-->
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Bienvenidos a</span>
      <span class="site-heading-lower">PIZZAPP</span>
    </h1>

    <!-- Creacion y configuracion de la barra de navegacion que utiliza los estilos de hoja predeterminados y los estilos configurados por bootstrap, permite que la barra de navegación sea responsiva y señale la posicion actual del usuario durante la navegacion -->
     <div id="nav-placeholder"></div>

    <!-- Contenedores que almacenan los casos de uso de realizar pedido, corregir pedido y pagar pedido, realiza una consulta a la base de datos para recuperar los precios -->
    <div class="contenedor-form">
        <div class="pago">
            <h2>¿Que desea hacer?</h2>
        </div>
        
        <div class="formulario">
          <form method="POST" action="../../controlador/configuraciones.php">
            <input type="submit" name="hacerpedido"  value="Deseo hacer un pedido">
            <div class="intern">
                <p>Tamaño: $ </p>
                <p>Tipo de masa:  $ </p>
                <p>tipo de queso: $</p>
                <p>Ingrediente:   $</p>
                <p>Complemento:   $</p>
                <p>Subtotal:      $</p>
            </div>
            <input type="submit" name="corregirpedido" value="Corregir pedido">
            <input type="submit" name="pagar" value="Pagar">
            <span>*Se debe realizar un pedido para acceder a esta funcion</span>
          </form>
        </div>
    </div>
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Pizzapp 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery-3.1.1.min.js"></script>    
    <script src="../../js/main.js"></script>
    <script>
      $(function() {
        $("#nav-placeholder").load("navU.php");
      });
    </script>
  </body>

</html>
