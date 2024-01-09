<?php 
session_start();

  if (!$_SESSION['usuario'][$password] = $password) {
    session_destroy();
    header("Location: ../index.php");
    
  }else {
    header("Location: ../inicio/inicio.php");  
  }

?>