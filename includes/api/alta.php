<?php
session_start();
error_reporting(0);
$varsession = $_SESSION['email'];
if ($varsession == null || $varsession == '') {
  header("Location:http://localhost/remeras/");
} else { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-SHIRT</title>
  </head>

  <body translate="no">

    <?php
    // VERIFICACIÓN DE INGRESOS DE DATOS POR METODO 'POST'
  
    if (isset($_POST["email"]) > 0) {
      $password = $_POST['password'];
      $email = $_POST['email'];
      echo 'INGRESO ALTA PROD. !!!';
    } else {
      echo "ERROR DE CREDENCIAL !!!";

    }

    ?>

  </body>

  </html>


<?php

}
?>