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

  <script src="../../controlador/altaMenu.js"></script>

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
  <div class="contenedor-form2">
    <!-- El primer contenedor almacena un formulario permite que el usuario no registrado, ingrese sus datos para que pueda ser dado de alta como usuario en la pagina web, valida por medio de formulario.php -->
    <div class="formulario">
      <div class="toggle">
        <span> Agregar </span>
      </div>

      <h2>Elimina Ingredientes</h2>

      <table style="width: 100px" class="table table-striped">
        <thead>
          <tr>
            <th>No. </th>
            <th>Nombre </th>
            <th>Precio </th>
            <th>Ingredientes </th>
            <th>Tipo</th>
            <th> </th>
          </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;
        $conexion = mysqli_connect('localhost', 'root', '', 'pizzapp');

        $sql = "SELECT * FROM menu ";
        $result = mysqli_query($conexion, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
          $i = $i+1;
        ?>
         <tr id="fila<?php echo $i; ?>">
          
            <td scope="row"><?php echo $mostrar['Id_menu'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['precio'] ?></td>
            <td><?php echo $mostrar['ingredientes'] ?></td>
            <td><?php echo $mostrar['tipo'] ?></td>
            <td><a onclick="borrarMenu(<?php echo $mostrar['Id_menu']?>)" class="btn btn-danger">Eliminar</a> </td>
            <!--<td><button type="button" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#eliminar">Eliminar</button></td>-->

            <!--<a href="#" data-href="eliminar.php?Id_menu=
            <?php echo $mostrar['Id_menu']; ?>" data-toggle="modal" data-target="#eliminar">-->
                </a>
        <!--<svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>-->
      <?php
        }
      ?>
   
      </tbody>
      </table>

    </div>





    <div class="formulario">
      <div class="toggle">
        <span> Eliminar </span>
      </div>

      <h2>Agrega Especialidad Disponible</h2>

      <form action=>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre de la especialidad" required>
        <textarea id="ingredientes" name="ingredientes" rows="2" placeholder="Ingredientes"></textarea>
        <select name="tipo" id="tipo">
          <option value="" disabled selected>Tipo de Menu</option>
          <option value="Especialidad" type="text" name="tipo">Especialidad</option>
          <option value="Complemento" type="text" name="tipo">Complemento</option>
        </select>
        <input type="number" id="precio" name="precio" placeholder="Precio" required>
      </form>
      <input type="button" name="save" value="Guardar" onclick="GuardarMenu(nombre, ingredientes, tipo, precio)">
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


  <!-- Modal -->
  <div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <h4> ¿Está seguro que desea eliminar este registro?</h4>
          <form action="eliminar.php" method="POST">
            <input type="hidden" name="Id_menu" id="delete_id">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <script>
    $('.deletebtn').on('click', function() {
      $tr = $(this).closest('tr');
      var datos = $tr.children("td").map(function() {
        return $(this).text();
      });
      $('#delete_id').val(datos[0]);
    });
  </script>



</body>

</html>