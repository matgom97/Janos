const baseUrl = 'https://hotelsanmarcos.duckdns.org/api';
const accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJmMTE4Y2U5NmQwYjk0OGY0ODZkZWIwNmQwN2I1NzY3YiIsImlhdCI6MTY4NDM0MDA3NiwiZXhwIjoxOTk5NzAwMDc2fQ.Q_b8z5eFUa9eNb2kzMufqDKRpvPAV4aKePb_Zcu8_d8';

const interruptor = { id: '204-checkSwitch-1', entityId: 'switch.node_34' };

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

const actualizarEstadoInterruptor = async () => {
  try {
    const estadoInterruptor = await obtenerEstadoInterruptor(interruptor.entityId);
    const interruptorCheckbox = document.getElementById(interruptor.id);
    const interruptorElement = document.getElementById(interruptor.id);
    if (estadoInterruptor === 'on') {
      interruptorCheckbox.checked = true;
      interruptorElement.classList.add('encendido');
      interruptorElement.classList.remove('apagado');
    } else {
      interruptorCheckbox.checked = false;
      interruptorElement.classList.add('apagado');
      interruptorElement.classList.remove('encendido');
    }
  } catch (error) {
    console.error(`Error actualizando estado del interruptor: ${error}`);
  }
};

const suscribirseCambiosEstado = async () => {
  while (true) {
    try {
      const response = await fetch(`${baseUrl}/stream?access_token=${accessToken}`, {
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

            const event = JSON.parse(eventData);
            const entityId = event.entity_id;
            const newState = event.new_state.state;
            console.log(`Cambio de estado en ${entityId} a ${newState}`);
            if (entityId === interruptor.entityId) {
              const interruptorCheckbox = document.getElementById(interruptor.id);
              const interruptorElement = document.getElementById(interruptor.id);
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
          }
        }
      }
    } catch (error) {
      console.error(`Error suscribiéndose a cambios de estado: ${error}`);
    }
  }
};

// Actualizar estado del interruptor al cargar la página
actualizarEstadoInterruptor();

// Suscribirse a cambios de estado en Home Assistant
suscribirseCambiosEstado();
