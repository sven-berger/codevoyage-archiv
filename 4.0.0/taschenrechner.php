<?php 
  $pageTitle = "Taschenrechner";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/header.php");
?>

<div data-controller="Taschenrechner" class="taschenrechner border rounded">
    <input type="text" data-Taschenrechner-target="eingabe" class="p-3 bg-light form-control-plaintext w-100 fs-5" readonly>
    <div class="buttons d-grid m-2 gap-2">
        <!--- 1. Reihe --->
        <button data-action="click->Taschenrechner#DisplayLeeren" data-value="C" class="btn p-1 rounded bg-light fs-4 border">C</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="/" class="btn p-1 rounded bg-light fs-4 border">/</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="*" class="btn p-1 rounded bg-light fs-4 border">*</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="-" class="btn p-1 rounded bg-light fs-4 border">-</button>

        <!--- 2. Reihe --->
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="7" class="btn p-1 rounded bg-light fs-4 border">7</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="8" class="btn p-1 rounded bg-light fs-4 border">8</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="9" class="btn p-1 rounded bg-light fs-4 border">9</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="+" class="btn p-1 rounded bg-light fs-4 border">+</button>

        <!--- 3. Reihe --->
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="4" class="btn p-1 rounded bg-light fs-4 border">4</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="5" class="btn p-1 rounded bg-light fs-4 border">5</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="6" class="btn p-1 rounded bg-light fs-4 border">6</button>
        <button data-action="click->Taschenrechner#Ausrechnen" data-value="=" class="btn p-1 rounded bg-light fs-4 border">=</button>

        <!--- 4. Reihe --->
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="1" class="btn p-1 rounded bg-light fs-4 border">1</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="2" class="btn p-1 rounded bg-light fs-4 border">2</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="3" class="btn p-1 rounded bg-light fs-4 border">3</button>
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="." class="btn p-1 rounded bg-light fs-4 border">.</button>

        <!--- 5. Reihe --->
        <button data-action="click->Taschenrechner#AufdasDisplay" data-value="0" class="btn p-1 rounded bg-light fs-4 border">0</button>
    </div>
</div>

<style>
    .taschenrechner > .buttons {
        grid-template-columns: repeat(4, 1fr);
    }
</style>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/footer.php"); ?>