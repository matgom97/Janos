// Obtener el contexto del canvas
var ctx = document.getElementById('myChart').getContext('2d');

// Función para obtener los datos de la base de datos y dibujar la gráfica
function dibujarGrafica() {
  // Hacer una petición AJAX para obtener los datos de la base de datos
  var xhr = new XMLHttpRequest();
  xhr.open('GET', 'datos.php');
  xhr.onload = function() {
    if (xhr.status === 200) {
      // Parsear los datos JSON
      var datos = JSON.parse(xhr.responseText);

      // Crear un array con los valores de X y Y
      var valoresX = [];
      var valoresY = [];
      for (var i = 0; i < datos.length; i++) {
        valoresX.push(datos[i].campoX);
        valoresY.push(datos[i].campoY);
      }

      // Crear la gráfica usando Chart.js
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: valoresX,
          datasets: [{
            label: 'Datos',
            data: valoresY,
            borderColor: 'blue',
            borderWidth: 1
          }]
        },
        options: {}
      });
    }
  };
  xhr.send();
}

// Llamar a la función para dibujar la gráfica al cargar la página
dibujarGrafica();