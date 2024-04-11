let totalKwh;

document.addEventListener("DOMContentLoaded", function () {
  const entities = ["switch.node_23", "switch.node_19"]; // Agrega las entidades aquí
  const powerConsumptionPerHour = 0.02; // Consumo de energía por hora en kWh

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
    let previousState = historyData[0][0].state;
    let previousTime = new Date(historyData[0][0].last_changed);
    let totalOnTime = 0;
    historyData[0].forEach((entry) => {
      const currentTime = new Date(entry.last_changed);
      if (entry.state === "off" && previousState === "on") {
        totalOnTime += currentTime - previousTime;
      }
      previousTime = currentTime;
      previousState = entry.state;
    });
    const totalKwh = (totalOnTime / (1000 * 60 * 60)) * powerConsumptionPerHour;
  /*   console.log(`Total kWh for ${entityId}: ${totalKwh}`); */
    return totalKwh;
  }

  const entityLabels = {
    "switch.node_23": "Luz Habitación",
    "switch.node_19": "Luz Baño",
    // Agrega más entidades aquí si es necesario
  };

  async function calculateTotalConsumption() {
    const datasets = [];
    for (const entity of entities) {
      const kwh = await getHistoryData(entity);
      datasets.push({
        label: entityLabels[entity],
        data: [{ x: entityLabels[entity], y: kwh }],
        backgroundColor: "yellow",
      });
    }
    createChart(datasets);

    totalKwh = 0;
    for (const dataset of datasets) {
      for (const data of dataset.data) {
        totalKwh += data.y;
      }
    }
    document.querySelector(".bar-unit-2").textContent = `${totalKwh.toFixed(
      2
    ) + " " + "Kwh"}`;
  }

  function createChart(datasets) {
    console.log(datasets)
    const ctx = document.getElementById("ctx2").getContext("2d");
    new Chart(ctx, {
      type: "bar",
      data: {
        datasets: datasets,
      },
      options: {
        scales: {
          x: {
            beginAtZero: true,
          },
          y: {
            beginAtZero: true,
          },
        },
      },
    });
  }

  calculateTotalConsumption();
});
