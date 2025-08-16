import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
  static targets = ["eingabe"]

  connect() {
    this.eingabe = "";
  }

  AufdasDisplay(event) {
    event.preventDefault();
    const wert = event.currentTarget.dataset.value;
    this.eingabe += wert; // neue Eingabe anhängen
    this.eingabeTarget.value = this.eingabe; // ins Input-Feld schreiben
  }

  DisplayLeeren(event) {
    event.preventDefault();
    this.eingabe = ""; // Eingabe löschen
    this.eingabeTarget.value = ""; // auch das Feld leeren
  }

  Ausrechnen(event) {
    event.preventDefault();

    // Schritt 1: Inhalt des Eingabefelds lesen
    const ausdruck = this.eingabeTarget.value;

    // Schritt 2: Mit eval() den mathematischen Ausdruck auswerten
    const ergebnis = eval(ausdruck);
    
    // Schritt 3: Ergebnis zurück ins Feld schreiben
    this.eingabeTarget.value = ergebnis;
    this.eingabe = ergebnis.toString(); // Merken für weitere Eingaben
  }
}