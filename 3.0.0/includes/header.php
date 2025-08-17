<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/session.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>samwilliam.de</title>

    <!-- Font Awesome 6 Free einbinden -->
    <link rel="stylesheet" href="https://codevoyage.samwilliam.de/3.0.0/assets/fontawesome/css/all.min.css">

    <!-- Bootstrap einbinden -->
    <link href="https://codevoyage.samwilliam.de/3.0.0/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HightLight.js einbinden -->
    <link rel="stylesheet" href="https://codevoyage.samwilliam.de/3.0.0/assets/highlightjs/styles/default.min.css">
    <script src="https://codevoyage.samwilliam.de/3.0.0/assets/highlightjs/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <!-- Angelegte Stylesheets einbinden -->
    <?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/css.php"); ?>
</head>

<body class="d-flex flex-column vh-100">
    <div class="d-flex flex-grow-1">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/seitenleiste.php"); ?>
    <main class="content bg-white p-3 flex-grow-1">
    <?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/3.0.0/includes/navigation.php"); ?>
    <div class="bg-white round rounded-3 border p-3">