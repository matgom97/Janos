const entityIdtemp = 'sensor.ac_master_air_temperature';
//const accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJmMTE4Y2U5NmQwYjk0OGY0ODZkZWIwNmQwN2I1NzY3YiIsImlhdCI6MTY4NDM0MDA3NiwiZXhwIjoxOTk5NzAwMDc2fQ.Q_b8z5eFUa9eNb2kzMufqDKRpvPAV4aKePb_Zcu8_d8';

function updateChart(chart, newData) {
  chart.data.labels.push(newData.time);
  chart.data.datasets[0].data.push(newData.temperature);
  if (chart.data.labels.length > 10) {
    chart.data.labels.shift();
    chart.data.datasets[0].data.shift();
  }
  chart.update();
}

function makeRequest() {
  fetch(`https://hotelsanmarcos.duckdns.org/api/states/${entityIdtemp}`, {
    headers: {
      'Authorization': `Bearer ${accessToken}`
    }
  })
  .then(response => response.json())
  .then(data => {
    const temperature = data.state;
    console.log(`La temperatura actual es: ${temperature}`);
    document.getElementById("temperatura").innerHTML = `${temperature} &#8451;`;

    const time = new Date().toLocaleTimeString();
    updateChart(chart, { temperature, time });
  })
  .catch(error => {
    console.error('Error making the request:', error);
  });
}

const ctx = document.getElementById('grafica-temperatura').getContext('2d');
const chart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: 'Temperatura',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [],
      fill: false,
    }]
  },
  options: {
    responsive: true,
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});

setInterval(makeRequest, 5000);
makeRequest();
