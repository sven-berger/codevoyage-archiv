<?php 
  $pageTitle = "Stimulus erlernen";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/header.php");
?>

<div data-controller="StimulusLernen">
  <form data-action="submit->StimulusLernen#anzeigen" method="POST" class="grid">
    <input type="text" data-StimulusLernen-target="eingabe" placeholder="Text eingeben..." class="form-control">
    <button type="submit" class="mt-3 btn btn-success">Absenden</button>
  </form>

  <div data-StimulusLernen-target="ausgabe" class="border p-3 border rounded fw-light mt-3"></div>
</div>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/footer.php"); ?>