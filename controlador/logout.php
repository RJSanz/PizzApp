<?php
      session_start();
      session_destroy();
      echo  '<script> alert("Hasta pronto.");</script>';
      echo  '<script> window.location="../vistas/index.html";</script>';
?>