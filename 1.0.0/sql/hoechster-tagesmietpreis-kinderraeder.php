<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT MAX(modelle.tagesmietpreis) AS hoechster_tagesmietpreis, modelle.bezeichnung FROM modelle JOIN fahrradarten WHERE fahrradarten.bezeichnung = 'Kinderrad';

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT MAX(modelle.tagesmietpreis) AS hoechster_tagesmietpreis, modelle.bezeichnung FROM modelle JOIN fahrradarten WHERE fahrradarten.bezeichnung = 'Kinderrad';";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Modellname</th>
            <th>Höchster Tagesmietpreis (Kinderrad)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
                <td><?php echo $inhalt['hoechster_tagesmietpreis'] . "€"; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");