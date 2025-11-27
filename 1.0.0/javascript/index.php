<?php
    $bereich = 'JavaScript-Bereich';
    $pageTitle = 'Startseite der JavaScript-Instanz';
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/instance.header.inc.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
?>

<?php echo $section_beginn; ?>
<div id="hallo"></div>
<script src="https://codevoyage.riftcore.de/1.0.0/javascript/assets/index.js"></script>
<?php echo $section_ende; ?>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/js.footer.inc.php");
?>