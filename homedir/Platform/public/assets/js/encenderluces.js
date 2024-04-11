document.addEventListener("DOMContentLoaded", async function () {
  //const baseUrl = "https://bmsjanos.duckdns.org/api";
  const baseUrl = 'https://janosbems.duckdns.org/api';
  
  const accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhM2RhNGQ4YjE1NGI0ZjkxOTgwYmYxZTBmNTQwNTg5NSIsImlhdCI6MTY5ODIwMjk4MSwiZXhwIjoyMDEzNTYyOTgxfQ.ueg1XYgm1PsyJCIGltXNHZn3aWsAoKra2YoFXQzkuL8'; // Tu token aquí
  const interruptor1 = { id: '204-checkSwitch-1', entityId: 'switch.node_23' }; /* Luz habitacion 204 */
  const marker1 = { id: 'marker03', entityId: 'switch.node_23' }; /* Luz habitacion 204 */
  
  const interruptor2 = { id: '204-checkSwitch-2', entityId: 'switch.node_19' }; /* Luz baño 204*/
  const marker2 = { id: 'marker02', entityId: 'switch.node_19' }; /* Luz baño 204 */
 
  const interruptor3 = { id: '204-checkSwitch-3', entityId: 'switch.node_34' }; /* Luz 2 corredor */
  const interruptor6 = { id: '204-checkSwitch-6', entityId: 'switch.node_34_2' }; /*corredor 1 */

  const interruptor5 = { id: '204-checkSwitch-5', entityId: 'climate.node_49' }; /* Aire acondicionado*/
  const marker3 = { id: 'marker04', entityId: 'climate.node_49' }; /*Aire acondicionado */
  
  const interruptor7 = { id: '204-checkSwitch-7', entityId: 'binary_sensor.node_50_motion_detection' }; /* Sensor*/
  const marker4 = { id: 'marker07', entityId: 'binary_sensor.node_50_motion_detection' }; /*Sensor */

  
  const obtenerEstadoInterruptor = async (entityId, markerId) => {
    try {
      const response = await fetch(`${baseUrl}/states/${entityId}`, {
        headers: {
          'Authorization': `Bearer ${accessToken}`,
        },
      });
      const result = await response.json();
      const state = result.state;
      console.log(`Estado de entidad ${entityId}: ${state}`);
      const marker = document.getElementById(markerId);

      // Actualiza el color del marcador según el estado


      return state;
    } catch (error) {
      console.error(`Error obteniendo estado de entidad ${entityId}: ${error}`);
    }
  };

  const encenderEntidad = async (entityId) => {
    try {
      const response = await fetch(`${baseUrl}/services/homeassistant/turn_on`, {
        method: 'POST',
        headers: {
          'Authorization': `Bearer ${accessToken}`,
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ entity_id: entityId })
      });
      const result = await response.json();

    // Cambiar el fondo del marcador a naranja

      console.log(`Entidad ${entityId} encendida`);
      return result;
    } catch (error) {
      console.error(`Error encendiendo entidad ${entityId}: ${error}`);
    }
  };

  const setHvacMode = async (entityId, mode) => {
    try {
      const response = await fetch(`${baseUrl}/services/climate/set_hvac_mode`, {
        method: 'POST',
        headers: {
          'Authorization': `Bearer ${accessToken}`,
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          entity_id: entityId,
          hvac_mode: mode
        })
      });
      const result = await response.json();
      console.log(`Modo HVAC de la entidad ${entityId} configurado en ${mode}`);
      return result;
    } catch (error) {
      console.error(`Error configurando el modo HVAC de la entidad ${entityId} en ${mode}: ${error}`);

    }
  };
  const apagarEntidad = async (entityId) => {
    try {
      const response = await fetch(`${baseUrl}/services/homeassistant/turn_off`, {
        method: 'POST',
        headers: {
          'Authorization': `Bearer ${accessToken}`,
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ entity_id: entityId })
      });
      const result = await response.json();
      console.log(`Entidad ${entityId} apagada`);
      return result;
    } catch (error) {
      console.error(`Error apagando entidad ${entityId}: ${error}`);
    }
  };
  



  const actualizarEstadoInterruptor = async () => {
    try {
    
      const estadoInterruptor1 = await obtenerEstadoInterruptor(interruptor1.entityId);
      const estadoInterruptor2 = await obtenerEstadoInterruptor(interruptor2.entityId);
      const estadoInterruptor3 = await obtenerEstadoInterruptor(interruptor3.entityId);
     
      const estadoInterruptor5 = await obtenerEstadoInterruptor(interruptor5.entityId);
      const estadoInterruptor6 = await obtenerEstadoInterruptor(interruptor6.entityId);
      const estadoInterruptor7 = await obtenerEstadoInterruptor(interruptor7.entityId);

      const estadoMarker1 = document.getElementById(marker1.id);
      const estadoMarker2 = document.getElementById(marker2.id);
      const estadoMarker3 = document.getElementById(marker3.id);
      const estadoMarker4 = document.getElementById(marker4.id);

      const interruptorCheckbox1 = document.getElementById(interruptor1.id);
      const interruptorElement1 = document.getElementById(interruptor1.id);
      const selectInterruptor1 = document.getElementById(interruptor1.id);

      const interruptorCheckbox2 = document.getElementById(interruptor2.id);
      const interruptorElement2 = document.getElementById(interruptor2.id);
      const interruptorCheckbox3 = document.getElementById(interruptor3.id);
      const interruptorElement3 = document.getElementById(interruptor3.id);

      const interruptorCheckbox5 = document.getElementById(interruptor5.id);
      const interruptorElement5 = document.getElementById(interruptor5.id);
      const interruptorCheckbox6 = document.getElementById(interruptor6.id);
      const interruptorElement6 = document.getElementById(interruptor6.id);
      const interruptorCheckbox7 = document.getElementById(interruptor7.id);
      const interruptorElement7 = document.getElementById(interruptor7.id);

      if (estadoInterruptor1 === 'on') {
        interruptorCheckbox1.checked = true;
        selectInterruptor1.value = 0;
        interruptorElement1.classList.add('encendido');
        interruptorElement1.classList.remove('apagado');
        estadoMarker1.style.background = 'orange';  // Cambia a naranja cuando está encendido
        
      } else {
        interruptorCheckbox1.checked = false;
        interruptorElement1.classList.add('apagado');
        selectInterruptor1.value = 1;
        interruptorElement1.classList.remove('encendido');  
        estadoMarker1.style.background = 'white';   // Cambia a blanco cuando está apagado

      }

      if (estadoInterruptor2 === 'on') {
        interruptorCheckbox2.checked = true;
        interruptorElement2.classList.add('encendido');
        interruptorElement2.classList.remove('apagado');
        estadoMarker2.style.background = 'orange';  // Cambia a naranja cuando está encendido

      } else {
        interruptorCheckbox2.checked = false;
        interruptorElement2.classList.add('apagado');
        interruptorElement2.classList.remove('encendido');
        estadoMarker2.style.background = 'white';  // Cambia a naranja cuando está encendido

      }

      if (estadoInterruptor3 === 'on') {
        interruptorCheckbox3.checked = true;
        interruptorElement3.classList.add('encendido');
        interruptorElement3.classList.remove('apagado');

      } else {
        interruptorCheckbox3.checked = false;
        interruptorElement3.classList.add('apagado');
        interruptorElement3.classList.remove('encendido');

      }


      if (estadoInterruptor5 !== 'off') {
        interruptorCheckbox5.checked = true;
        interruptorElement5.classList.add('encendido');
        interruptorElement5.classList.remove('apagado');
        estadoMarker3.style.background = 'orange';  // Cambia a naranja cuando está encendido

      } else {
        interruptorCheckbox5.checked = false;
        interruptorElement5.classList.add('apagado');
        interruptorElement5.classList.remove('encendido');
        estadoMarker3.style.background = 'white';  // Cambia a naranja cuando está encendido

      }
    

      if (estadoInterruptor6 === 'on') {
        interruptorCheckbox6.checked = true;
        interruptorElement6.classList.add('encendido');
        interruptorElement6.classList.remove('apagado');
      } else {
        interruptorCheckbox6.checked = false;
        interruptorElement6.classList.add('apagado');
        interruptorElement6.classList.remove('encendido');
      }

      if (estadoInterruptor7 === 'on') {
        interruptorCheckbox7.checked = true;
        interruptorElement7.classList.add('encendido');
        interruptorElement7.classList.remove('apagado');
        estadoMarker4.style.background = 'orange';  // Cambia a naranja cuando está encendido

      } else {
        interruptorCheckbox7.checked = false;
        interruptorElement7.classList.add('apagado');
        interruptorElement7.classList.remove('encendido');
        estadoMarker4.style.background = 'white';  // Cambia a naranja cuando está encendido

      }
    } catch (error) {
      console.error(`Error actualizando estado de los interruptores: ${error}`);
    }
  };

  // Agregar un evento 'change' para el interruptor1
