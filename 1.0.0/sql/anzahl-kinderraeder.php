<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT COUNT(*) AS anzahl_fahrraeder FROM modelle JOIN fahrradarten ON fahrradarten.artnr = modelle.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT COUNT(*) AS anzahl_fahrraeder FROM modelle JOIN fahrradarten ON fahrradarten.artnr = modelle.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Anzahl der Kinderräder</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['anzahl_fahrraeder']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");