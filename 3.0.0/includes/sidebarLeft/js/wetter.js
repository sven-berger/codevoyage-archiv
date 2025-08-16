function getWeather() {
  const url = `https://api.open-meteo.com/v1/forecast?latitude=50.2177&longitude=8.2668&hourly=temperature_2m,rain,snowfall,wind_speed_10m,cloud_cover,is_day&timezone=Europe%2FBerlin`;
  fetch(url)
    .then(res => res.json())
    .then(data => {
      const wetterAusgabe = document.getElementById("wetterAusgabe");

      const zeitArray = data.hourly.time;
      const tempArray = data.hourly.temperature_2m;
      const zeitZone = data.timezone;
      const aktuelleUhrzeit = new Date().toLocaleTimeString();

      const jetzt = new Date();
      const isoStunde = `${jetzt.getFullYear()}-${String(jetzt.getMonth() + 1).padStart(2, "0")}-${String(jetzt.getDate()).padStart(2, "0")}T${String(jetzt.getHours()).padStart(2, "0")}:00`;

      const index = zeitArray.indexOf(isoStunde);

      let bild = "";

      if (index !== -1) {
        const temperatur = tempArray[index];
        const snowfall = data.hourly.snowfall[index];
        const rain = data.hourly.rain[index];
        const wind_speed = data.hourly.wind_speed_10m[index];
        const cloud_cover = data.hourly.cloud_cover[index];
        const is_day = data.hourly.is_day[index];

        if (snowfall > 0.1) {
          bild = "snow.jpg";
        } else if (rain > 0.1) {
          bild = "rain.jpg";
        } else if (wind_speed > 30) {
          bild = "wind.jpg";
        } else if (cloud_cover > 60) {
          bild = is_day ? "cloud_day.jpg" : "cloud_night.jpg";
        } else {
          bild = is_day ? "sun.jpg" : "moon.jpg";
        }

        wetterAusgabe.innerHTML = `
          <div class="card border-0">
            <img src="/3.0.0/images/weather/${bild}" alt="Wetter">
            <div class="card-body ps-0" >
              <h5 class="card-title" style="">${temperatur}°C</h5>
              <p class="card-text">Zeitzone:</span> ${zeitZone}</p>
            </div>
          </div>
        `;
      } else {
        wetterAusgabe.innerHTML = `<div class="alert alert-warning">Keine Temperatur zur aktuellen Zeit gefunden.</div>`;
      }
    });
}

getWeather();