import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
    static targets = ["TuerchenTag"]

    connect() {
        this.TuerchenErstellen();
    }

    TuerchenErstellen() {
         for (let i = 1; i <= 24; i++) {
            
            // Erzeuge einen Button (Türchen)
            const button = document.createElement("button");

            // Weise dem Button mehrere Bootstrap- und eigene Klassen für das Styling zu
            button.className = "tuerchenButton mt-3 mb-3 fs-5 border-warning btn btn-danger fw-bold";

            // Weise dem Button eine Stimulus-Aktion zu: beim Klick soll die Methode 'Reinschauen' ausgeführt werden
            button.dataset.action = "click->Adventskalender#Reinschauen";

            // Speichere die aktuelle Türchenzahl als 'data-tag'-Attribut, damit sie später im Event verwendet werden kann
            button.dataset.tag = i;

            // Zeige die Zahl des Türchens auf dem Button an (z. B. 1, 2, 3, ..., 24)
            button.textContent = i;

            // Erstelle ein div-Element als Spalte für das Türchen (für das Bootstrap-Layout)
            const col = document.createElement("div");
            col.className = "col-md-auto";

            // Füge den Button in die Spalte ein
            col.appendChild(button);

            // Füge die Spalte (mit Button) in das Ziel-Element im HTML ein
            this.TuerchenTagTarget.appendChild(col);
        }
    }

    Reinschauen(event) {
        event.preventDefault();
        const tag = parseInt(event.target.dataset.tag);

        if (tag === 6) {
            alert("Ho Ho Ho! 🎅");
        } else if (tag === 24) {
            alert("Frohe Weihnachten! 🎄");
        } else {
            alert(`Türchen ${tag} geöffnet!`);
        }
    }
}