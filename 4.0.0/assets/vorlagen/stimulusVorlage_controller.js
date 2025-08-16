import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"
export default class extends Controller {

    static targets = [
    "StimulusVorlageFormularName",
    "StimulusVorlageFormularAlter",
    "StimulusVorlageFormularStatus",
    "StimulusVorlageFormularStatusStattdessen",

    "StimulusVorlageTabelle",
    "StimulusVorlageTabelleName",
    "StimulusVorlageTabelleAlter",
    "StimulusVorlageTabelleAuswahl",
    ]
    
    statusDetails() {
        const status = this.StimulusVorlageFormularStatusTarget.value.trim()
        const stattdessen = this.StimulusVorlageFormularStatusStattdessenTarget

        stattdessen.classList.add("d-none")

        if (status === "Sonstiges") {
            stattdessen.classList.remove("d-none")
        }
    }   

    tabelleAusgeben(event) {
        event.preventDefault();

        const FormularName = this.StimulusVorlageFormularNameTarget.value.trim();
        const FormularAlter = parseInt(this.StimulusVorlageFormularAlterTarget.value.trim(), 10)
        const FormularStatus = this.StimulusVorlageFormularStatusTarget.value.trim();

        const TabelleName = this.StimulusVorlageTabelleNameTarget
        const TabelleAlter = this.StimulusVorlageTabelleAlterTarget
        const TabelleAuswahl = this.StimulusVorlageTabelleAuswahlTarget

        const Tabelle = this.StimulusVorlageTabelleTarget

        if (FormularName !== "" && FormularAlter > 0 && FormularStatus !== "") {
            Tabelle.classList.remove("d-none")

            TabelleName.textContent = FormularName
            TabelleAlter.textContent = FormularAlter 
            TabelleAuswahl.textContent = FormularStatus
        }
    
    }
}