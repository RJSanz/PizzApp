<?php
      session_start();
      include '../../controlador/formulario.php';
      $usuario=$_SESSION["usuario"];
?>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">MENU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-center text-uppercase text-expanded" href="indexU.php">Pagina de <?php echo $usuario; ?>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-center text-uppercase text-expanded" href="pedido.php">Realizar pedido</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-center text-uppercase text-expanded" href="form-pago.php">Agregar forma de pago</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-center text-uppercase text-expanded" href="../../controlador/logout.php">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>