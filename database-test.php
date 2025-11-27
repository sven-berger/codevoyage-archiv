<?php
$dsn = "mysql:host=server14.febas.net;dbname=CodeVoyage";
$username = "codevoyage";
$password = "biUs=othucajKid>";

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Es liegt ein Problem bei der Datenbankverbindung vor: ' . "<br/><br/>";
    echo "<pre>" . var_dump($e) . "</pre>";
}
?>

<?php if ($connection): ?>
<?php echo $section_beginn; ?>
<p style="text-align: center; font-weight: bold;">Die Datenbankverbindung (MySQL) wurde mit <span
        style="color: green;">Erfolg</span> hergestellt.</p>
<p align="center">Nun kann das Programmieren beginnen!</p>
<?php echo $section_ende; ?>
<?php else: ?>
<p style="text-align: center; font-weight: bold; color: darkred;">Es besteht keine Verbindung zur Datenbank!</p>
<?php endif; ?>

<?php
//    require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/php.footer.inc.php");
?>