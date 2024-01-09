<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>T-SHIRT</title>
</head>

<body translate="no">
  <!-- EL 'script' ES EMPLEADO PARA QUE NO SE PUEDA REDIRIGIR PARA ATRÁS CON LAS FLECHAS DEL NAVEGADOR
  EVITANDO LA UTILIZACIÓN DEL HISTORIAL. REALIZA LA CADUCIDAD DE LA SESIÓN -->
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
      session_cache_limiter('private, must-revalidate');
      session_cache_expire(60);
      session_destroy();
    }
  </script>
  <?php
  $email = "";
  // VERIFICACIÓN DE INGRESOS DE DATOS POR METODO 'POST'
  if (isset($_POST["password"]) > 0 and isset($_POST["email"]) > 0) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    $administrador_1 = "DIEGO";
    // LLAMADO A LA GENERACIÓN DE LA BASE DE DATOS Y SUS TABLAS.
    require("../config/db-config.php");

    // SE LLAMA CON 'INCLUDE' AL CÓDIGO DE VERIFICACIÓN DE EMAIL. !!!
    include("../includes/api/auth-api/auth.php");
  }

  if ($email == "") {
    /* EN CASO DE NAVEGAR CON LAS FLECHAS DEL NAVEGADOR, SE DA DE BAJA LA SESIÓN CON EL SCRIPT DE LA LINEA 21 Y SE REDIRIGE AL USUARIO 
    AL ÍNDEX PARA VOLVER A LOGEARSE */
    header("Location:http://localhost/remeras/");

  } else {
    // SE LLAMA CON 'INCLUDE' AL CÓDIGO DE VERIFICACIÓN DE PASSWORD.
    include("../includes/api/auth-api/authpass.php");
    if ($password == TRUE) {
      $array = array($email => $email, $password => $password, $administrador_1 => $administrador_1);
      $_SESSION['usuario'] = $array;
      $_SESSION['usuario'][$password] = TRUE;
      include("../inicio/inicioAdministracion.php");
    } else {
      header("Location:http://localhost/remeras/");

    }
  }
  if (isset($_POST["password"]) < 0 and isset($_POST["email"]) < 0) {
    header("Location:http://localhost/remeras/");
  }
  ?>
</body>

</html>



<?php

?>