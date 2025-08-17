<?php 
  $pageTitle = "Inhaltsausgabe";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/header.php");
?>

<div data-controller="InhaltAusgabe">
<form id="form-auswahl" class="d-grid" method="POST" data-action="change->InhaltAusgabe#FormularAuswahl">
    <label class="fw-light form-label">Bitte wähle aus, was du ausgeben möchtest:</label>
    <select name="auswahl" class="fw-light form-control" data-InhaltAusgabe-target="Auswahl">
        <option value="" selected disabled hidden>Bitte wähle eine Art aus</option>
        <option value="text">Text</option>
        <option value="zahlen">Zahlen</option>
    </select>
</form>

<form data-action="submit->InhaltAusgabe#TextAusgeben" data-InhaltAusgabe-target="FormularText" class="d-none" method="POST">
    <div class="mt-2 mb-2">
        <label class="fw-light form-label">Bitte gib den Text ein, welchen du ausgeben möchtest:</label>
        <input type="text" id="ausgabe-text" name="ausgabe-text" class="form-control" data-InhaltAusgabe-target="AusgabeText" required>
    </div>

    <div class="mb-3">
        <label class="fw-light mt-3 form-label">Wie oft möchtest du den Text ausgeben?</label>
        <input type="number" id="ausgabe-text-anzahl" name="ausgabe-text-anzahl" class="form-control" data-InhaltAusgabe-target="AusgabeTextAnzahl" required>
    </div>

    <div class="mb-3">
        <label class="form-label fw-light d-block" for="textinListe">Die Ausgabe in einer Liste erstellen?</label>
        <div class="btn-group" role="group" aria-label="Text-in-Liste">
            <input type="radio" class="btn-check" name="textinListe" id="textinListe-ja" value="Ja" autocomplete="off" data-InhaltAusgabe-target="ListeJa">
            <label class="btn btn-outline-success" for="textinListe-ja">Ja</label>
            <input type="radio" class="btn-check" name="textinListe" id="textinListe-nein" value="Nein" autocomplete="off" data-InhaltAusgabe-target="ListeNein">
            <label class="btn btn-outline-danger" for="textinListe-nein">Nein</label>
        </div>
    </div>
    
    <div class="mt-3">
        <div class="row d-grid">
            <div class="col-auto d-grid">
                <button type="submit" class="btn btn-success">Absenden</button>
            </div>
        </div>
    </div>
</form>

<form data-action="submit->InhaltAusgabe#ZahlenAusgeben" data-InhaltAusgabe-target="FormularZahl" class="d-none" method="POST">
    <div class="mt-2 mb-2">
        <label class="fw-light form-label">Bitte wähle aus bei welcher Zahl du <span class="fw-bold">beginnen</span> möchtest</label>
        <input type="number" id="ausgabe-zahl-beginn" name="ausgabe-zahl-beginn" class="form-control" data-InhaltAusgabe-target="AusgabeZahl" required>
    </div>
        
    <div class="mb-2">
        <label class="fw-light form-label">Bitte wähle aus, welchen <span class="fw-bold">Zwischenschritt</span> du möchtest</label>
        <input type="number" id="ausgabe-zahl-zwischenschritt" name="ausgabe-zahl-zwischenschritt" data-InhaltAusgabe-target="AusgabeZahlZwischenschritt" class="form-control">
    </div>

    <div class="mb-2">
        <label class="fw-light form-label">Bitte wähle aus bei welcher Zahl du <span class="fw-bold">enden</span> möchtest</label>
        <input type="number" id="ausgabe-zahl-ende" name="ausgabe-zahl-ende" class="form-control" data-InhaltAusgabe-target="AusgabeZahlEnde" required>
    </div>

    <div class="mt-3">
        <div class="row d-grid">
            <div class="col-auto d-grid">
                <button type="submit" class="btn btn-success">Absenden</button>
            </div>
        </div>
    </div>
</form>

<div class="mt-3 d-none" data-InhaltAusgabe-target="AusgabeContainer"></div>

</div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/footer.php"); ?>