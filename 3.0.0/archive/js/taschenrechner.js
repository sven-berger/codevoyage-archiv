let eingabe = "";

function appendToDisplay(value) {
    eingabe += value;
    document.getElementById('eingabe').value = eingabe;
}

function clearDisplay() {
    eingabe = '';
    document.getElementById('eingabe').value = '';
}

function rechnen() {
    if (/^[0-9+\-*/().\s]+$/.test(eingabe)) {
        const result = Function('"use strict"; return (' + eingabe + ')')();
        document.getElementById('eingabe').value = result;
        eingabe = String(result);
    } else {
        document.getElementById('eingabe').value = 'Ungültige Eingabe';
    }
}