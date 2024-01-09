<?php
function conectarBaseDeDatos()
{
    $servername = "localhost:3306"; // Ojo caso de puerto contrario, cambiarlo
    $username = "root";
    $password = "";
    $dbname = "t_shirt";

    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Crear la base si no existe
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sql) !== TRUE) {
        die("Error al crear la base de datos: " . $conn->error);
    }/*else{
      echo"Base de datos creada !!!";
    }*/

    // Selecciona base de datos
    $conn->select_db($dbname);

    // Crear la tabla "retro" si no existe
    $sql = "CREATE TABLE IF NOT EXISTS retro (
        id INT AUTO_INCREMENT PRIMARY KEY,
        imagen VARCHAR(255),
        medida VARCHAR(255),
        stock INT(255),
        precio DECIMAL(65,0),
        detalle VARCHAR(255)
    )";
    if ($conn->query($sql) !== TRUE) {
        die("Error al crear la tabla 'productos': " . $conn->error);
    }

    // Crear la tabla "moderno" si no existe
    $sql = "CREATE TABLE IF NOT EXISTS moderno (
        id INT AUTO_INCREMENT PRIMARY KEY,
        imagen VARCHAR(255),
        medida VARCHAR(255),
        stock INT(255),
        precio DECIMAL(65,0),
        detalle VARCHAR(255)
    )";
    if ($conn->query($sql) !== TRUE) {
        die("Error al crear la tabla 'mod_stock': " . $conn->error);
    }


    //Crear la tabla "ficcion" si no existe 
    $sql = "CREATE TABLE IF NOT EXISTS ficcion (
      id INT AUTO_INCREMENT PRIMARY KEY,
      imagen VARCHAR(255),
      medida VARCHAR(255),
      stock INT(255),
      precio DECIMAL(65,0),
      detalle VARCHAR(255)
  )";
  if ($conn->query($sql) !== TRUE) {
      die("Error al crear la tabla 'productos': " . $conn->error);
  }

  // Crear la tabla "infantil" si no existe
  $sql = "CREATE TABLE IF NOT EXISTS infantil (
      id INT AUTO_INCREMENT PRIMARY KEY,
      imagen VARCHAR(255),
      medida VARCHAR(255),
      stock INT(255),
      precio DECIMAL(65,0),
      detalle VARCHAR(255)
  )";
  if ($conn->query($sql) !== TRUE) {
      die("Error al crear la tabla 'mod_stock': " . $conn->error);
  }

  // Crear la tabla "anime" si no existe
  $sql = "CREATE TABLE IF NOT EXISTS anime (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imagen VARCHAR(255),
    medida VARCHAR(255),
    stock INT(255),
    precio DECIMAL(65,0),
    detalle VARCHAR(255)
)";
if ($conn->query($sql) !== TRUE) {
    die("Error al crear la tabla 'mod_stock': " . $conn->error);
}

//Crear la tabla "color" si no existe 
$sql = "CREATE TABLE IF NOT EXISTS color (
  id INT AUTO_INCREMENT PRIMARY KEY,
  imagen VARCHAR(255),
  medida VARCHAR(255),
  stock INT(255),
  precio DECIMAL(65,0),
  detalle VARCHAR(255)
)";
if ($conn->query($sql) !== TRUE) {
  die("Error al crear la tabla 'productos': " . $conn->error);
}

// Crear la tabla "clasico" si no existe
$sql = "CREATE TABLE IF NOT EXISTS clasico (
  id INT AUTO_INCREMENT PRIMARY KEY,
  imagen VARCHAR(255),
  medida VARCHAR(255),
  stock INT(255),
  precio DECIMAL(65,0),
  detalle VARCHAR(255)
)";
if ($conn->query($sql) !== TRUE) {
  die("Error al crear la tabla 'mod_stock': " . $conn->error);
}




//  PARA PODER ACCEDER COMO ADMINISTRADOR, SE CREA TABLA DE ROLES Y SE DÁ PERMISO EXPECÍFICO AL ADMINISTRADOR DESDE ACÁ

    //Crear la tabla de usuarios
    
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
      id INT AUTO_INCREMENT PRIMARY KEY,
      email VARCHAR(30),
      password VARCHAR(255)
  )";
  if ($conn->query($sql) !== TRUE) {
      die("Error al crear la tabla 'usuarios': " . $conn->error);
  }

    $email = "nombre@administrador.com";
    $pass="administrador123";
    $password_hash = password_hash("$pass", PASSWORD_DEFAULT);

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows < 1) {
        $sql = "INSERT INTO usuarios (email, password )VALUE ('$email', '$password_hash')";
        $result = $conn->query($sql);
    }

    // Devolver la conexión
    
    return $conn;
}

// Llamar a la función para obtener la conexión a la base de datos
$conexion = conectarBaseDeDatos();


?>
