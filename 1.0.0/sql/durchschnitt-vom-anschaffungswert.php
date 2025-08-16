<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT AVG(anschaffungswert) AS 'Durchschnittswert' FROM fahrraeder;

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT AVG(anschaffungswert) AS 'durchschnittswert' FROM fahrraeder;";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Durchschnittswert</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['durchschnittswert'] . "€"; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");