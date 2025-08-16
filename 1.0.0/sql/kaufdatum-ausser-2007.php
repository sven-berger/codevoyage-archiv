<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) < 2007 OR YEAR(kaufdatum) > 2007;

SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) <> 2007;

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) < 2007 OR YEAR(kaufdatum) > 2007 ORDER BY `fahrraeder`.`kaufdatum` ASC;";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Kaufdatum</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['kaufdatum']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");