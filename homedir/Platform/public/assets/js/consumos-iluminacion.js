document.addEventListener("DOMContentLoaded", function () {
  const entities = ["switch.node_23", "switch.node_19"]; // Agrega las entidades aquí
  const powerConsumptionPerHour = 0.02; // Consumo de energía por hora en kWh Este es el valor que el fabricante dice que consume por hora el dispositivo 

  var selectedDays = [];
  var myChart; // Variable global para almacenar el gráfico

  function formatDate(dateString) {
    const dateObject = new Date(dateString);
    if (!isNaN(dateObject.getTime())) {
      dateObject.setHours(0);
      dateObject.setMinutes(0);
      dateObject.setSeconds(0);
      return dateObject.toISOString();
    } else {
      console.error("Invalid date string:", dateString);
      return null;
    }
  }

  function formatEndTime(dateString) {
    const dateObject = new Date(dateString);
    if (!isNaN(dateObject.getTime())) {
      dateObject.setHours(23);
      dateObject.setMinutes(59);
      dateObject.setSeconds(59);
      const endDateAdjusted = new Date(dateObject);
      endDateAdjusted.setHours(endDateAdjusted.getHours() + endDateAdjusted.getTimezoneOffset() / 60);
      return endDateAdjusted.toISOString();
    } else {
      console.error("Invalid date string:", dateString);
      return null;
    }
  }

  async function getHistoryData(entityId, dateStart, dateEnd) {
    const response = await fetch(
      `https://janosbems.duckdns.org/api/history/period/${dateStart}?end_time=${dateEnd}&filter_entity_id=${entityId}`,
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
    console.log(historyData)
    let previousState = historyData[0][0].state;
    let previousTime = new Date(historyData[0][0].last_changed);
    let totalOnTime = 0;
    historyData[0].forEach((entry) => {
      const currentTime = new Date(entry.last_changed);
      if (entry.state === 'off' && previousState === 'on') {
        totalOnTime += (currentTime - previousTime);
      }
      previousTime = currentTime;
      previousState = entry.state;
    });
    const totalKwh = (totalOnTime / (1000 * 60 * 60)) * powerConsumptionPerHour;
    console.log(`Total kWh for ${entityId}: ${totalKwh}`);
    return totalKwh;
  }


  const entityLabels = {
    "switch.node_23": "Luz Habitación",
    "switch.node_19": "Luz Baño",
    // Agrega más entidades aquí si es necesario
  };

  function load(date) {
    async function calculateTotalConsumption() {
      const datasets = [];
      for (const entity of entities) {
        const kwh = await getHistoryData(entity, date[0],date[1]);
        datasets.push({
          label: entityLabels[entity],
          data: [{ x: entityLabels[entity], y: kwh }],
          backgroundColor: "yellow",
        });
      }
      createChart(datasets);

      let totalKwh = 0;
      for (const dataset of datasets) {
        for (const data of dataset.data) {
          totalKwh += data.y;
        }
      }
      document.querySelector('.bar-unit').textContent = `Total kWh: ${totalKwh.toFixed(2)}`;
    }

    function createChart(datasets) {
      const ctx = document.getElementById("ctx11").getContext("2d");
    
      // Verifica si hay un gráfico existente antes de destruirlo
      if (myChart) {
        myChart.destroy();
      }
    
      myChart = new Chart(ctx, {
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
          plugins: {
            legend: {
              display: true,
              position: 'top',
            },
          },
          layout: {
            padding: {
              left: 10,
              right: 10,
              top: 0,
              bottom: 0
            }
          }
        },
      });
    }
    

    calculateTotalConsumption();
  }

  function handleClick(event) {
    var selectedDay = this.textContent;

    var calendarMonthYear = document.querySelector(".calendar-month-year");
    var month = parseInt(calendarMonthYear.dataset.month) + 1;
    var year = calendarMonthYear.dataset.year;

    if (selectedDays.length < 1) {
        if (month < 10) {
            month = "0" + month;
        }
        if (selectedDay < 10) {
            selectedDay = "0" + selectedDay;
        }
        var formattedDate = year + "-" + month + "-" + selectedDay;
    } else {
        selectedDay = parseInt(selectedDay) + 1;
        selectedDay = selectedDay.toString();
        if (month < 10) {
            month = "0" + month;
        }
        if (selectedDay < 10) {
            selectedDay = "0" + selectedDay;
        }
        var formattedDate = year + "-" + month + "-" + selectedDay;
    }

    if (selectedDays.length >= 2) {
        var firstDayElement = document.querySelector(".calendar-day-active");
        firstDayElement.classList.remove("calendar-day-active");
        selectedDays.shift();
    }

    selectedDays.push(formattedDate);
    this.classList.add("calendar-day-active");

    if (selectedDays.length === 2) {
        const selectedDaysCopy = [...selectedDays];
        selectedDays[0] = formatDate(selectedDays[0]);
        selectedDays[1] = formatEndTime(selectedDays[1]);

        console.log(selectedDays[0], selectedDays[1])
        selectedDays = selectedDays.sort();
        load(selectedDaysCopy);
        selectedDays = [];
    }
}

setInterval(() => {
    var days = document.querySelectorAll(".calendar-days .calendar-day");
    days.forEach(function (day) {
        day.addEventListener("click", handleClick);
    });
}, 100);
});
