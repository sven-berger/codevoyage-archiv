import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
    static targets = [
        "eckdaten",
        "min",
        "max",
        "zahlVersuch",
        "meldung1",
        "meldung2",
        "meldung3",
        "meldung4",
        "ZahlRaten",
        "gesuchteZahl"
    ]

    RateSpiel(event) {
        event.preventDefault();
 
        const min = parseInt(this.minTarget.value.trim(),10)
        const max = parseInt(this.maxTarget.value.trim(),10)
        const ZahlRaten = this.ZahlRatenTarget
        const eckdaten = this.eckdatenTarget
        const meldung1 = this.meldung1Target


        if (!isNaN(min) && !isNaN(max)) {
            function zufallszahl(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            if (max < min) {
                alert(`${max} muss höher als ${min} sein!`)
            }


            eckdaten.classList.remove("d-grid")
            eckdaten.classList.add("d-none")

            this.gesuchteZahl = zufallszahl(min, max);

            meldung1.classList.remove("d-none")
            ZahlRaten.classList.remove("d-none");
        }
    }

    ZahlPruefen(event) {
        event.preventDefault();
        const zahlVersuch = parseInt(this.zahlVersuchTarget.value.trim(), 10)

        const meldung1 = this.meldung1Target
        const meldung2 = this.meldung2Target
        const meldung3 = this.meldung3Target
        const meldung4 = this.meldung4Target
        const ZahlRaten = this.ZahlRatenTarget

        meldung2.classList.add("d-none")
        meldung3.classList.add("d-none")
        meldung4.classList.add("d-none")

        if (zahlVersuch < this.gesuchteZahl) {
            meldung1.classList.add("d-none")
            meldung2.classList.remove("d-none")
        } else if (zahlVersuch > this.gesuchteZahl) {
            meldung1.classList.add("d-none")
            meldung3.classList.remove("d-none")
        } else {
            ZahlRaten.classList.add("d-none")
            meldung1.classList.add("d-none")
            meldung4.classList.remove("d-none")
        }
    }

    NeuesSpiel() {
        this.minTarget.value = "";
        this.maxTarget.value = "";
        this.zahlVersuchTarget.value = "";

        this.meldung1Target.classList.add("d-none");
        this.meldung2Target.classList.add("d-none");
        this.meldung3Target.classList.add("d-none");
        this.meldung4Target.classList.add("d-none");

        this.ZahlRatenTarget.classList.add("d-none");

        this.eckdatenTarget.classList.remove("d-none");
        this.eckdatenTarget.classList.add("d-grid");

        this.gesuchteZahl = null;
    }
}