import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
  static targets = [
    "anfrage",
    "antwort",
    "verfassen"
  ]

  connect() {
    this.chatverlauf();
  }

chatverlauf() {
  const anfrage = this.anfrageTarget;
  const antwort = this.antwortTarget;
  const verfassen = this.verfassenTarget;

  // Anfrage-Block erstellen
  const divAnfrage = document.createElement("div");
  divAnfrage.className = "rounded p-3 bg-success mt-2 mb-2 text-white text-start";

  const spanAnfrage = document.createElement("span");
  spanAnfrage.className = "anfrage";
  const frageText = verfassen.value;
  spanAnfrage.textContent = frageText;

  divAnfrage.appendChild(spanAnfrage);
  anfrage.appendChild(divAnfrage);
  
  // Antwort-Block erstellen
  const divAntwort = document.createElement("div");
  divAntwort.className = "rounded bg-warning p-4 justify-content-end d-flex text-end mb-4";

  const spanAntwort = document.createElement("span");
  spanAntwort.className = "antwort";
  spanAntwort.textContent = "Dies ist eine erste statische Antwort.";

  divAntwort.appendChild(spanAntwort);
  antwort.appendChild(divAntwort);

  // Verfassen-Block erstellen
  const inputVerfassen = document.createElement("input");
  inputVerfassen.type = "text";
  inputVerfassen.className = "form-control p-3 mt-2";
  inputVerfassen.placeholder = "Stelle deine Frage...";
  verfassen.replaceWith(inputVerfassen);
  this.verfassenTarget = inputVerfassen;
}

Abschicken() {
  
}
}
