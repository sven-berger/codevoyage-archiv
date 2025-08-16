import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"
export default class extends Controller {
    static targets = [
        "formularName",
        "formularAlter",
        "formularAktuellerStand",

        "tabelleName",
        "tabelleAlter",
        "tabelleAktuellerStand",  

        "eingabeStudiengang",
        "formularAusgabe"
    ]

    aktuellerStandDetails() {
        const stand = this.formularAktuellerStandTarget.value.trim()
        const eingabeStudiengang = this.eingabeStudiengangTarget
        eingabeStudiengang.classList.add("d-none")

        if (stand === "Studieren") {
            eingabeStudiengang.classList.remove("d-none")
            eingabeStudiengang.classList.add("d-block")
        }
    }

    datenAusgeben(event) {
        event.preventDefault()

        const name = this.formularNameTarget.value.trim();
        const alter = parseInt(this.formularAlterTarget.value.trim(), 10);
        const stand = this.formularAktuellerStandTarget.value.trim();

        const tabelleName = this.tabelleNameTarget;
        const tabelleAlter = this.tabelleAlterTarget;
        const tabelleAktuellerStand = this.tabelleAktuellerStandTarget;

        if (name !== "" && alter > 0 && stand !== "") {
            this.formularAusgabeTarget.classList.remove("d-none")
            tabelleName.textContent = name
            tabelleAlter.textContent = alter
            tabelleAktuellerStand.textContent = stand
        } else {
            alert("Du hast ungültige Daten angegeben.");
        }
    }
}