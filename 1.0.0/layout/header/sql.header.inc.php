<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://codevoyage.riftcore.de/1.0.0/python/static/css/style.css">
    <link rel="stylesheet" href="/4.0.0/assets/highlightjs/styles/default.min.css">
    <script src="/4.0.0/assets/highlightjs/highlight.min.js"></script>
    <script>
    hljs.highlightAll();
    </script>
    <link rel="stylesheet" href="/4.0.0/assets/fontawesome/css/all.min.css">
    <title><?php echo $pageTitle; ?></title>
</head>

<style>
.hljs {
    padding: 1em !important;
    background: khaki !important;
    border-radius: 8px !important;
    border: 1px solid #ccc !important;
}

.pre code.hljs,
code.hljs {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}
</style>
</head>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/includes/database.inc.php");
    $mariadbVersion = getMariaDBVersion($connection);
    $section_beginn = "<div class='section'>";
    $section_ende = "</div>";

    ini_set('display_errors', 1); // Zeigt die Fehler direkt im Browser an
    ini_set('display_startup_errors', 1); // Zeigt Startup-Fehler an
    error_reporting(E_ALL); // Setzt das Fehlerniveau auf alle Fehler, Warnungen und Hinweise


?>

<body>

    <div class="header">
        <?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/includes/navigation.inc.php"); ?>
    </div>
    <div class="main">
        <div class="content">
            <h2 class="section-title">SQL-Befehl</h2>
            <pre><code class="language-sql">