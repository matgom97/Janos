// Obtener el contexto del lienzo de la gr¨¢fica
var ctx = document.getElementById('consumo-habitaciones').getContext('2d');

// Datos de consumo en kWh para las habitaciones 203 y 204
var datosConsumoKwh = [35, 42]; // Ejemplo de datos ficticios

// Crear la gr¨¢fica de barras
var graficaConsumo = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Habitacion 203', 'Habitacion 204'],
    datasets: [{
      label: 'Consumo en kWh',
      data: datosConsumoKwh,
      backgroundColor: ['rgba(75, 192, 192, 0.6)', 'rgba(54, 162, 235, 0.6)'], // Colores de las barras
      borderColor: ['rgba(75, 192, 192, 1)', 'rgba(54, 162, 235, 1)'],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        ticks: {
          callback: function (value, index, values) {
            return value + ' kWh';
          }
        }
      }
    },
    tooltips: {
      callbacks: {
        label: function (tooltipItem) {
          return tooltipItem.yLabel + ' kWh';
        }
      }
    }
  }
});
