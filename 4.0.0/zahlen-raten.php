<?php 
  $pageTitle = "Zahlen raten";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/header.php");
?>

<div data-controller="ZahlenRaten">

<form data-action="submit->ZahlenRaten#RateSpiel" data-ZahlenRaten-target="eckdaten" class="d-grid" method="POST">
    <div class="mb-3">
        <label for="min" class="fw-light form-label">Zahl von:</label>
        <input type="number" data-ZahlenRaten-target="min" id="min" name="min" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="max" class="fw-light form-label">Bis:</label>
        <input type="number" data-ZahlenRaten-target="max" id="max" name="max" class="form-control" required>
    </div>           
    <div class="row">
        <div class="col-auto">
            <button type="submit" class="btn btn-success">Speichern</button>
        </div>
    </div>
</form>

<div data-ZahlenRaten-target="meldung1" class="alert alert-primary d-none">
  <h5>Die Zahl wurde erfolgreich festlegt.</h5>
  <p>Möge das Raten beginnen!</p> 
</div>

<div data-ZahlenRaten-target="meldung2" class="alert alert-danger d-none">
  <h5>Du liegst du niedrig, du musst <strong>höher</strong> tippen!</h5>
  <p>Neuer Versuch!</p> 
</div>

<div data-ZahlenRaten-target="meldung3" class="alert alert-danger d-none">
  <h5>Du liegst du hoch, du musst <strong>niedriger</strong> tippen!</h5>
  <p>Neuer Versuch!</p> 
</div>

<div data-ZahlenRaten-target="meldung4" class="alert alert-success d-none">
  <h5>Herzlichen Glückwünsch, du hast die richtige Zahl erraten!</h5>
  <a href="" data-action="click->ZahlenRaten#NeuesSpiel" class="fw-bold text-dark text-decoration-none">Neues Spiel starten</a>
</div>

<form data-action="submit->ZahlenRaten#ZahlPruefen" data-ZahlenRaten-target="ZahlRaten" class="mt-3 d-none" method="POST">
    <div class="mb-3">
        <label for="zahlVersuch" class="fw-light form-label">Zahl versuchen</label>
        <input type="number" data-ZahlenRaten-target="zahlVersuch" id="zahlVersuch" name="zahlVersuch" class="form-control" required>
    </div>
    <div class="row">
        <div class="col-auto">
            <button type="submit" class="btn btn-success">Speichern</button>
        </div>
    </div>
  </form>
</div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/footer.php"); ?>