<?php
$bereich = 'PHP-Bereich';
$pageTitle = 'Startseite der PHP-Instanz';
require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/instance.header.inc.php");
    error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

?>

<?php echo $section_beginn; ?>
<?php 
echo 'Hallo und herzlich willkommen im PHP-Bereich!';
?>
<?php echo $section_ende; ?>

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/php.footer.inc.php");
?>