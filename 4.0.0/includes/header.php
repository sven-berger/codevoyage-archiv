<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if ($pageTitle == ''): ?>JavaScript | samwilliam<?php else: ?><?= $pageTitle; ?><?php endif; ?></title>

<!-- Font Awesome 6 Free einbinden -->
<link rel="stylesheet" href="https://codevoyage.samwilliam.de/3.0.0/assets/fontawesome/css/all.min.css">

<!-- Bootstrap einbinden -->
<link href="https://codevoyage.samwilliam.de/3.0.0/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Eigene CSS -->
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/css.php"); ?>

<!-- Google Fonts: Roboto -->
<style>
/* Für die normale Schriftbreite */
@font-face {
  font-family: 'Roboto';
  src: url('https://codevoyage.samwilliam.de/3.0.0/assets/fonts/roboto/Roboto-Regular.ttf') format('ttf');
  font-weight: 400;
  font-style: normal;
}

/* Für die dickere Schriftbreite */
@font-face {
  font-family: 'Roboto';
  src: url('https://codevoyage.samwilliam.de/3.0.0/assets/fonts/roboto/Roboto-Bold.ttf') format('ttf');
  font-weight: 700;
    font-style: normal;
}
</style>

<!-- Eigene JSON-Liste -->
<script src="/assets/jsonList.js"></script>
</head>

<body class="bg-primary-subtle p-0 m-0 d-flex flex-column vh-100 fs-6" style="font-family: 'Roboto', sans-serif;">

<!-- Navigation -->
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/nav.php"); ?>

<!-- Beginn des Inhaltes -->
<div class="container">
<div class="row">

<!-- Linke Seitenleiste -->
<div class="col-md-3">
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/sidebarLeft.php"); ?>
</div>
  
<!-- Hauptinhalt -->
<div class="col-md-9">
<?php if ($pageTitle == ''): ?>
  <div class="mt-3"></div>
<?php else: ?>
  <div id="siteContent" class="bg-white p-3 rounded-3 mt-3 mb-3 border border-primary-subtle container shadow-sm">
    <h3 class="text-center fw-light"><?= $pageTitle; ?></h3>
  </div>
<?php endif; ?>

<main class="bg-white p-3 border border-primary-subtle rounded-3 container shadow-sm">