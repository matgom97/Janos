document.addEventListener("DOMContentLoaded", function () {
  const entities = ["climate.node_49"];
  function calculateDailyAverageTemperature(data) {
    const dailyData = [];
    let sum = 0;
    let count = 0;
    let previousDate = new Date(data[0].x).toISOString().split('T')[0];
  
    data.forEach((entry) => {
      const currentDate = new Date(entry.x).toISOString().split('T')[0];
  
      if (currentDate === previousDate) {
        sum += entry.y;
        count++;
      } else {
        dailyData.push({ x: previousDate, y: Math.round(sum / count) });
        sum = entry.y;
        count = 1;
        previousDate = currentDate;
      }
    });
  
    dailyData.push({ x: previousDate, y: Math.round(sum / count) });
  
    return dailyData;
  }
  
  async function getHistoryData(entityId) {
    const startDate = moment().subtract(8, "days").startOf("day").toISOString();
    const endDate = moment().endOf("day").toISOString();
    const response = await fetch(
      `https://janosbems.duckdns.org/api/history/period/${startDate}?end_time=${endDate}&filter_entity_id=${entityId}`,
      {
        method: "GET",
        headers: {
          Authorization:
            "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhM2RhNGQ4YjE1NGI0ZjkxOTgwYmYxZTBmNTQwNTg5NSIsImlhdCI6MTY5ODIwMjk4MSwiZXhwIjoyMDEzNTYyOTgxfQ.ueg1XYgm1PsyJCIGltXNHZn3aWsAoKra2YoFXQzkuL8",
          "Content-Type": "application/json",
        },
      }
    );
    const historyData = await response.json();
    const data = historyData[0].map((entry) => {
      if (!entry.last_changed || !entry.attributes.current_temperature) {
        console.error("Invalid entry:", entry);
        return null;
      }
  /*     const x = new Date(entry.last_changed).toISOString();  */
      const x = moment(entry.last_changed).format('YYYY-MM-DDTHH:mm:ss.SSS[Z]').toString();

      console.log("Original date:", entry.last_changed, "Formatted date:", x);
      const y = entry.attributes.current_temperature;
      if (isNaN(Date.parse(x))) {
        console.error("Invalid date:", entry.last_changed);
      }
      if (isNaN(y)) {
        console.error("Invalid temperature:", entry.attributes.current_temperature);
      }
      console.log("t:", x, "y:", y);
      return { x, y };
    });
    const dailyData = calculateDailyAverageTemperature(data);
    dailyData.forEach((entry) => console.log(entry));
    return dailyData;
  }
  async function prepareDataForChartJS() {
    const datasets = [];
    for (const entity of entities) {
      const historyData = await getHistoryData(entity);
      datasets.push({
        label: 'Termostato °C',
        data: historyData.map(entry => ({ x: new Date(entry.x), y: entry.y })),
        backgroundColor: "rgb(75, 192, 192)",
      });
      
    }
    return datasets;
  }
  
  async function createChart() {
    const ctx1 = document.getElementById("ctx3").getContext("2d");
    
    const datasets = await prepareDataForChartJS();
    console.log("Datasets for Chart.js:", datasets);
    
    new Chart(ctx1, {
      type: "bar",
      data: {
        datasets: [datasets[0]],
      },
      options: {
        scales: {
          x: {
            type: "time",
            time: {
              unit: "day",
              displayFormats: {
                day: 'MMM d', // Customize the display format as needed
              },
            },
          },
        },
      },
    });

    let sum = 0;
let count = 0;
for (const dataset of datasets) {
  for (const data of dataset.data) {
    sum += data.y;
    count++;
  }
}
const average = sum / count;
document.querySelector('.bar-unit-3').textContent = ` ${average.toFixed(2)}°C`;


  }

  createChart();
});
