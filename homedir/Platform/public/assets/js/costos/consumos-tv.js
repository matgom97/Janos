let total;

document.addEventListener("DOMContentLoaded", function () {
  const entities = ["sensor.home_energy_meter_gen5_electric_consumption_kwh_3"];
  function calculateDailyConsumption(data) {
    const dailyData = [];
    let previousEntry = data[0];
    data.sort((a, b) => new Date(a.x) - new Date(b.x));
    for (let i = 1; i < data.length; i++) {
      const currentEntry = data[i];
      const currentDate = new Date(currentEntry.x);
      const previousDate = new Date(previousEntry.x);
      if (currentDate.getDate() !== previousDate.getDate()) {
        if (isNaN(currentEntry.y)) {
          let nextValidEntry = data.slice(i).find((entry) => !isNaN(entry.y));
          if (nextValidEntry) {
            currentEntry.y = nextValidEntry.y;
          }
        }
        const y = currentEntry.y - previousEntry.y;
        const x = previousEntry.x;
        dailyData.push({ x, y });
        previousEntry = currentEntry;
      }
    }

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
    if (historyData && Array.isArray(historyData) && historyData.length > 0) {
    const data = historyData[0].map((entry) => {
      if (!entry.last_changed || !entry.state) {
        console.error("Invalid entry:", entry);
        return null;
      }

      const x = new Date(entry.last_changed).toISOString();
      const y = Number(entry.state);

      if (isNaN(Date.parse(x))) {
        console.error("Invalid date:", entry.last_changed);
      }

      if (isNaN(y)) {
        console.error("Invalid state:", entry.state);
      }

    /*   console.log("t:", x, "y:", y); */
      return { x, y };
    });

    const dailyData = calculateDailyConsumption(data);

   /*  dailyData.forEach((entry) => console.log(entry)); */

    return dailyData;
  }
  }

  async function prepareDataForChartJS2() {
    const datasets = [];

    for (const entity of entities) {
      const historyData = await getHistoryData(entity);
      datasets.push({
        label: "Televisor Kwh",
        data: historyData,
        fill: false,
        borderColor: "rgb(75, 192, 192)",
        tension: 0.1,
      });
    }
    return datasets;
  }

  async function createChart() {
    const ctx1 = document.getElementById("ctx1").getContext("2d");

    const datasets = await prepareDataForChartJS2();
    if (datasets[0].data !== undefined){
  /*   console.log("Datasets for Chart.js:", datasets); */
    datasets[0].backgroundColor = "#36a2eb"; // Color cyan
    total = datasets[0].data.reduce((sum, data) => sum + data.y, 0);
    document.querySelector(".bar-unit-1").textContent =
      total.toFixed(2) + " " + "Kwh";

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
            },
          },
        },
      },
    });}
  }

  createChart();
});
