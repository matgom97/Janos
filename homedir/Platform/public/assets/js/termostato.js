const entityIdtemp204 = 'sensor.ac_master_air_temperature';
//const accessToken3 = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJmMTE4Y2U5NmQwYjk0OGY0ODZkZWIwNmQwN2I1NzY3YiIsImlhdCI6MTY4NDM0MDA3NiwiZXhwIjoxOTk5NzAwMDc2fQ.Q_b8z5eFUa9eNb2kzMufqDKRpvPAV4aKePb_Zcu8_d8';

const accessToken3 = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhM2RhNGQ4YjE1NGI0ZjkxOTgwYmYxZTBmNTQwNTg5NSIsImlhdCI6MTY5ODIwMjk4MSwiZXhwIjoyMDEzNTYyOTgxfQ.ueg1XYgm1PsyJCIGltXNHZn3aWsAoKra2YoFXQzkuL8';


// Función para actualizar el gráfico de temperatura
function updateTemperatureChart(chart, newData) {
  chart.data.labels.push(newData.time);
  chart.data.datasets[0].data.push(newData.temperature);
  if (chart.data.labels.length > 10) {
    chart.data.labels.shift();
    chart.data.datasets[0].data.shift();
  }
  chart.update();
}

// Función para hacer la solicitud y actualizar el gráfico de temperatura
function makeTemperatureRequest() {
  fetch(`https://janosbems.duckdns.org/api/states/${entityIdtemp204}`, {
    headers: {
      'Authorization': `Bearer ${accessToken3}`
    }
  })
    .then(response => response.json())
    .then(data => {
      const temperature = data.state;
      console.log(`La temperatura actual es: ${temperature}`);
      document.getElementById("temperatura").innerHTML = `${temperature} &#8451;`;

     
    })
    
}




// Obtener los datos y actualizar los gráficos cada 5 segundos

makeTemperatureRequest();

setInterval(makeTemperatureRequest, 500000);