// Agregar un evento 'change' para el interruptor1
function agregarEventoCambio(interruptor) {
  const interruptorCheckbox = document.getElementById(interruptor.id);

  interruptorCheckbox.addEventListener('change', async () => {
    if (interruptorCheckbox.checked) {
      if (interruptor.id === 'interruptor5') {
        await setHvacMode(interruptor.entityId, 'cool'); // Utiliza la función setHvacMode
        console.log(`Aire acondicionado ${interruptor.id} configurado en modo cool`);
      } else {
        await encenderEntidad(interruptor.entityId); // Utiliza la función encenderEntidad
        console.log(`Switch ${interruptor.id} encendido`);
      }
    } else {
      if (interruptor.id === 'interruptor5') {
        await setHvacMode(interruptor.entityId, 'off'); // Utiliza la función setHvacMode
        console.log(`Aire acondicionado ${interruptor.id} apagado`);
      } else {
        await apagarEntidad(interruptor.entityId); // Utiliza la función apagarEntidad
        console.log(`Switch ${interruptor.id} apagado`);
      }
    }
  });
}



  agregarEventoCambio(interruptor1);
  agregarEventoCambio(interruptor2);
  agregarEventoCambio(interruptor3);
  
  agregarEventoCambio(interruptor5);
  agregarEventoCambio(interruptor6);
  agregarEventoCambio(interruptor7);

  // Llama a la función para actualizar el estado de los interruptores
  actualizarEstadoInterruptor();
  setInterval(actualizarEstadoInterruptor, 3000);


const obtenerTemperatura = async (entityId) => {
  try {
    const response = await fetch(`${baseUrl}/states/${entityId}`, {
      headers: {
        'Authorization': `Bearer ${accessToken}`,
      },
    });
    const result = await response.json();

    // Obtener el estado y los atributos
    const state = result.state;
    const attributes = result.attributes;

    // Obtener la temperatura de los atributos
    const temperature = attributes && attributes.current_temperature ? attributes.current_temperature : 'N/A';

    // Get the HTML element
    const temperaturaElement = document.getElementById('temperatura_device');
    const temperaturaElement2 = document.getElementById('marker05');

    // Actualizar el contenido del elemento HTML
    temperaturaElement.textContent = `Temperatura: ${temperature}°C (${state})`;
    temperaturaElement2.textContent = `${temperature}°C`;

    console.log(`La temperatura actual del dispositivo ${entityId} es: ${temperature}`);
    return temperature;
  } catch (error) {
    console.error(`Error obteniendo la temperatura del dispositivo ${entityId}: ${error}`);
  }
};

  // Use the function
  obtenerTemperatura('climate.node_49');
  
});
