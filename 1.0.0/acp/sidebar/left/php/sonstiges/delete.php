<?php
$bereich = 'Administrationsbereich';
$pageTitle = 'Menüpunkt löschen (Sonstiges)';
require_once ("../1.0.0/layout/header/header.inc.php");

try {
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        echo "Keine gültige ID angegeben!";
        exit;
    }

    $id = $_GET['id'];
    $sql = "DELETE FROM php_sidebar_left_sonstiges WHERE id = :id";
    $stmt = $connection->prepare($sql);
    $stmt->execute([':id' => $id]);
    header("Location: https://codevoyage.samwilliam.de/1.0.0/acp/sidebar/left/php/index.php");
    exit;

} catch (PDOException $e) {
    echo "Fehler: " . htmlspecialchars($e->getMessage());
    exit;
}

require_once ("../1.0.0/layout/footer/acp.footer.inc.php");
?>