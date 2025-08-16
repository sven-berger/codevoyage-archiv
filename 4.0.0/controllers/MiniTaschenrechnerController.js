import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
    static targets = [
        "ZahlEins",
        "ZahlZwei",
        "Operation",
        "Ergebnis"
    ]

    OperationsAuswahl(event) {
        event.preventDefault();

        const ZahlEins = parseFloat(this.ZahlEinsTarget.value.trim(), 10);
        const ZahlZwei = parseFloat(this.ZahlZweiTarget.value.trim(), 10);
        const Operation = this.OperationTarget.value.trim();
        const Ergebnis = this.ErgebnisTarget;

        Ergebnis.classList.add("d-none");

        let berechnung = "";
        if (!isNaN(ZahlEins) || !isNaN(ZahlZwei)) {
            if (Operation === "Addieren") {
                berechnung = `<p class="mb-2">Das Ergebnis lautet:</p><span class="fw-bold">${ZahlEins + ZahlZwei}</span>`;
            } else if (Operation === "Subtrahieren") {
                berechnung = `<p class="mb-2">Das Ergebnis lautet:</p><span class="fw-bold">${ZahlEins - ZahlZwei}</span>`;
            } else if (Operation === "Multiplizieren") {
                berechnung = `<p class="mb-2">Das Ergebnis lautet:</p><span class="fw-bold">${ZahlEins * ZahlZwei}</span>`;
            } else if (Operation === "Dividieren") {
                if (ZahlZwei === 0) {
                    berechnung = "Durch 0 darf nicht geteilt werden!";
                } else {
                    berechnung = `<p class="mb-2">Das Ergebnis lautet:</p><span class="fw-bold">${ZahlEins / ZahlZwei}</span>`;
                }
            }
        } else {
            berechnung = "Bitte gib zwei gültige Zahlen ein.";
        }

        if (berechnung != "") {
        Ergebnis.innerHTML = `
            <div class="alert alert-success mt-3">
                ${berechnung}
            </div>
        `;
        Ergebnis.classList.remove("d-none");
        }

    }

    Leeren() {
        const Ergebnis = this.ErgebnisTarget;

        Ergebnis.classList.add("d-none");
        this.ZahlEinsTarget.value = "",
        this.ZahlZweiTarget.value = "";
    }
}