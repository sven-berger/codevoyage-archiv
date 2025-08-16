function rechenOperation() {
    const erste_zahl = parseFloat(document.getElementById("erste_zahl").value.trim());
    const zweite_zahl = parseFloat(document.getElementById("zweite_zahl").value.trim());
    const operation = document.getElementById("operation").value.trim();
    const ergebnisAusgabe = document.getElementById("ergebnisAusgabe");
    
    if (isNaN(erste_zahl) || isNaN(zweite_zahl)) {
        ergebnisAusgabe.innerHTML = '<span class="text-danger">Bitte gib zwei gültige Zahlen ein.</span>';
        return false;
    }

    let ergebnis;

    if (operation === "Addition") {
        ergebnis = erste_zahl + zweite_zahl;
    } else if (operation === "Subtraktion") {
        ergebnis = erste_zahl - zweite_zahl;
    } else if (operation === "Multiplikation") {
        ergebnis = erste_zahl * zweite_zahl;
    } else if (operation === "Division") {
        if (zweite_zahl === 0) {
            ergebnisAusgabe.innerHTML = '<span class="text-danger">Durch 0 darf nicht geteilt werden!</span>';
            return false;
        }
        ergebnis = erste_zahl / zweite_zahl;
    }

    ergebnisAusgabe.innerHTML = `
        <div class="p-3 border rounded alert alert-primary mt-3"">
            <span class="text-alert">Das Ergebnis ist: ${ergebnis}</span>
        </div>
        `;
    return false;
}