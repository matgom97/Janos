const entityId3 = "climate.node_49";
const startDate = moment().subtract(8, "days").startOf("day").toISOString();
const endDate = moment().subtract(0, "days").startOf("day").toISOString();

//const baseUrl = "https://bmsjanos.duckdns.org/api";
const baseUrl = "https://janosbems.duckdns.org/api";
const accessToken =
  "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhM2RhNGQ4YjE1NGI0ZjkxOTgwYmYxZTBmNTQwNTg5NSIsImlhdCI6MTY5ODIwMjk4MSwiZXhwIjoyMDEzNTYyOTgxfQ.ueg1XYgm1PsyJCIGltXNHZn3aWsAoKra2YoFXQzkuL8";

const url3 = `${baseUrl}/history/period/${startDate}?end_time=${endDate}&filter_entity_id=${entityId3}`;

const options = {
  method: "GET",
  headers: {
    Authorization: `Bearer ${accessToken}`,
  },
};
Promise.all([fetch(url3, options)])
  .then((responses) => Promise.all(responses.map((response) => response.json())))
  .then((data) => {
    // Verifica la estructura de la respuesta real
    console.log('Datos históricos de temperatura:', data);

    // Ajusta la lógica para obtener los datos correctamente
    const temperatureData = data[0]; // Asumiendo que los datos están en el primer elemento del array

    // Procesa los datos de temperatura
    const labelstemperature = temperatureData.map((item) => moment(item.last_changed).format("MMM D"));
    const temperatureValues = temperatureData.map((item) => {
      if (item.attributes && item.attributes.temperature !== undefined) {
        return item.attributes.temperature;
      } else {
        return null; // o algún valor por defecto si la temperatura no está definida
      }
    });

    // Filtra los valores nulos
    const validTemperatureValues = temperatureValues.filter(value => value !== null);

    // Calcula el promedio de temperatura
    const sum = validTemperatureValues.reduce((a, b) => a + b, 0);
    const average = sum / validTemperatureValues.length;
    console.log('Promedio de temperatura:', average);

    // Crea la gráfica
    const ctx3 = document.getElementById("graficatemperatura");
    const temperatureChart = new Chart(ctx3, {
      type: "bar", // Cambiar el tipo de gráfico a 'bar' para gráficas de barras
      data: {
        labels: labelstemperature,
        datasets: [
          {
            label: "Temperatura",
            backgroundColor: "rgb(75, 192, 192)",
            borderColor: "rgb(75, 192, 192)",
            data: validTemperatureValues,
            fill: false,
          },
        ],
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  })
  .catch((error) => {
    console.error("Error al realizar la solicitud a la API:", error);
  });
