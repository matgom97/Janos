<?php
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Bogota");

$servername = "localhost";
$database = "janoscom_bms";
$username = "janoscom_janos";
$password = "bms_janos#!";
// Creamos la conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Validamos la conexión
if (!$conn) {
    die("Fallo la conexion: " . mysqli_connect_error());
}

// Obtenemos los datos de la base de datos
$query = "SELECT * FROM dispositivos ORDER BY fecha_estado ASC";
$result = mysqli_query($conn, $query);

// Creamos los arreglos para almacenar los datos
$encendidos = array();
$apagados = array();

// Recorremos los resultados y almacenamos los estados
while ($row = mysqli_fetch_assoc($result)) {
    $estado = $row['estado'];
    $fecha_estado = strtotime($row['fecha_estado']);

    if ($estado == 'Encendido') {
        $encendidos[] = array($fecha_estado * 1000, 1); // Multiplicamos por 1000 para convertirlo a milisegundos
    } elseif ($estado == 'Apagado') {
        $apagados[] = array($fecha_estado * 1000, 0);
    }
}

// Cerramos la conexión
mysqli_close($conn);
?>
