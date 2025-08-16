import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
    static targets = [
        "Auswahl",

        "FormularText",
        "FormularZahl",

        "AusgabeText",
        "AusgabeTextAnzahl",
        "ListeJa",
        "ListeNein",

        "AusgabeZahl",
        "AusgabeZahlZwischenschritt",
        "AusgabeZahlEnde",

        "AusgabeContainer"
    ]

    FormularAuswahl() {
        const auswahl = this.AuswahlTarget.value.trim();
        const FormularText = this.FormularTextTarget;
        const FormularZahl = this.FormularZahlTarget;

        FormularText.classList.add("d-none");
        FormularZahl.classList.add("d-none");

        if (auswahl === "text") {
            FormularText.classList.remove("d-none");
            FormularText.classList.add("d-grid");
        } else if (auswahl === "zahlen") {
            FormularZahl.classList.remove("d-none");
            FormularZahl.classList.add("d-grid");
        }
    }

    TextAusgeben(event) {
        event.preventDefault();
        const text = this.AusgabeTextTarget.value.trim();
        const anzahl = parseInt(this.AusgabeTextAnzahlTarget.value.trim(), 10);
        const ausgabe = this.AusgabeContainerTarget;
            
        ausgabe.classList.add("d-none");

        if (text !== "" && !isNaN(anzahl) && anzahl > 0) {
            if (this.ListeJaTarget.checked) {
                let ListeJa = "";
                for (let i = 1; i <= anzahl; i++) {
                    ListeJa += `<li>${text}</li>`;
                }
                ausgabe.classList.remove("d-none");
                ausgabe.innerHTML = `<ol>${ListeJa}</ol>`;
            } else {
                // Ausgabe als einzelne Absätze
                let ListeNein = "";
                for (let i = 1; i <= anzahl; i++) {
                    ListeNein += `<p>${text}</p>`;
                }

                ausgabe.classList.remove("d-none");
                ausgabe.innerHTML = ListeNein;
            }
        }
    }

    ZahlenAusgeben(event) {
        event.preventDefault();
        const anfang = parseInt(this.AusgabeZahlTarget.value.trim(), 10);
        let zwischenschritt = parseInt(this.AusgabeZahlZwischenschrittTarget.value.trim(), 10);
        const ende = parseInt(this.AusgabeZahlEndeTarget.value.trim(), 10);
        const ausgabe = this.AusgabeContainerTarget;

        ausgabe.classList.add("d-none");

        // Optional: Überprüfe, ob Eingaben gültig sind
        if (isNaN(anfang) || isNaN(ende)) {
            ausgabe.innerHTML = "Bitte gib gültige Zahlen für Anfang und Ende ein.";
            ausgabe.classList.remove("d-none");
            return;
        }

        if (isNaN(zwischenschritt) || zwischenschritt <= 0) {
            zwischenschritt = 1; // Standard: Schrittweite 1
        }

        if (anfang > ende) {
            ausgabe.innerHTML = "Bitte gib einen gültigen Bereich ein.";
            ausgabe.classList.remove("d-none");
            return;
        }

        if (!isNaN(anfang) && !isNaN(zwischenschritt) && !isNaN(ende)) {
            let ergebnis = "";
            for (let i = anfang; i <= ende; i += zwischenschritt) {
                ergebnis += `<p>${i}</p>`;
            }

            ausgabe.classList.remove("d-none");
            ausgabe.innerHTML = ergebnis;
        }
    }
}