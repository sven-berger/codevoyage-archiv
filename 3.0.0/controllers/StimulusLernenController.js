// Importiert die Controller-Klasse aus dem Stimulus-Framework über ein CDN (unpkg).
// Diese Klasse stellt die Grundfunktionen für deinen eigenen Controller bereit.
import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

// Definiert eine neue Klasse, die von der Stimulus-Controller-Klasse erbt.
// Das `export default` sorgt dafür, dass dieser Controller beim Import verwendet wird.
export default class extends Controller {

  // Definiert, welche HTML-Elemente (mit `data-<controller>-target="..."`) im Controller gezielt angesprochen werden sollen.
  // Du kannst dann z. B. mit `this.eingabeTarget` direkt auf das Element zugreifen.
  static targets = ["eingabe", "ausgabe"]
  
  // Diese Methode wird aufgerufen, wenn das "submit"-Event (über das HTML-Attribut `data-action="submit->lernstimulus#anzeigen"`) ausgelöst wird.
  anzeigen(event) {
    
    // Verhindert, dass das Formular die Seite neulädt (was standardmäßig beim Absenden passieren würde).
    event.preventDefault()

    // Liest den eingegebenen Text aus dem "eingabe"-Target (also dem Input-Feld)
    // und schreibt ihn in das "ausgabe"-Target (z. B. ein <div>), damit er angezeigt wird.
    this.ausgabeTarget.textContent = this.eingabeTarget.value
  }
}