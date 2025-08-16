<?php
    $bereich = 'JavaScript-Bereich';
    $pageTitle = 'Startseite der JavaScript-Instanz';
    require_once ("../1.0.0/layout/header/instance.header.inc.php");
?>

<?php echo $section_beginn; ?>
<script src="assets/index.js"></script>
<?php echo $section_ende; ?>

<?php
    require_once ("../1.0.0/layout/footer/js.footer.inc.php");
?>