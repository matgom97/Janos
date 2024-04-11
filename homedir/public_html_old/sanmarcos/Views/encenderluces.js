
//const baseUrl = 'https://bmsjanos.duckdns.org/api';
const accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJhM2RhNGQ4YjE1NGI0ZjkxOTgwYmYxZTBmNTQwNTg5NSIsImlhdCI6MTY5ODIwMjk4MSwiZXhwIjoyMDEzNTYyOTgxfQ.ueg1XYgm1PsyJCIGltXNHZn3aWsAoKra2YoFXQzkuL8';

const interruptor1 = { id: '204-checkSwitch-1', entityId: 'switch.node_23' };
const interruptor2 = { id: '204-checkSwitch-2', entityId: 'switch.node_19' };
const interruptor3 = { id: '204-checkSwitch-3', entityId: 'switch.node_15' };
const interruptor4 = { id: '204-checkSwitch-4', entityId: 'switch.node_16' };

const obtenerEstadoInterruptor = async (entityId) => {
  try {
    const response = await fetch(`${baseUrl}/states/${entityId}`, {
      headers: {
        'Authorization': `Bearer ${accessToken}`,
      },
    });
    const result = await response.json();
    const state = result.state;
    console.log(`Estado de entidad ${entityId}: ${state}`);
    return state;
  } catch (error) {
    console.error(`Error obteniendo estado de entidad ${entityId}: ${error}`);
  }
};

const cambiarEstadoEntidad = async (entityId, newState) => {
  try {
    const response = await fetch(`${baseUrl}/states/${entityId}`, {
      method: 'POST',
      headers: {
        'Authorization': `Bearer ${accessToken}`,
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ state: newState })
    });
    const result = await response.json();
    console.log(`Entidad ${entityId} cambiada a estado ${newState}`);
    return result;
  } catch (error) {
    console.error(`Error cambiando estado de entidad ${entityId}: ${error}`);
  }
};

const cambiarEstado = (newState) => {
  cambiarEstadoEntidad('switch.node_19', newState);
};

const cambiarEstadoEntidad1 = async (entityId, newState) => {
  try {
    const response = await fetch(`${baseUrl}/states/${entityId}`, {
      method: 'POST',
      headers: {
        'Authorization': `Bearer ${accessToken}`,
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ state: newState })
    });
    const result = await response.json();
    console.log(`Entidad ${entityId} cambiada a estado ${newState}`);
    return result;
  } catch (error) {
    console.error(`Error cambiando estado de entidad ${entityId}: ${error}`);
  }
};

const cambiarEstado1 = (newState) => {
  cambiarEstadoEntidad('switch.node_23', newState);
};

