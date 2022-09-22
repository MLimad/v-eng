<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "v-eng";
$option = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {

    $con = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password,$option);
  // set the PDO error mode to exception

  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {

  echo "Connection failed: " . $e->getMessage();

}