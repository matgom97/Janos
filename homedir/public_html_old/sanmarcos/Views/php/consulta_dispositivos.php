<?php
// Incluimos el archivo de conexión
require_once 'conexion.php';

// Consulta los datos históricos del dispositivo
$dispositivo = "Int Habitacion 204";
$query = "SELECT fecha_estado, estado FROM dispositivos WHERE nom_dispositivo = '$dispositivo'";
$result = mysqli_query($conn, $query);

// Crea arreglos para almacenar las fechas y los estados
$fechas = array();
$estados = array();

while ($row = mysqli_fetch_assoc($result)) {
  $fechas[] = $row['fecha_estado'];
  $estados[] = $row['estado'];
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
