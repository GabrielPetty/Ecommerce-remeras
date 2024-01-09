<?php

// SECCIÓN PARA EXTRAER LA PASSWORD HASHEADA Y COMPARARLA CON EL INGRESO

if (isset($_POST["password"]) > 0) {

  require("../config/conexion.php");

  $consulta = "SELECT * FROM usuarios ";
  $result = $conn->query($consulta);
  if ($result->num_rows > 0) {
    $fila = mysqli_fetch_array($result);
    $password_hash = $fila["2"];
    if (password_verify($password, $password_hash)) {
      return $password;
    } else {
      return ($password = FALSE);
    }
  } else {
    echo "ERROR...!!!";
  }
  $conn->close();
} else {
  header("Location:http://localhost/remeras/");
}
?>