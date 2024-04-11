const entityId1 = 'sensor.home_energy_meter_gen5_electric_a';
const entityId2 = 'sensor.home_energy_meter_gen5_electric_w';
const entityId3 = 'sensor.ac_master_air_temperature';
const startDate = moment().subtract(7, 'days').startOf('day').toISOString();
const endDate = moment().endOf('day').toISOString();
//const accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJmMTE4Y2U5NmQwYjk0OGY0ODZkZWIwNmQwN2I1NzY3YiIsImlhdCI6MTY4NDM0MDA3NiwiZXhwIjoxOTk5NzAwMDc2fQ.Q_b8z5eFUa9eNb2kzMufqDKRpvPAV4aKePb_Zcu8_d8';

const baseUrl = 'https://bmsjanos.duckdns.org/api';
const accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhM2RhNGQ4YjE1NGI0ZjkxOTgwYmYxZTBmNTQwNTg5NSIsImlhdCI6MTY5ODIwMjk4MSwiZXhwIjoyMDEzNTYyOTgxfQ.ueg1XYgm1PsyJCIGltXNHZn3aWsAoKra2YoFXQzkuL8';





const url1 = `https://bmsjanos.duckdns.org/api/history/period/${startDate}?end_time=${endDate}&filter_entity_id=${entityId1}`;
const url2 = `https://bmsjanos.duckdns.org/api/history/period/${startDate}?end_time=${endDate}&filter_entity_id=${entityId2}`;
const url3 = `https://bmsjanos.duckdns.org/api/history/period/${startDate}?end_time=${endDate}&filter_entity_id=${entityId3}`;

const options = {
  method: 'GET',
  headers: {
    Authorization: `Bearer ${accessToken}`
  }
};

Promise.all([fetch(url1, options), fetch(url2, options), fetch(url3, options)])
  .then(responses => Promise.all(responses.map(response => response.json())))
  .then(data => {
    const consumptionData1 = data[0][0];
    const consumptionData2 = data[1][0];
    const temperatureData = data[2][0];
    
    const labels = Array.from(new Set(consumptionData1.map(item => moment(item.last_changed).format('MMM D'))));
    const values1 = consumptionData1.map(item => item.state);
    const values2 = consumptionData2.map(item => item.state);
    const temperatureValues = temperatureData.map(item => item.state);

const ctx1 = document.getElementById('powerConsumptionChart1').getContext('2d');
const consumptionChart1 = new Chart(ctx1, {
  type: 'bar', // Cambiar el tipo de gráfico a 'bar' para gráficas de barras
  data: {
    labels: labels,
    datasets: [
      {
        label: 'Consumo eléctrico Aire Acondicionado (kWh)',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: values1,
        fill: false,
      }
    ]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

const ctx2 = document.getElementById('powerConsumptionChart2').getContext('2d');
const consumptionChart2 = new Chart(ctx2, {
  type: 'bar', // Cambiar el tipo de gráfico a 'bar' para gráficas de barras
  data: {
    labels: labels,
    datasets: [
      {
        label: 'Consumo eléctrico TV (kWh)',
        backgroundColor: 'rgb(54, 162, 235)',
        borderColor: 'rgb(54, 162, 235)',
        data: values2,
        fill: false,
      }
    ]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

const ctx3 = document.getElementById('grafica-temperatura').getContext('2d');
const temperatureChart = new Chart(ctx3, {
  type: 'bar', // Cambiar el tipo de gráfico a 'bar' para gráficas de barras
  data: {
    labels: labels,
    datasets: [
      {
        label: 'Temperatura',
        backgroundColor: 'rgb(75, 192, 192)',
        borderColor: 'rgb(75, 192, 192)',
        data: temperatureValues,
        fill: false,
      }
    ]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

  })
  .catch(error => {
    console.error('Error al realizar la solicitud a la API:', error);
  });
