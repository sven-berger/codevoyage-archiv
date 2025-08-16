<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT fahrraeder.fahrradnr, modelle.bezeichnung AS modell_bezeichnung, fahrradarten.bezeichnung AS fahrradart_bezeichnung FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung NOT IN ('Kinderrad', 'Jugendrad');

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT fahrraeder.fahrradnr, modelle.bezeichnung AS modell_bezeichnung, fahrradarten.bezeichnung AS fahrradart_bezeichnung FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung NOT IN ('Kinderrad', 'Jugendrad') ORDER BY fahrraeder.fahrradnr ASC;";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Modellbezeichnung</th>
            <th>Fahrradbezeichnung</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['modell_bezeichnung']; ?></td>
                <td><?php echo $inhalt['fahrradart_bezeichnung']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");