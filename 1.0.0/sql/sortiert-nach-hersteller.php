<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT hersteller.herstellernr, hersteller.herstellername, fahrradarten.bezeichnung FROM hersteller JOIN fahrradarten ORDER BY `hersteller`.`herstellernr` ASC;

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT hersteller.herstellernr, hersteller.herstellername, fahrradarten.bezeichnung FROM hersteller JOIN fahrradarten ORDER BY `hersteller`.`herstellernr` ASC;";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Herstellernummer</th>
            <th>Herstellername</th>
            <th>Bezeichnung</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['herstellernr']; ?></td>
                <td><?php echo $inhalt['herstellername']; ?></td>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");