<?php 
  $pageTitle = "Mini-Taschenrechner";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/header.php");
?>

<script src="/js/mini-taschenrechner.js" defer></script>

<form class="d-grid" onsubmit="return rechenOperation();" method="POST">
    <div class="mb-3">  
        <label for="erste_zahl" class="fw-light form-label">Erste Zahl</label>
        <input type="number" step="0.01" id="erste_zahl" name="erste_zahl" class="form-control">
    </div>

    <div class="mb-3">  
        <label for="erste_zahl" class="fw-light form-label">Zweite Zahl</label>
        <input type="number" step="0.01" id="zweite_zahl" name="zweite_zahl" class="form-control">
    </div>

    <div class="mb-3">
        <label for="operation" class="fw-light form-label">Mathematische Operation</label>
        <select id="operation" name="operation" class="d-grid form-control">
            <option>Addition</option>
            <option>Subtraktion</option>
            <option>Multiplikation</option>
            <option>Division</option>
        </select>
    </div>
    
    <div class="row mt-3">
        <div class="col-auto">
            <button type="submit" class="btn btn-success">Ausrechnen</button>
        </div>
        <div class="col-auto">
            <button type="reset" class="btn btn-danger">Zurücksetzen</button>
        </div>
    </div>
</form>

<div id="ergebnisAusgabe"></div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/footer.php"); ?>