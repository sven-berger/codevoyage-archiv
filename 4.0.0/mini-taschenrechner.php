<?php 
  $pageTitle = "Mini-Taschenrechner";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/header.php");
?>

<div data-controller="MiniTaschenrechner">
    <form class="d-grid" method="POST" data-action="change->MiniTaschenrechner#OperationsAuswahl">
        <div class="d-flex gap-3">
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="ZahlEins" class="form-label fw-light">Erste Zahl</label>
                    <input type="number" name="ZahlEins" id="ZahlEins" class="form-control" data-MiniTaschenrechner-target="ZahlEins" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-2 me-3">
                    <label for="ZahlZwei" class="fw-light mb-2">Zweite Zahl</label>
                    <input type="number" name="ZahlZwei" id="ZahlZwei" class="form-control" data-MiniTaschenrechner-target="ZahlZwei" required>
                </div>
            </div>
        </div>
        <div class="mb-2">
            <label class="fw-light form-label">Bitte wähle aus, welche Operation du ausführen möchtest:</label>
                <select name="operation" class="fw-light form-control" data-MiniTaschenrechner-target="Operation">
                    <option selected disabled hidden>Bitte wähle eine Operation aus</option>
                    <option value="Addieren">Addieren</option>
                    <option value="Subtrahieren">Subtrahieren</option>
                    <option value="Multiplizieren">Multiplizieren</option>
                    <option value="Dividieren">Dividieren</option>
                </select>
        </div>
        <div class="d-grid mt-3">
            <button class="btn btn-danger fw-bold" data-action="click->MiniTaschenRechner#Leeren">Zurücksetzen</button>
        </div>
    </form>

    <div data-MiniTaschenrechner-target="Ergebnis"></div>
</div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/footer.php"); ?>