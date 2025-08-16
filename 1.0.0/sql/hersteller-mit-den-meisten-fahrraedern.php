<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT hersteller.herstellername AS hersteller, COUNT(*) AS anzahl FROM hersteller JOIN modelle ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller ORDER BY anzahl DESC LIMIT 1;

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT hersteller.herstellername AS hersteller, COUNT(*) AS anzahl FROM hersteller JOIN modelle ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller ORDER BY anzahl DESC LIMIT 1;";
    $ausgabe = $connection->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Herstellername</th>
            <th>Anzahl</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ausgabe as $inhalt): ?>
            <tr>
                <td><?php echo $inhalt['hersteller']; ?></td>
                <td><?php echo $inhalt['anzahl']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");