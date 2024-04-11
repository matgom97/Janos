<?php
// Agregamos la librer�a para generar c�digos QR
require "phpqrcode/qrlib.php";

// Conexi�n a la base de datos MySQL (ajusta los valores seg�n tu configuraci�n)
$servername = "localhost";
$username = "janoscom_jzapata";
$password = "Atapaz_1972";
$database = "janoscom_qr_code";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexi�n
if ($conn->connect_error) {
    die("Error de conexi�n a la base de datos: " . $conn->connect_error);
}

// Consulta SQL para obtener los valores desde una tabla (ajusta la consulta seg�n tu tabla)
$sql = "SELECT * FROM datos";
$result = $conn->query($sql);

// Comprobar si hay resultados
$numGenerados = 0; // Variable para contar la cantidad de c�digos generados

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Obtener el valor de la columna
        $contenido = $row['documento'];

        // Declaramos la ruta y nombre del archivo a generar
        $filename = 'QR_CODES/' . $contenido . '.png';

        // Par�metros de Configuraci�n
        $tama�o = 10; // Tama�o de Pixel
        $level = 'Q'; // // Precisi�n: L Baja M = Mediana Q = Alta H= M�xima
        $framSize = 3; // Tama�o en blanco

        // Enviamos los par�metros a la funci�n para generar el c�digo QR
        QRcode::png($contenido, $filename, $level, $tama�o, $framSize);

        // Enviamos el c�digo QR por correo
        $destinatario = $row['email1']; // Obt�n la direcci�n de correo de la base de datos
        $remitente = 'jose.zapata@ucc.edu.co'; // Direcci�n de correo del remitente
        $asunto = 'C�digo QR generado'; // Asunto del correo
        $mensaje = 'Adjunto encontrar�s el c�digo QR generado.'; // Mensaje del correo

        $headers = 'From: ' . $remitente;

        if (mail($destinatario,  $filename, $asunto, $mensaje, $headers)) {
            $numGenerados++;
            $progreso = (($numGenerados / $result->num_rows) * 100);
            echo "<script>
                    $('#progress-bar').val($progreso);
                    $('#progress-label').text('$progreso% completado');
                  </script>";
        } else {
            echo "Error al enviar el correo para el c�digo QR: $contenido";
        }
    }
}

// Cerrar la conexi�n a la base de datos
$conn->close();

// Devolver el mensaje de finalizaci�n con el n�mero de c�digos enviados
echo "<script>
        $('#mensaje').text('Todos los c�digos QR han sido enviados ($numGenerados de " . $result->num_rows . ").');
        $('#generarQR').prop('disabled', false); // Habilitar el bot�n
      </script>";
?>
