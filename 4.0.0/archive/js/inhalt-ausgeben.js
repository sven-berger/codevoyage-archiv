function formAuswahl() {
    const auswahl = document.getElementById("auswahl").value;
    const formAuswahl = document.getElementById("form-auswahl");
    const formText = document.getElementById("form-text");
    const formZahl = document.getElementById("form-zahl");
  
    if (auswahl === "text") {
      formAuswahl.classList.add("d-none");
      formText.classList.remove("d-none");
      formText.classList.add("d-grid");
      return false; 
    } else if (auswahl === "zahlen") {
      formAuswahl.classList.add("d-none");
      formZahl.classList.remove("d-none");
      formZahl.classList.add("d-grid");
      return false;
    }
    return false;
}
 
function textAusgeben() {
    const ausgabeText = document.getElementById("ausgabe-text").value;
    const ausgabeTextAnzahl = parseInt(document.getElementById("ausgabe-text-anzahl").value, 10);
    const ausgabeInhalt = document.getElementById("ausgabeInhalt");
    const textinListeAuswahl = document.querySelector('input[name="textinListe"]:checked');

    if (ausgabeText.trim() !== "" && !isNaN(ausgabeTextAnzahl) && ausgabeTextAnzahl > 0) {
      let ergebnis = "";
      for (let i = 1; i <= ausgabeTextAnzahl; i++) {
        ergebnis += `${ausgabeText}<br>`;
      }

      if (textinListeAuswahl && textinListeAuswahl.value === "Ja") {
        let listeneintraege = "";
        for (let i = 1; i <= ausgabeTextAnzahl; i++) {
          listeneintraege += `<li>${ausgabeText}</li>`;
        }
      
        ausgabeInhalt.innerHTML = `
          <div class="p-3 mt-3 border rounded shadow-sm">
            <ol class="ms-0">${listeneintraege}</ol>
          </div>
        `;
      } else {
        let zeilen = "";
        for (let i = 1; i <= ausgabeTextAnzahl; i++) {
          zeilen += `${ausgabeText}<br>`;
        }
      
        ausgabeInhalt.innerHTML = `
          <div class="p-3 mt-3 border rounded shadow-sm">
            ${zeilen}
          </div>
        `;
      }
    } else {
      ausgabeInhalt.innerHTML = "Bitte gib einen gültigen Text und eine Anzahl größer als 0 ein.";
    }

    return false;
}
  
function zahlenAusgeben() {
    const ausgabeZahlBeginn = parseInt(document.getElementById("ausgabe-zahl-beginn").value, 10);
    let ausgabeZahlZwischenschritt = parseInt(document.getElementById("ausgabe-zahl-zwischenschritt").value, 10);
    if (isNaN(ausgabeZahlZwischenschritt) || ausgabeZahlZwischenschritt <= 0) {
      ausgabeZahlZwischenschritt = 1; // Standard: Schrittweite 1
    }
    const ausgabeZahlEnde = parseInt(document.getElementById("ausgabe-zahl-ende").value, 10);
    const ausgabeInhalt = document.getElementById("ausgabe");
  
    if (ausgabeZahlBeginn > 0 && ausgabeZahlEnde > 0) {
      let ergebnis = "";
      for (let i = ausgabeZahlBeginn; i <= ausgabeZahlEnde; i += ausgabeZahlZwischenschritt) {
        ergebnis += `${i}<br>`;
      }
      ausgabeInhalt.innerHTML = `
      <div class="p-3 mt-3 border rounded shadow-sm">
        ${ergebnis}
      </div>
      `;
    } else {
      ausgabeInhalt.innerHTML = "Bitte gib eine gültige Start- und Endzahl ein."
    }
  
    return false;
}