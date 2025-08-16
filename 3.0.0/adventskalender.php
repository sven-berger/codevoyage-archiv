<?php 
  $pageTitle = "Adventskalender";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/header.php");
?>

<div data-controller="Adventskalender" class="p-2 bg-success rounded">
    <div class="m-0 p-2 bg-success rounded">
        <div data-Adventskalender-target="TuerchenTag" class="row d-flex justify-content-center"></div>
    </div>
</div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/footer.php"); ?>