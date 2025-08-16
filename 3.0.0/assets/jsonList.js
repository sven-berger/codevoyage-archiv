const jsonSources = {
  sven: "/json/sven.json",
  loveday: "/json/loveday.json",
  witze: "https://v2.jokeapi.dev/joke/Any?lang=de"
};

let jsonData = null;

function getJSON(key, callback) {
  const url = jsonSources[key];
  fetch(url)
    .then((r) => r.json())
    .then((data) => {
      jsonData = data;
      if (callback) callback(); // führe bei Erfolg eine Funktion aus
    })
    .catch((err) => console.error("Fehler beim Laden:", err));
}