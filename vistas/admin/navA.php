<?php
      session_start();
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
              <a class="nav-link text-center text-uppercase text-expanded" href="indexA.php">Pagina de <?php echo $usuario; ?>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-center text-uppercase text-expanded" href="DarAlta.php">Administrar Ingredientes</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-center text-uppercase text-expanded" href="../../controlador/logout.php">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>