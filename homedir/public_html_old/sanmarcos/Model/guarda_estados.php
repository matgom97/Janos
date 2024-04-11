<?php
header('Content-Type: text/html; charset=UTF-8');
include 'config.php';
date_default_timezone_set("America/Bogota");

//recibimos todas las variables de los dispositivos de interruptores
$piso=$_POST['num_piso'];
$hab=$_POST['num_hab'];
$disp=$_POST['nom_disp'];
$estado=$_POST['estado'];
$fecha_estado = date("Y-m-d H:i:s");
	 
 $bms_query='insert into dispositivos(num_piso,num_hab,nom_dispositivo,estado,fecha_estado)
		VALUES(\''.$piso.'\',\''.$hab.'\',\''.$disp.'\',\''.$estado.'\',\''.$fecha_estado.'\');';
  mysql_query($bms_query) or die(mysql_error());
?>
