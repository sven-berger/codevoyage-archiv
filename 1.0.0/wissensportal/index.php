<?php
    $bereich = 'Wissensportal';
    require_once ("../1.0.0/layout/header/wissensportal.header.inc.php");
?>

<?php
if (isset($_GET['snippet'])) {
    require_once("../wissensportal/func.index.php");
} elseif (isset($_GET['oop_snippet'])) {
    require_once("../wissensportal/oop.index.php");
} else {
    require_once("../wissensportal/lib/wissensportal.index.lib.php");
}
?>

<?php    
    require_once ("../1.0.0/layout/footer/wissensportal.footer.inc.php");
?>