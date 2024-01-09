<?php

$varSesion = $_SESSION["usuario"][$email];
$varSesion = $_SESSION["usuario"][$password];
if ($varSesion != $email and $varSesion != $password) {
  //include("../includes/api/auth-api/logout.php");
  header("Location:http://localhost/remeras/");
}

if ($email != TRUE and $password != TRUE) {
  include("../includes/api/auth-api/logout.php");
  exit();
} else {
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body translate="no">

    <header class="header">
      <div class="bienvenido">
        BIENVENIDO
        <?php echo $administrador_1 ?>
      </div>
    </header>
    <div class="">
      <a class="cerrar" id="sessionClose" href="../includes/api/auth-api/logout.php">CERRAR SESIÓN</a>
    </div>
    <br>
    <!-- INICIO DE DERIVACIÓN A LOS SECTORES PERMITIDOS -->
    <main class="main">
      <form action="">
        <br>
        <h1> VEMOS COMO REALIZAR ESTA SECCIÓN !!!</h1>
        <br>
      </form>
    </main>




    <?php

}
?>


</body>

</html>