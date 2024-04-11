<?php
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Bogota");

$servername = "localhost";
$database = "janoscom_bms";
$username = "janoscom_janos";
$password = "bms_janos#!";

// Creamos la conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $database);
// Validamos la conexión
if (!$conn) {
  die("Fallo la conexión: " . mysqli_connect_error());
}
?>
