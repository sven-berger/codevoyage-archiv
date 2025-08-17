<?php 
  $pageTitle = "Gallery";
  require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/header.php");
?>

<div class="row gallery" data-controller="Gallery">
  <div data-gallery-target="bigPicture" class="d-flex flex-wrap mb-3 gap-4"></div>
  <div data-gallery-target="thumbnail" class="d-flex flex-wrap gap-4 thumbnail"></div>
</div>

<style>
.thumbnail img, .thumbnail video {
    width: 300px;
    height: 300px;
    object-fit: cover;
    border-radius: 5px;
}
</style>


<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/4.0.0/includes/footer.php"); ?>