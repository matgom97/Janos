document.addEventListener("DOMContentLoaded", function () {
    var selectedDays = [];
    var entity_name = document.querySelectorAll(".d15p057ivo");
    var selectedEntites = ["climate.node_49"];

    entity_name.forEach(function (entitie) {
        selectedEntites.push(entitie.textContent)
    })

  
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

    async function prepareDataForChartJS(startDate, endDate) {
        const entities = selectedEntites;
        const datasets = [];
        for (const entity of entities) {
            const historyData = await getHistoryData(entity, startDate, endDate);
            const filteredData = historyData.filter(entry => entry !== null);
            const temperatures = filteredData.map(entry => entry.y);
            const averageTemperature = calculateAverage(temperatures);
            datasets.push({
                label: 'Termostato ºC',
                data: filteredData.map(entry => ({ x: entry.x, y: entry.y })),
                backgroundColor: "rgb(75, 192, 192)",
                averageTemperature: averageTemperature
            });
        }
        return datasets;
    }

    async function getHistoryData(entityId, startDate, endDate) {
        try {
            const response = await fetch(
                `https://janosbems.duckdns.org/api/history/period/${startDate}?end_time=${endDate}&filter_entity_id=${entityId}`,
                {
                    method: "GET",
                    headers: {
                        Authorization: "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhM2RhNGQ4YjE1NGI0ZjkxOTgwYmYxZTBmNTQwNTg5NSIsImlhdCI6MTY5ODIwMjk4MSwiZXhwIjoyMDEzNTYyOTgxfQ.ueg1XYgm1PsyJCIGltXNHZn3aWsAoKra2YoFXQzkuL8",
                        "Content-Type": "application/json",
                    },
                }
            );
            const historyData = await response.json();
            return historyData[0].map((entry) => {
                if (!entry || !entry.last_changed || !entry.attributes || entry.attributes.current_temperature === null) {
                    console.error("Invalid entry:", entry);
                    return null;
                }
                const x = moment(entry.last_changed).format('YYYY-MM-DD');
                const y = parseFloat(entry.attributes.current_temperature);
                if (isNaN(y) && entry.attributes.current_temperature !== 0) {
                    console.error("Invalid temperature:", entry.attributes.current_temperature);
                    return null;
                }
                return { x, y };
            });
        } catch (error) {
            console.error("Error fetching historical data:", error);
            return [];
        }
    }

    function calculateAverage(temperatures) {
        if (temperatures.length === 0) {
            return 0;
        }
        const sum = temperatures.reduce((acc, curr) => acc + curr, 0);
        return sum / temperatures.length;
    }

    async function loadData(date) {
        async function createChart() {
            const ctx1 = document.getElementById("graficatemperatura").getContext("2d");

            if (window.myChart !== undefined) {
                window.myChart.destroy();
            }

            const datasets = await prepareDataForChartJS(date[0], date[1]);

            window.myChart = new Chart(ctx1, {
                type: "bar",
                data: {
                    datasets: datasets,
                },
                options: {
                    scales: {
                        x: {
                            type: "time",
                            time: {
                                unit: "day",
                                displayFormats: {
                                    day: 'MMM d',
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
            document.querySelector('.bar-unit').textContent = ` ${average.toFixed(2)}ºC`;
        
        }

        createChart();
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
            loadData(selectedDaysCopy);
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
