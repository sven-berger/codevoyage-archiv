<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT fahrradarten.bezeichnung, COUNT(*) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr GROUP BY fahrradarten.bezeichnung;

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT fahrradarten.bezeichnung, COUNT(*) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr GROUP BY fahrradarten.bezeichnung;";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Bezeichnung</th>
            <th>Anzahl</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
                <td><?php echo $inhalt['anzahl']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");