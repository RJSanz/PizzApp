<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
      session_start();
      include '../../controlador/formulario.php';
      $usuario=$_SESSION["Usuario"];
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Hoja de estilos generada por el programador (Raul)-->
    <link rel="stylesheet" href="../../css/stile.css">
    <!-- Hoja de estilos generada por Bootstrap -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--Titulo de la página Web -->
    <title>Iniciar Sesion</title>

    <!-- Fuentes generadas para la página web -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Hoja de estilos creados para la aplicacion web -->
    <link href="../../css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>
    <!-- Header de la página web que utiliza los estilos de hoja creados para la página web -->
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Bienvenidos a</span>
      <span class="site-heading-lower">PIZZAPP</span>
    </h1>

    <!-- Creacion y configuracion de la barra de navegacion que utiliza los estilos de hoja creados para la página web y los estilos configurados por bootstrap, permite que la barra de navegación sea responsiva y señale la posicion actual del usuario durante la navegacion -->
      <div id="nav-placeholder"></div>

    <!-- Contenedor que almacena botones que permiten alterar, eliminar y agregar formas de pago, asi como muestra la forma de pago activa actualmente utiliza la hoja de estilos generados por el programador (Raul) -->
    <div class="contenedor-form">
        <div class="pago">
            <h2>¿Que accion desea realizar con su forma de pago?</h2>
        </div>
         <input type="submit" value="Añadir forma de pago">
             <input type="submit" value="Quitar forma de pago">
        <div class="formulario">
            <div class="intern">
              <form action="#">
                <h3>Formas de pago activas</h3>
                <p>Nombre:  </p>
                <p>Numero de tarjeta:    0000 0000 0000 0000</p>
                <p>Numero de seguridad:  000</p>
                <p>Fecha de expiracion:  00/00</p>
                <p>Banco afiliado:       Banamex</p>
              </form>
            </div>
        </div>
    </div>
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Pizzapp 2018</p>
      </div>
    </footer>

    <!-- Javascript generado automaticamente por Bootstrap -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/jquery-3.1.1.min.js"></script>  
    <!-- Javascript generado por el programador (Raul) -->  
    <script src="../../js/main.js"></script>
    <script>
      $(function() {
        $("#nav-placeholder").load("navU.php");
      });
    </script>
  </body>

</html>
