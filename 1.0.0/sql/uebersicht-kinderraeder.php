<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT fahrraeder.fahrradnr, fahrradarten.bezeichnung, hersteller.herstellername FROM fahrraeder JOIN modelle ON fahrraeder.modellnr = modelle.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr WHERE fahrradarten.bezeichnung = 'Kinderrad';

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT fahrraeder.fahrradnr, fahrradarten.bezeichnung, hersteller.herstellername FROM fahrraeder JOIN modelle ON fahrraeder.modellnr = modelle.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr WHERE fahrradarten.bezeichnung = 'Kinderrad';";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Bezeichnung</th>
            <th>Herstellername</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
                <td><?php echo $inhalt['herstellername']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");