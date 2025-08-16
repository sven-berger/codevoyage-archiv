<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT MAX(anschaffungswert) AS 'Maximaler Anschaffungswert' FROM fahrraeder;

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT MAX(anschaffungswert) AS 'max_anschaffungswert' FROM fahrraeder;";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Höchster Anschaffungswert</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['max_anschaffungswert'] . "€"; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");