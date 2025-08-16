<?php if (ob_get_level() == 0) ob_start(); require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/includes/session.php"); ?>
<!DOCTYPE html>  
<html lang="de">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>samwilliam.de</title>  

    <!-- Font Awesome 6 Free einbinden -->
    <link rel="stylesheet" href="https://codevoyage.samwilliam.de/3.0.0/assets/fontawesome/css/all.min.css">

    <!-- HightLight.js einbinden -->
    <link rel="stylesheet" href="https://codevoyage.samwilliam.de/3.0.0/assets/highlightjs/styles/default.min.css">
    <script src="https://codevoyage.samwilliam.de/3.0.0/assets/highlightjs/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <!-- Angelegte Stylesheets einbinden -->
    <link rel="stylesheet "href="https://codevoyage.samwilliam.de/3.0.0/assets/tinymce/langs/de.js">
    <link rel="stylesheet" href="https://codevoyage.samwilliam.de/1.0.0/styles/styles.css">
</head>

<body>
<div class="container">
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/includes/acp-seitenleiste.php"); ?>

<div class="main-content">
<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/includes/navigation.php"); ?>