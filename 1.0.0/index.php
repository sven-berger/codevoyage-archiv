<?php
    $bereich = 'Startseite';
    $pageTitle = 'Startseite von CodeVoyage.de';
    require_once ("layout/header/header.inc.php");
    require_once ($_SERVER['DOCUMENT_ROOT'] . "//1.0.0/layout/header/header.inc.php");

?>

<?php
$sql = "SELECT hersteller.herstellername AS hersteller, COUNT(*) AS anzahl FROM hersteller JOIN modelle ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller ORDER BY anzahl DESC LIMIT 1;";
$ausgabe = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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

<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "//1.0.0/layout/footer/index.footer.inc.php");
?>