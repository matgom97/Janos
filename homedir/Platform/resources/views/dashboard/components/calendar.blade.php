<div class="calendar-container">
    <div class="calendar-month-arrow-container">
      <div class="calendar-month-year-container">
        <select class="calendar-years"></select>
        <select class="calendar-months">
        </select>
      </div>
      <div class="calendar-month-year">
      </div>
      <div class="calendar-arrow-container">
        <button class="calendar-today-button"></button>
        <button class="calendar-left-arrow">
          ← </button>
        <button class="calendar-right-arrow"> →</button>
      </div>
    </div>
    <ul class="calendar-week">
    </ul>
    <ul class="calendar-days">
    </ul>
  </div>

  <style>
    .calendar-container {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4);
        padding: 10px;
        font-size: 14px;
    }

    .calendar-week {
        display: none;
        list-style: none;
        align-items: center;
        padding-inline-start: 0px;
    }

    .calendar-week-day {
        max-width: 57.1px;
        width: 100%;
        text-align: center;
        color: #525659;
    }

    .calendar-days {
        margin-top: 0px;
        list-style: none;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(40px, 1fr));
        gap: 5px;
        padding-inline-start: 0px;
    }

    .calendar-day {
        text-align: center;
        color: #525659;
        padding: 10px;
    }

    .calendar-month-arrow-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .calendar-month-year-container {
        padding: 10px;
        display: flex;
        justify-content: space-between;
    }

    .calendar-arrow-container {
        margin-top: 10px;
    }

    .calendar-left-arrow,
    .calendar-right-arrow {
        height: 30px;
        width: 30px;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        color: #525659;
    }

    .calendar-today-button {
        margin-top: -10px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        color: #525659;
        padding: 5px 10px;
        background-color: #ec7625;
        color: white;
    }

    .calendar-months,
    .calendar-years {
        flex: 1;
        border-radius: 10px;
        height: 30px;
        border: none;
        cursor: pointer;
        outline: none;
        color: #525659;
        font-size: 15px;
    }

    .calendar-day-active {
        background-color: #ec7625;
        color: white;
        border-radius: 50%;
    }
</style>

  <script>
    const weekArray = ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"];
const monthArray = [
  "Enero",
  "Febrero",
  "Marzo",
  "Abril",
  "Mayo",
  "Junio",
  "Julio",
  "Agosto",
  "Septiembre",
  "Octubre",
  "Noviembre",
  "Diciembre"
];
const current = new Date();
const todaysDate = current.getDate();
const currentYear = current.getFullYear();
const currentMonth = current.getMonth();

window.onload = function () {
  const currentDate = new Date();
  generateCalendarDays(currentDate);

  let calendarWeek = document.getElementsByClassName("calendar-week")[0];
  let calendarTodayButton = document.getElementsByClassName(
    "calendar-today-button"
  )[0];
  calendarTodayButton.textContent = `Hoy ${todaysDate}`;

  calendarTodayButton.addEventListener("click", () => {
    generateCalendarDays(currentDate);
  });

  weekArray.forEach((week) => {
    let li = document.createElement("li");
    li.textContent = week;
    li.classList.add("calendar-week-day");
    calendarWeek.appendChild(li);
  });

  const calendarMonths = document.getElementsByClassName("calendar-months")[0];
  const calendarYears = document.getElementsByClassName("calendar-years")[0];
  const monthYear = document.getElementsByClassName("calendar-month-year")[0];

  const selectedMonth = parseInt(monthYear.getAttribute("data-month") || 0);
  const selectedYear = parseInt(monthYear.getAttribute("data-year") || 0);

  monthArray.forEach((month, index) => {
    let option = document.createElement("option");
    option.textContent = month;
    option.value = index;
    option.selected = index === selectedMonth;
    calendarMonths.appendChild(option);
  });

  const currentYear = new Date().getFullYear();
  const startYear = currentYear - 60;
  const endYear = currentYear + 60;
  let newYear = startYear;
  while (newYear <= endYear) {
    let option = document.createElement("option");
    option.textContent = newYear;
    option.value = newYear;
    option.selected = newYear === selectedYear;
    calendarYears.appendChild(option);
    newYear++;
  }

  const leftArrow = document.getElementsByClassName("calendar-left-arrow")[0];

  leftArrow.addEventListener("click", () => {
    const monthYear = document.getElementsByClassName("calendar-month-year")[0];
    const month = parseInt(monthYear.getAttribute("data-month") || 0);
    const year = parseInt(monthYear.getAttribute("data-year") || 0);

    let newMonth = month === 0 ? 11 : month - 1;
    let newYear = month === 0 ? year - 1 : year;
    let newDate = new Date(newYear, newMonth, 1);
    generateCalendarDays(newDate);
  });

  const rightArrow = document.getElementsByClassName("calendar-right-arrow")[0];

  rightArrow.addEventListener("click", () => {
    const monthYear = document.getElementsByClassName("calendar-month-year")[0];
    const month = parseInt(monthYear.getAttribute("data-month") || 0);
    const year = parseInt(monthYear.getAttribute("data-year") || 0);
    let newMonth = month + 1;
    newMonth = newMonth === 12 ? 0 : newMonth;
    let newYear = newMonth === 0 ? year + 1 : year;
    let newDate = new Date(newYear, newMonth, 1);
    generateCalendarDays(newDate);
  });

  calendarMonths.addEventListener("change", function () {
    let newDate = new Date(calendarYears.value, calendarMonths.value, 1);
    generateCalendarDays(newDate);
  });

  calendarYears.addEventListener("change", function () {
    let newDate = new Date(calendarYears.value, calendarMonths.value, 1);
    generateCalendarDays(newDate);
  });
};

function generateCalendarDays(currentDate) {
  const newDate = new Date(currentDate);
  const year = newDate.getFullYear();
  const month = newDate.getMonth();
  const totalDaysInMonth = getTotalDaysInAMonth(year, month);
  const firstDayOfWeek = getFirstDayOfWeek(year, month);
  let calendarDays = document.getElementsByClassName("calendar-days")[0];

  removeAllChildren(calendarDays);

  let firstDay = 1;
  while (firstDay <= firstDayOfWeek) {
    let li = document.createElement("li");
    li.classList.add("calendar-day");
    calendarDays.appendChild(li);
    firstDay++;
  }

  let day = 1;
  while (day <= totalDaysInMonth) {
    let li = document.createElement("li");
    li.textContent = day;
    li.classList.add("calendar-day");
    if (todaysDate === day && currentMonth === month && currentYear === year) {
     // li.classList.add("calendar-day-active");
    }
    calendarDays.appendChild(li);
    day++;
  }

  const monthYear = document.getElementsByClassName("calendar-month-year")[0];
  monthYear.setAttribute("data-month", month);
  monthYear.setAttribute("data-year", year);
  const calendarMonths = document.getElementsByClassName("calendar-months")[0];
  const calendarYears = document.getElementsByClassName("calendar-years")[0];
  calendarMonths.value = month;
  calendarYears.value = year;
}

function getTotalDaysInAMonth(year, month) {
  return new Date(year, month + 1, 0).getDate();
}

function getFirstDayOfWeek(year, month) {
  return new Date(year, month, 1).getDay();
}

function removeAllChildren(parent) {
  while (parent.firstChild) {
    parent.removeChild(parent.firstChild);
  }
}



  </script>