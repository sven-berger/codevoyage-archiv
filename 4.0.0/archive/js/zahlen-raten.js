let gesuchteZahl;

// Funktion zum Generieren einer zufälligen Zahl
function zufallszahl(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function datenFestlegen() {
    let min = parseInt(document.getElementById("min").value);
    let max = parseInt(document.getElementById("max").value);
    const ausgabeGesuchteZahl = document.getElementById("ausgabeGesuchteZahl");
    const ausgabe = document.getElementById("ausgabe");

    if (isNaN(min) || isNaN(max)) {
        ausgabe.innerHTML = '<span class="text-danger">Bitte gib zwei gültige Zahlen ein.</span>';
        return false;
    }

    if (min > max) {
        ausgabe.innerHTML = `<span class="fw-light text-danger">${min} ist größer als ${max}.</span>`;
        return false;
    }

    // Zufallszahl generieren
    gesuchteZahl = zufallszahl(min, max);


    // Formulare tauschen
    document.getElementById("zahlenGenerieren").classList.add("d-none");

    document.getElementById("ratenBeginn").classList.remove("d-none");
    document.getElementById("ratenBeginn").classList.add("d-grid");

    document.getElementById("zahlRaten").classList.remove("d-none");
    document.getElementById("zahlRaten").classList.add("d-grid");

    return false;
}

function zahlRaten() {
    let zahl = parseInt(document.getElementById("zahl").value);
    const rateFeedback = document.getElementById("rateFeedback");

    if (zahl < gesuchteZahl || zahl > gesuchteZahl) {
        document.getElementById("ratenBeginn").classList.remove("d-grid");
        document.getElementById("ratenBeginn").classList.add("d-none");
    }

    if (zahl < gesuchteZahl) {
        rateFeedback.innerHTML = `<div class="mt-3 alert alert-warning">Die Zahl ist größer!</div>`;
        return false;
    } else if (zahl > gesuchteZahl) {
        rateFeedback.innerHTML = `<div class="mt-3 alert alert-warning">Die Zahl ist kleiner!</div>`;
    } else {
        document.getElementById("zahlRaten").classList.remove("d-grid");
        document.getElementById("zahlRaten").classList.add("d-none");
        document.getElementById("ratenBeginn").classList.add("d-none");
        rateFeedback.innerHTML = `
        <div class="mb-0 alert alert-success">
        <p>Richtig geraten! 🎉</p>
        <p class="m-0"><button onclick="spielNeustarten()" class="btn btn-secondary">Neu starten</button></p>
        </div>
        `;
    }

    return false;
}

function spielNeustarten() {
    // Formulare zurücksetzen
    document.getElementById("zahlenGenerieren").reset();
    document.getElementById("zahlRaten").reset();

    // Feedback & Ausgaben zurücksetzen
    document.getElementById("ausgabe").innerHTML = '';
    document.getElementById("ausgabeGesuchteZahl").innerHTML = '';
    document.getElementById("rateFeedback").innerHTML = '';
    
    // Formulare sichtbar schalten
    document.getElementById("zahlenGenerieren").classList.remove("d-none");
    document.getElementById("zahlenGenerieren").classList.add("d-grid");

    document.getElementById("zahlRaten").classList.add("d-none");
}