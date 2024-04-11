<?php

header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Bogota");

$servername = "localhost";
$database = "janoscom_bms";
$username = "janoscom_janos";
$password = "bms_janos#!";
// Creamos la Conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Se valida la Conexion
if (!$conn) {
      die("Fallo la conexion: " . mysqli_connect_error());
}
 echo "Conexion Exitosa";
 
// Recibimos todas las variables de los dispositivos de interruptores
$piso=$_POST['num_piso'];
$hab=$_POST['num_hab'];
$disp=$_POST['nom_disp'];
$estado=$_POST['estado'];
$fecha_estado = date("Y-m-d H:i:s");

$bms_query='insert into dispositivos(num_piso,num_hab,nom_dispositivo,estado,fecha_estado)
   VALUES(\''.$piso.'\',\''.$hab.'\',\''.$disp.'\',\''.$estado.'\',\''.$fecha_estado.'\');';
   
if (mysqli_query($conn, $bms_query)) {
      echo "Estado Guardado";
} else {
      echo "Error: " . $bms_query . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>




