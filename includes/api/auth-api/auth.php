<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css/auth.css">
  <title>T-SHIRT</title>
</head>

<body translate="no">

  <?php
  //INICIO DE COMPROBACIÓN DE EMAIL INGRESADO CON EL REGISTRADO EN 'DB'.
  
  if (isset($_POST["email"]) == "") { ?>
    <br>
    <div>
      <h1>INGRESE CON CREDENCIAL !!!</h1>
    </div>
    <br>
    <br>
    <a class='volverLogin' href='/remeras/'>
      <h2> Volver</h2>
    </a>
    <?php
  } else if ($_POST['email'] == $email) {
    // LLAMADO A LA CONEXIÓN DE DB. PARA VERIFICAR 'EMIAL' INGRESADA.
    require("../config/conexion.php");
    $consulta = "SELECT * FROM usuarios WHERE email = '$email' ";
    $result = $conn->query($consulta);
    if ($result->num_rows > 0) {
      $fila = mysqli_fetch_array($result);
      if ($fila[1] == $email) {
        $email = TRUE;
        return $email;
      } else {
        return $email = "";
      }
    } else {
      return ($email = "");
    }
  } else {
    echo "SESSION CLOSE, LOGIN EGEIN";
  }
  $conn->close();
  ?>
</body>

</html>