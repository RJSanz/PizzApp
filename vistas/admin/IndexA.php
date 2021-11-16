<!DOCTYPE html>
<html lang="en">

  <head>

    <?php
      session_start();
      $usuario=$_SESSION["usuario"];
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Titulo de la pagina web-->
    <title>Administrador</title>

    <!-- Hoja de estilos creada por bootstrap -->
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

    <!-- Contenedor que almacena almacena un mensaje de bienvenida al administrador de la página web de pizzapp, ademas que le muestra opciones para dar de alta y baja productos del inventario -->
    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <div class="img-fluid left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Bienvenido</span>
              <span class="section-heading-lower"><?php echo $usuario; ?></span>
            </h2>
            <p class="mb-3">Bienvenido de nuevo administrador, en esta página podras dar de alta ingredientes y complementos para que aparezcan como opciones ante el comprador.
            </p>
            <div class="intro-button mx-auto">
              <td><a class="btn btn-primary btn-xl" href="DarAlta.php">Dar de alta/baja productos</a></td>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Pie de Página de la aplicacion web --> 
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Pizzapp 2018</p>
      </div>
    </footer>

    <!-- Javascript generado por Bootstrap -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      $(function() {
        $("#nav-placeholder").load("navA.php");
      });
    </script>

  </body>

</html>
