const apiUrl = 'https://cors-anywhere.herokuapp.com/https://n1r11o7o7lq3kusr1aewq7ttxgui8d68.ui.nabu.casa/api';

const apikey = 'live_63780e030066347e667f2d7828a1c4af997612dd8d04065e61d6f3a70a16514e';
const token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhODk2ZTQwZGNkNzQ0OGJmYjRkMWZiNjU5ODMxYmY2ZiIsImlhdCI6MTY3OTQ0NTA0OCwiZXhwIjoxOTk0ODA1MDQ4fQ.bKY943sDdMCKDKcz64VnqYnarHaWZi9E33brekUnYHM';

const headers = {
  'Authorization': `Bearer ${token}`,
  'x-ha-access': apikey,
  'Content-Type': 'application/json',
  'Access-Control-Allow-Origin': '*',
  'x-requested-with': 'XMLHttpRequest'
};

const data = {
  entity_id: 'switch.node_31',
  end_time: 'now',
  start_time: '2021-03-25T00:00:00.000000+00:00'
};

const xhr3 = new XMLHttpRequest();
xhr3.withCredentials = true;

xhr3.addEventListener("readystatechange", function() {
  if(this.readyState === 4) {
    const data = JSON.parse(this.responseText);
    // procesa los datos obtenidos de Home Assistant
    const timestamps = data.map(entry => new Date(entry.last_changed).getTime());
    const states = data.map(entry => entry.state === 'on' ? 1 : 0);

    // crea la gráfica
    const chartData = {
      labels: timestamps,
      datasets: [
        {
          label: 'Encendido',
          data: states,
          borderColor: '#3e95cd',
          fill: false
        }
      ]
    };

    const chartOptions = {
      title: {
        display: true,
        text: 'Tiempo de encendido de switch.node_31'
      },
      scales: {
        xAxes: [{
          type: 'time',
          time: {
            unit: 'hour',
            displayFormats: {
              hour: 'MMM D, hA'
            }
          },
          distribution: 'linear',
          ticks: {
            source: 'data',
            autoSkip: true,
            maxTicksLimit: 20
          }
        }],
        yAxes: [{
          ticks: {
            beginAtZero: true,
            suggestedMax: 1
          }
        }]
      },
      tooltips: {
        callbacks: {
          label: function(tooltipItem, data) {
            const state = data.datasets[tooltipItem.datasetIndex].label;
            const time = new Date(tooltipItem.xLabel).toLocaleString();
            return `${state}: ${time}`;
          }
        }
      }
    };

    const ctx = document.getElementById('myChart5').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'line',
      data: chartData,
      options: chartOptions
    });
  }
});




xhr3.open("POST", apiUrl);
xhr3.setRequestHeader('Authorization', headers.Authorization);
xhr3.setRequestHeader('x-ha-access', headers['x-ha-access']);
xhr3.setRequestHeader('Content-Type', headers['Content-Type']);
xhr3.setRequestHeader('Access-Control-Allow-Origin', headers['Access-Control-Allow-Origin']);
xhr3.setRequestHeader('x-requested-with', headers['x-requested-with']);
xhr3.send(JSON.stringify(data));


