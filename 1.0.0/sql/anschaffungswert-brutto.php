<?php $bereich = 'SQL-Bereich';
$pageTitle = 'Startseite der SQL-Instanz';
require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); 
?>

SELECT fahrradnr, anschaffungswert, anschaffungswert * 1.19 AS brutto_anschaftswert FROM fahrraeder WHERE fahrradnr = 6

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT fahrradnr, anschaffungswert, anschaffungswert * 1.19 AS brutto_anschaftswert FROM fahrraeder WHERE fahrradnr = 6";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Anschaffungswert (Brutto)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['brutto_anschaftswert'] . "€"; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");