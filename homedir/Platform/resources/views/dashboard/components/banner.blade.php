<banner>
    <logo></logo>
    <div class="text-banner">
        <div class="decoration">
            <input type="text" class="search-input" placeholder="Buscar" name="" id="">
            <i class='bx bx-sun'> </i>
            <div class="degrees" id="temperature" style="margin: 0px 8px 0px 0px;">
                Cargando temperatura...
            </div>
        
            <i class='bx bx-time-five'> </i> 
            <div id="time" class="time">
           
            </div>
        </div>
        <p class="welcome-text" style="font-weight: 400; position: absolute;    ">
            Bienvenido al {{ $hotel->hotel_nombre }}
        </p>
    </div>
    <div class="city-lineart">

            @if(!empty($hotel->hotel_imagen))
            <div class="logo-hotel" style="background-image: url({{ asset('imagenes/' . $hotel->hotel_imagen) }})"></div>
        @else
            <div class="logo-hotel" style="background-image: url({{ asset('../assets/img/hotel.jpg') }})"></div>
        @endif
    </div>
</banner>

<script>
    // Función para obtener la hora y la fecha actual en formato legible
  // Función para obtener la hora y la fecha actual en formato legible
  function obtenerFechaHoraActual() {
    const ahora = new Date();

    // Formatear la fecha
    const optionsFecha = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };
    const fechaFormateada = ahora.toLocaleDateString('es-ES', optionsFecha);

    // Formatear la hora en formato de 12 horas (AM/PM)
    const optionsHora = { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true, };
    const horaFormateada = ahora.toLocaleTimeString('es-ES', optionsHora);

    // Crear un objeto que contenga la fecha y la hora
    const fechaHoraActual = {
        fecha: fechaFormateada,
        hora: horaFormateada
    };

    return fechaHoraActual;
}

// Función para mostrar la fecha y hora actual en los elementos 'p'
function mostrarHora() {
    const elementoHora = document.getElementById('time');
    
    const { hora } = obtenerFechaHoraActual();
    
    elementoHora.textContent = hora;
}

// Actualizar la hora cada segundo
setInterval(mostrarHora, 1000);

// Mostrar la hora actual al cargar la página
mostrarHora();

</script>
<script>
    // Coordenadas geográficas de Barranquilla, Colombia
    const lat = 10.9639;
    const lon = -74.7962;

    // Tu clave de API de OpenWeatherMap
    const apiKey = '6743c719c6085d045d516eeda15b3a9e';

    // URL de la API de OpenWeatherMap para obtener la temperatura actual en grados Celsius
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric`;

    // Función para obtener la temperatura actual
    async function obtenerTemperatura() {
        try {
            const response = await fetch(apiUrl);
            const data = await response.json();

            if (data.main && data.main.temp) {
                const temperaturaCelsius = Math.round(data.main.temp);
                document.getElementById('temperature').textContent = ` ${temperaturaCelsius}°C   ` + '|';
            } else {
                document.getElementById('temperature').textContent = 'No se pudo obtener la temperatura';
            }
        } catch (error) {
            console.error('Error al obtener la temperatura:', error);
            document.getElementById('temperature').textContent = 'Error al obtener la temperatura';
        }
    }

    // Obtener la temperatura al cargar la página
    obtenerTemperatura();
</script>

<style>
    .decoration{
        display: flex;
    width: 100% !important;
    color: white;
    justify-content: flex-start;
    align-items: center;
    padding: 5px 0px 5px 5px;
    border-radius: 6px;
    }

    .search-input {
    border: 3px solid white;
    border-radius: 3px;
    margin-right: 10px;
    font-weight: 500;
    width: 25%;
}
</style>