<!DOCTYPE html>
<html>
<head>
    <title>Generador de Códigos QR</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Generador de C&oacute;digos QR</h1>
    <button id="generarQR">Generar y Enviar C&oacute;digos QR</button>
    <div id="progress-container" style="display: none;">
        <progress id="progress-bar" max="100" value="0"></progress>
        <p id="progress-label">0% completado</p>
    </div>
    <p id="mensaje"></p>

    <script>
        $(document).ready(function () {
            $('#generarQR').on('click', function () {
                $('#generarQR').prop('disabled', true); // Deshabilitar el botón durante el proceso
                $('#progress-container').show(); // Mostrar la barra de progreso

                $.ajax({
                    url: 'generar_qr.php', // Ruta al archivo PHP que genera los códigos QR
                    type: 'POST',
                    success: function (response) {
                        // Mostrar un mensaje cuando el proceso haya terminado
                        $('#mensaje').text(response);
                    },
                    error: function () {
                        // Mostrar un mensaje en caso de error
                        $('#mensaje').text('Error al generar los códigos QR.');
                    }
                });
            });
        });
    </script>
</body>
</html>
