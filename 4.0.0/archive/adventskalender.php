<?php 
  $pageTitle = "Adventskalender";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/header.php");
?>

<div id="adventskalender" class="p-2 bg-success rounded">
    <div>
    <div id="tuerchenTag" class="row d-flex justify-content-center"></div>
        <script src="/js/adventskalender.js"></script>
    </div>
</div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/footer.php"); ?>