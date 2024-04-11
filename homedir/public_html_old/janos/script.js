// Function to toggle switch state
function toggleSwitch(entityId, state) {
  const url = "https://cors-anywhere.herokuapp.com/https://hahmv5lwrasu4et26qdvkvuhchq0tig8.ui.nabu.casa/api/services/switch/turn_" + state;
  const data = { "entity_id": entityId };
  const options = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "Authorization": "Bearer <ACCESS_TOKEN>"
    },
    body: JSON.stringify(data)
  };
  fetch("https://cors-anywhere.herokuapp.com/" + url, options)
    .then(response => {
      if (!response.ok) {
        throw new Error("HTTP error " + response.status);
      }
      console.log("Switch " + entityId + " changed to " + state);
    })
    .catch(error => {
      console.log("Error changing state of switch " + entityId + ": " + error.message);
    });
}

// Function to get temperature sensor value
function getTemperature(entityId) {
  const url = "https://cors-anywhere.herokuapp.com/https://0zaoityklh7sojwxpwyw7kq57x41n1uc.ui.nabu.casa/api/states/" + entityId;
  const options = {
    headers: {
      "Content-Type": "application/json",
      "Authorization": "Bearer <ACCESS_TOKEN>"
    }
  };
  fetch("https://cors-anywhere.herokuapp.com/" + url, options)
    .then(response => {
      if (!response.ok) {
        throw new Error("HTTP error " + response.status);
      }
      return response.json();
    })
    .then(data => {
      const temperatureValue = document.getElementById("temperature-value");
      temperatureValue.innerText = data.state;
    })
    .catch(error => {
      console.log("Error getting temperature sensor value: " + error.message);
    });
}

// Toggle switches when buttons are clicked
document.getElementById("switch1-on").addEventListener("click", () => {
  toggleSwitch("switch.node_11", "on");
});
document.getElementById("switch1-off").addEventListener("click", () => {
  toggleSwitch("switch.node_11", "off");
});

document.getElementById("switch2-on").addEventListener("click", () => {
  toggleSwitch("switch.node_13", "on");
});
document.getElementById("switch2-off").addEventListener("click", () => {
  toggleSwitch("switch.node_13", "off");
});

document.getElementById("switch3-on").addEventListener("click", () => {
  toggleSwitch("switch.node_23", "on");
});
document.getElementById("switch3-off").addEventListener("click", () => {
  toggleSwitch("switch.node_23", "off");
});

document.getElementById("switch4-on").addEventListener("click", () => {
  toggleSwitch("switch.node_19", "on");
});
document.getElementById("switch4-off").addEventListener("click", () => {
  toggleSwitch("switch.node_19", "off");
});

// Get temperature sensor value on page load
getTemperature("sensor.ac_master_air_temperature");
