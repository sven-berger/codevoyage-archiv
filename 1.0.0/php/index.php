<?php
    $bereich = 'PHP-Bereich';
    $pageTitle = 'Startseite der PHP-Instanz';
    require_once ($_SERVER['DOCUMENT_ROOT'] . "//1.0.0/layout/header/instance.header.inc.php");
?>

<?php echo $section_beginn; ?>
<?php 
echo 'Hallo und herzlich willkommen im PHP-Bereich!';
?>
<?php echo $section_ende; ?>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "//1.0.0/layout/footer/php.footer.inc.php");
?>