const actualizarEstadoInterruptor = async () => {
  try {
    const estadoInterruptor1 = await obtenerEstadoInterruptor(interruptor1.entityId);
    const estadoInterruptor2 = await obtenerEstadoInterruptor(interruptor2.entityId);
    const estadoInterruptor3 = await obtenerEstadoInterruptor(interruptor3.entityId);
    const estadoInterruptor4 = await obtenerEstadoInterruptor(interruptor4.entityId);

    const interruptorCheckbox1 = document.getElementById(interruptor1.id);
    const interruptorElement1 =  document.getElementById(interruptor1.id);
    const interruptorCheckbox2 = document.getElementById(interruptor2.id);
    const interruptorElement2 =  document.getElementById(interruptor2.id);
    const interruptorCheckbox3 = document.getElementById(interruptor3.id);
    const interruptorElement3 =  document.getElementById(interruptor3.id);
    const interruptorCheckbox4 = document.getElementById(interruptor4.id);
    const interruptorElement4 =  document.getElementById(interruptor4.id);

    if (estadoInterruptor1 === 'on') {
      interruptorCheckbox1.checked = true;
      interruptorElement1.classList.add('encendido');
      interruptorElement1.classList.remove('apagado');
    } else {
      interruptorCheckbox1.checked = false;
      interruptorElement1.classList.add('apagado');
      interruptorElement1.classList.remove('encendido');
    }

    if (estadoInterruptor2 === 'on') {
      interruptorCheckbox2.checked = true;
      interruptorElement2.classList.add('encendido');
      interruptorElement2.classList.remove('apagado');
    } else {
      interruptorCheckbox2.checked = false;
      interruptorElement2.classList.add('apagado');
      interruptorElement2.classList.remove('encendido');
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

    if (estadoInterruptor4 === 'on') {
      interruptorCheckbox4.checked = true;
      interruptorElement4.classList.add('encendido');
      interruptorElement4.classList.remove('apagado');
    } else {
      interruptorCheckbox4.checked = false;
      interruptorElement4.classList.add('apagado');
      interruptorElement4.classList.remove('encendido');
    }
  } catch (error) {
    console.error(`Error actualizando estado de los interruptores: ${error}`);
  }
};

const suscribirseCambiosEstado = async () => {
  try {
    const response = await fetch(`${baseUrl}/stream?token=${accessToken}`, {
      headers: {
        'Authorization': `Bearer ${accessToken}`,
      },
    });

    if (response.status === 200) {
      const reader = response.body.getReader();
      const decoder = new TextDecoder();

      let data = '';
      while (true) {
        const { done, value } = await reader.read();
        if (done) break;

        const chunk = decoder.decode(value, { stream: true });
        data += chunk;

        // Verificar si se recibió un evento completo
        const eventSeparatorIndex = data.indexOf('\n\n');
        if (eventSeparatorIndex !== -1) {
          const eventData = data.slice(0, eventSeparatorIndex);
          data = data.slice(eventSeparatorIndex + 2);

          try {
            const jsonData = eventData.slice(5);
            const event = JSON.parse(jsonData);
            const entityId = event.data.entity_id;
            const oldState = event.data.old_state.state;
            const newState = event.data.new_state.state;
            console.log(`Cambio de estado en ${entityId} a ${newState}`);
            if (entityId === interruptor1.entityId) {
              const interruptorCheckbox = document.getElementById(interruptor1.id);
              const interruptorElement = document.getElementById(interruptor1.id);
              if (newState === 'on') {
                interruptorCheckbox.checked = true;
                interruptorElement.classList.add('encendido');
                interruptorElement.classList.remove('apagado');
              } else {
                interruptorCheckbox.checked = false;
                interruptorElement.classList.add('apagado');
                interruptorElement.classList.remove('encendido');
              }
            } else if (entityId === interruptor2.entityId) {
              const interruptorCheckbox = document.getElementById(interruptor2.id);
              const interruptorElement = document.getElementById(interruptor2.id);
              if (newState === 'on') {
                interruptorCheckbox.checked = true;
                interruptorElement.classList.add('encendido');
                interruptorElement.classList.remove('apagado');
              } else {
                interruptorCheckbox.checked = false;
                interruptorElement.classList.add('apagado');
                interruptorElement.classList.remove('encendido');
              }
            } else if (entityId === interruptor3.entityId) {
              const interruptorCheckbox = document.getElementById(interruptor3.id);
              const interruptorElement = document.getElementById(interruptor3.id);
              if (newState === 'on') {
                interruptorCheckbox.checked = true;
                interruptorElement.classList.add('encendido');
                interruptorElement.classList.remove('apagado');
              } else {
                interruptorCheckbox.checked = false;
                interruptorElement.classList.add('apagado');
                interruptorElement.classList.remove('encendido');
              }
            } else if (entityId === interruptor4.entityId) {
              const interruptorCheckbox = document.getElementById(interruptor4.id);
              const interruptorElement = document.getElementById(interruptor4.id);
              if (newState === 'on') {
                interruptorCheckbox.checked = true;
                interruptorElement.classList.add('encendido');
                interruptorElement.classList.remove('apagado');
              } else {
                interruptorCheckbox.checked = false;
                interruptorElement.classList.add('apagado');
                interruptorElement.classList.remove('encendido');
              }
            }
          } catch (error) {
            
            console.log('Contenido del eventData:', eventData);
          }
        }
      }
    } else {
      console.error('Error al suscribirse a los cambios de estado');
    }
  } catch (error) {
    console.error(`Error al suscribirse a los cambios de estado: ${error}`);
  }
};


actualizarEstadoInterruptor();
suscribirseCambiosEstado();
