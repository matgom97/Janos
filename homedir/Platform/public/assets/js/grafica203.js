const entityId22 = 'switch.node_30';
const entityId11 = 'switch.node_31';
const startDate1 = moment().subtract(30, 'days').startOf('day').toISOString();
const endDate1 = moment().endOf('day').toISOString();
//const accessToken1 = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJmMTE4Y2U5NmQwYjk0OGY0ODZkZWIwNmQwN2I1NzY3YiIsImlhdCI6MTY4NDM0MDA3NiwiZXhwIjoxOTk5NzAwMDc2fQ.Q_b8z5eFUa9eNb2kzMufqDKRpvPAV4aKePb_Zcu8_d8';


const baseUrl = 'https://janosbems.duckdns.org/api';
const accessToken1 = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhM2RhNGQ4YjE1NGI0ZjkxOTgwYmYxZTBmNTQwNTg5NSIsImlhdCI6MTY5ODIwMjk4MSwiZXhwIjoyMDEzNTYyOTgxfQ.ueg1XYgm1PsyJCIGltXNHZn3aWsAoKra2YoFXQzkuL8';



const url11 = 'https://janosbems.duckdns.org/api/history/period/${startDate1}?end_time=${endDate1}&filter_entity_id=${entityId11}';
const url22 = 'https://janosbems.duckdns.org/api/history/period/${startDate1}?end_time=${endDate1}&filter_entity_id=${entityId22}';

//const url11 = 'https://hotelsanmarcos.duckdns.org/api/history/period/${startDate1}?end_time=${endDate1}&filter_entity_id=${entityId11}';
//const url22 = 'https://hotelsanmarcos.duckdns.org/api/history/period/${startDate1}?end_time=${endDate1}&filter_entity_id=${entityId22}';

const options11 = {
  method: 'GET',
  headers: {
    Authorization: 'Bearer ${accessToken1}'
  }
};

Promise.all([fetch(url11, options11), fetch(url22, options11)])
  .then(responses => Promise.all(responses.map(response => response.json())))
  .then(data => {
    const historyData11 = data[0][0];
    const historyData22 = data[1][0];

    console.log('History Data 11:', historyData11);
    console.log('History Data 22:', historyData22);

    const calculateDuration = (data) => {
      const durationsByDay = {};

      for (const item of data) {
        const date = moment(item.last_changed).format('MMM D');
        const duration = item.state === 'on' ? 1 : 0;

        if (durationsByDay[date]) {
          durationsByDay[date] += duration;
        } else {
          durationsByDay[date] = duration;
        }
      }

      const dates = Object.keys(durationsByDay);
      const durationData = dates.map(date => durationsByDay[date]);

      return {
        dates,
        durationData
      };
    };

    const durations11 = calculateDuration(historyData11);
    const durations22 = calculateDuration(historyData22);
    const consumptions11 = durations11.durationData.map(duration => duration * 0.4 );
    const consumptions22 = durations22.durationData.map(duration => duration * 0.4 );

    const ctx6 = document.getElementById('chart1').getContext('2d');
    const chart6 = new Chart(ctx6, {
      type: 'bar',
      data: {
        labels: durations11.dates,
        datasets: [{
          label: 'Luz Habitacion',
          data: consumptions11,
          backgroundColor: 'rgba(255, 99, 132, 0.8)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 3
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            title: {
              display: true,
              text: 'Consumo (kWh)'
            },
            ticks: {
              callback: value => '${value} kWh'
            }
          }
        }
      }
    });

    const ctx7 = document.getElementById('chart2').getContext('2d');
    const chart7 = new Chart(ctx7, {
      type: 'bar',
      data: {
        labels: durations22.dates,
        datasets: [{
          label: 'Luz Bano',
          data: consumptions22,
          backgroundColor: 'rgba(54, 162, 235, 0.8)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 3
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            title: {
              display: true,
              text: 'Consumo (kWh)'
            },
            ticks: {
              callback: value => '${value} kWh'
            }
          }
        }
      }
    });
  })
  .catch(error => {
    console.error('Error al realizar la solicitud a la API:', error);
  });
