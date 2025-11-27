<?php
    $bereich = 'Wissensportal';
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/wissensportal.header.inc.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
?>

<?php
if (isset($_GET['snippet'])) {
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/wissensportal/func.index.php");
} elseif (isset($_GET['oop_snippet'])) {
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/wissensportal/oop.index.php");
} else {
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/wissensportal/lib/wissensportal.index.lib.php");
}  
?>

<?php    
    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/wissensportal.footer.inc.php");
?>