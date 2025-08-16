export function addiere(zahl1, zahl2) {
    const ergebnis = zahl1 + zahl2;

    const ergebnisAusgabe = document.getElementById("ergebnisAusgabe");
    ergebnisAusgabe.innerHTML = `Das Ergebnis lautet: ${ergebnis}`;
}