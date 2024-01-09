<?php 

  $hostname = 'localhost:3306';
  $username = 'root';
  $passname = '';
  $dbname = 't_shirt';

  $conn = new mysqli($hostname, $username, $passname, $dbname);
  
if ($conn->connect_error){
  die('ERROR CONECTION...'. $conn->connect_error);

?>
