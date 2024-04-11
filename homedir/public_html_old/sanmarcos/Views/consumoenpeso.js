const entityId12 = 'sensor.home_energy_meter_gen5_electric_consumption_w_4';
const entityId21 = 'sensor.home_energy_meter_gen5_electric_consumption_kwh_2_2';
const entityId31 = 'switch.node_30';
const entityId41 = 'switch.node_31';
const startDate21 = moment().subtract(30, 'days').startOf('day').toISOString();
const endDate12 = moment().endOf('day').toISOString();
//const accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJmMTE4Y2U5NmQwYjk0OGY0ODZkZWIwNmQwN2I1NzY3YiIsImlhdCI6MTY4NDM0MDA3NiwiZXhwIjoxOTk5NzAwMDc2fQ.Q_b8z5eFUa9eNb2kzMufqDKRpvPAV4aKePb_Zcu8_d8';
const accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhM2RhNGQ4YjE1NGI0ZjkxOTgwYmYxZTBmNTQwNTg5NSIsImlhdCI6MTY5ODIwMjk4MSwiZXhwIjoyMDEzNTYyOTgxfQ.ueg1XYgm1PsyJCIGltXNHZn3aWsAoKra2YoFXQzkuL8';


const url12 = `https://bmsjanos.duckdns.org/api/history/period/${startDate21}?end_time=${endDate12}&filter_entity_id=${entityId12}`;
const url21 = `https://bmsjanos.duckdns.org/api/api/history/period/${startDate21}?end_time=${endDate12}&filter_entity_id=${entityId21}`;
const url31 = `https://bmsjanos.duckdns.org/api/api/history/period/${startDate21}?end_time=${endDate12}&filter_entity_id=${entityId31}`;
const url41 = `https://bmsjanos.duckdns.org/api/api/history/period/${startDate21}?end_time=${endDate12}&filter_entity_id=${entityId41}`;


//const url41 = `https://hotelsanmarcos.duckdns.org/api/history/period/${startDate21}?end_time=${endDate12}&filter_entity_id=${entityId41}`;

const options12 = {
  method: 'GET',
  headers: {
    Authorization: `Bearer ${accessToken}`
  }
};

Promise.all([fetch(url12, options), fetch(url21, options), fetch(url31, options), fetch(url41, options)])
  .then(responses => Promise.all(responses.map(response => response.json())))
  .then(data => {
    const consumptionData1 = data[0][0];
    const consumptionData2 = data[1][0];
    const switchData1 = data[2][0];
    const switchData2 = data[3][0];
    
const labels = Array.from(new Set(consumptionData1.map(item => moment(item.last_changed).format('MMM D'))));
    
    // Sumar los valores de consumo y los valores de los interruptores por día
    const combinedValues = [];
    for (let i = 0; i < consumptionData1.length; i++) {
      const consumptionValue1 = parseFloat(consumptionData1[i].state);
      const consumptionValue2 = parseFloat(consumptionData2[i].state);
      const switchValue1 = switchData1[i].state === 'on' ? 1 : 0;
      const switchValue2 = switchData2[i].state === 'on' ? 1 : 0;
      const totalValue = consumptionValue1 + consumptionValue2 + switchValue1 + switchValue2;
      combinedValues.push(totalValue);
    }

    console.log('Combined Values:', combinedValues);

    const ctx = document.getElementById('combinedChart').getContext('2d');
    const combinedChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [
          {
            label: 'Consumo Total',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: combinedValues,
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
