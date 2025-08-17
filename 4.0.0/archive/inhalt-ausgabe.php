<?php 
  $pageTitle = "Inhalt ausgeben";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/header.php");
?>

<script src="/js/inhalt-ausgeben.js"></script>

<form id="form-auswahl" class="d-grid" onsubmit="return formAuswahl()" method="POST">
    <div class="mb-3">
        <label class="fw-light form-label">Bitte wähle aus, was du ausgeben möchtest:</label>
        <select id="auswahl" name="auswahl" class="form-control">
            <option value="text">Text</option>
            <option value="zahlen">Zahlen</option>
        </select>
    </div>
    <button class="btn btn-success">Absenden</button>
</form>

<form id="form-text" class="d-none" method="POST" onsubmit="return textAusgeben()">
    <div class="mb-3">
        <label class="fw-light form-label">Bitte gib den Text ein, welchen du ausgeben möchtest:</label>
        <input type="text" id="ausgabe-text" name="ausgabe-text" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="fw-light mt-3 form-label">Wie oft möchtest du den Text ausgeben?</label>
        <input type="number" id="ausgabe-text-anzahl" name="ausgabe-text-anzahl" class="form-control" required>
    </div>

    <div class="mb-3" id="textinListeAuswahl">
        <label class="form-label fw-light d-block" for="textinListe">Die Ausgabe in einer Liste erstellen?</label>
        <div class="btn-group" role="group" aria-label="Text-in-Liste">
            <input type="radio" class="btn-check" name="textinListe" id="textinListe-ja" value="Ja" autocomplete="off">
            <label class="btn btn-outline-success" for="textinListe-ja">Ja</label>
            <input type="radio" class="btn-check" name="textinListe" id="textinListe-nein" value="Nein" autocomplete="off">
            <label class="btn btn-outline-danger" for="textinListe-nein">Nein</label>
        </div>
    </div>
    
    <div class="mt-3">
        <div class="row">
            <div class="col-auto">
                <button class="btn btn-success">Absenden</button>
            </div>
        </div>
    </div>
</form>

<form id="form-zahl" class="d-none" method="POST" onsubmit="return zahlenAusgeben()">
    <div class="d-grid">
        <div class="mb-3">
        <label class="fw-light form-label">Bitte wähle aus bei welcher Zahl du <span class="fw-light">beginnen</span> möchtest</label>
        <input type="number" id="ausgabe-zahl-beginn" name="ausgabe-zahl-beginn" class="form-control" required>
        </div>
        
        <div class="mb-3">
        <label class="fw-light form-label">Bitte wähle aus, welchen <span class="fw-light">Zwischenschritt</span> du möchtest</label>
        <input type="number" id="ausgabe-zahl-zwischenschritt" name="ausgabe-zahl-zwischenschritt" class="form-control">
        </div>

        <div class="mb-3">
        <label class="fw-light form-label">Bitte wähle aus bei welcher Zahl du <span class="fw-light">enden</span> möchtest</label>
        <input type="number" id="ausgabe-zahl-ende" name="ausgabe-zahl-ende" class="form-control" required>
        </div>
    </div>
    <button class="btn btn-success">Absenden</button>
</form>

<div id="ausgabeInhalt"></div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/footer.php"); ?>