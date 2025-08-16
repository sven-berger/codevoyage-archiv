<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT fahrraeder.fahrradnr, fahrraeder.anschaffungswert, fahrradarten.bezeichnung FROM fahrraeder JOIN fahrradarten ON fahrraeder.modellnr = fahrradarten.artnr ORDER BY fahrraeder.fahrradnr ASC;

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT fahrraeder.fahrradnr, fahrraeder.anschaffungswert, fahrradarten.bezeichnung FROM fahrraeder JOIN fahrradarten ON fahrraeder.modellnr = fahrradarten.artnr ORDER BY fahrraeder.fahrradnr ASC;";
    $ausgabe = $connection->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Anschaffungswert</th>
            <th>Bezeichnung</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['anschaffungswert'] . "€"; ?></td>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");