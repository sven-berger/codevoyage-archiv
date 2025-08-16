<?php $bereich = 'SQL-Bereich'; $pageTitle = 'Startseite der SQL-Instanz'; require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/header/sql.header.inc.php"); ?>

SELECT hersteller.herstellername, COUNT(hersteller.herstellername) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller.herstellername;

<?php include("middle.php"); ?>

<?php
    $sql = "SELECT hersteller.herstellername, COUNT(hersteller.herstellername) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller.herstellername;";
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
                <td><?php echo $inhalt['herstellername']; ?></td>
                <td><?php echo $inhalt['anzahl']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once ($_SERVER['DOCUMENT_ROOT'] . "/1.0.0/layout/footer/sql.footer.inc.php");