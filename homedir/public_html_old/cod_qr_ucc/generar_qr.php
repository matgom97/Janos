<?php
// Agregamos la librería para generar códigos QR
require "phpqrcode/qrlib.php";

// Conexión a la base de datos MySQL (ajusta los valores según tu configuración)
$servername = "localhost";
$username = "janoscom_jzapata";
$password = "Atapaz_1972";
$database = "janoscom_qr_code";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Consulta SQL para obtener los valores desde una tabla (ajusta la consulta según tu tabla)
$sql = "SELECT * FROM datos";
$result = $conn->query($sql);

// Comprobar si hay resultados
$numGenerados = 0; // Variable para contar la cantidad de códigos generados

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Obtener el valor de la columna
        $contenido = $row['documento'];

        // Declaramos la ruta y nombre del archivo a generar
        $filename = 'QR_CODES/' . $contenido . '.png';

        // Parámetros de Configuración
        $tamaño = 10; // Tamaño de Pixel
        $level = 'Q'; // // Precisión: L Baja M = Mediana Q = Alta H= Máxima
        $framSize = 3; // Tamaño en blanco

        // Enviamos los parámetros a la función para generar el código QR
        QRcode::png($contenido, $filename, $level, $tamaño, $framSize);

        // Enviamos el código QR por correo
        $destinatario = $row['email1']; // Obtén la dirección de correo de la base de datos
        $remitente = 'jose.zapata@ucc.edu.co'; // Dirección de correo del remitente
        $asunto = 'Código QR generado'; // Asunto del correo
        $mensaje = 'Adjunto encontrarás el código QR generado.'; // Mensaje del correo

        $headers = 'From: ' . $remitente;

        if (mail($destinatario,  $filename, $asunto, $mensaje, $headers)) {
            $numGenerados++;
            $progreso = (($numGenerados / $result->num_rows) * 100);
            echo "<script>
                    $('#progress-bar').val($progreso);
                    $('#progress-label').text('$progreso% completado');
                  </script>";
        } else {
            echo "Error al enviar el correo para el código QR: $contenido";
        }
    }
}

// Cerrar la conexión a la base de datos
$conn->close();

// Devolver el mensaje de finalización con el número de códigos enviados
echo "<script>
        $('#mensaje').text('Todos los códigos QR han sido enviados ($numGenerados de " . $result->num_rows . ").');
        $('#generarQR').prop('disabled', false); // Habilitar el botón
      </script>";
?>
