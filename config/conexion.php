<?php 

  $hostname = 'localhost:3306'; //también se puede usar 127.0.0.1:3306
  $username = 'root';
  $passname = '';
  $dbname = 't_shirt';

  $conn = new mysqli($hostname, $username, $passname, $dbname);
  
/*
  if (mysqli_connect_errno()){
    printf('CONEXION FALLID ...', mysqli_connect_error());
    exit();
  }echo 'CONEXION DB.'

*/

if ($conn->connect_error){
  die('ERROR CONECTION...'. $conn->connect_error);

}/*else{
  echo 'DB. CONNECT -';
}*/


?>