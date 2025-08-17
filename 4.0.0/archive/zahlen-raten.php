<?php 
  $pageTitle = "Zahlen raten";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/header.php");
?>

<script src="/js/zahlen-raten.js"></script>

<form id="zahlenGenerieren" class="d-grid" onsubmit="return datenFestlegen();" method="POST">
    <div class="mb-3">
        <label for="min" class="fw-light form-label">Zahl von</label>
            <input type="number" id="min" name="min" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="max" class="fw-light form-label">Bis</label>
        <input type="number" id="max" name="max" class="form-control" required>
    </div>           
    <div class="row">
        <div class="col-auto">
            <button type="submit" class="btn btn-success">Speichern</button>
        </div>
    </div>
</form>

<div id="ausgabe" class="text-danger"></div>
<div id="ausgabeGesuchteZahl"></div>

<div id="ratenBeginn" class="mb-3 d-none alert alert-info">
    Die Zahl wurde generiert - Möge das Raten beginnen!
</div>

<form id="zahlRaten" class="d-none" onsubmit="return zahlRaten();" method="POST">
    <div class="mb-3">
        <label for="zahl" class="fw-light form-label">Zahl</label>
        <input type="number" id="zahl" name="zahl" class="form-control" required>
    </div>           
    <div class="row">
        <div class="col-auto">
            <button type="submit" class="btn btn-success">Los gehts!</button>
        </div>
    </div>
</form>

<div id="rateFeedback"></div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/footer.php"); ?>