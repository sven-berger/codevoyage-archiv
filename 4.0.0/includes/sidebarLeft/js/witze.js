function ladeWitz() {
    const url = `https://v2.jokeapi.dev/joke/Any?lang=de`;
  
    fetch(url)
      .then(res => res.json())
      .then(data => {
        const ausgabe = document.getElementById("witzAusgabe");
  
        if (data.error) {
          ausgabe.innerHTML = "Es gab ein Problem beim Laden des Witzes.";
          return;
        }
  
        if (data.type === "single") {
          ausgabe.innerHTML = `<div class="alert alert-success">${data.joke}</div>`;
        } else {
          ausgabe.innerHTML = `
            <div class="alert alert-success">
              ${data.setup}<br><strong>${data.delivery}</strong>
            </div>`;
        }
      })
      .catch(err => {
        document.getElementById("witzAusgabe").innerHTML = "Fehler beim Abrufen des Witzes.";
        console.error(err);
      });
  }