<?php
    $bereich = 'PHP-Bereich';
    $pageTitle = 'Mathematische Operatoren: Teil 2 (Größer-Gleich, Kleiner-Gleich)';
    require_once ($_SERVER['DOCUMENT_ROOT'] . "//1.0.0/layout/header/instance.header.inc.php");
?>

<?php echo $section_beginn; ?>
<form action="mathematische-operatoren-teil2.php" method="get">
    <label for="zahl2">Bitte gib eine zweite Zahl ein:</label>
    <input type="number" id="zahl2" name="zahl2" required>
    
    <label for="vergleich_zahl2">Bitte gib eine zweite Zahl ein, mit der du deine (zweite) Zahl vergleichen möchtest:</label>
    <input type="number" id="vergleich_zahl2" name="vergleich_zahl2" required>
   
    <button type="submit">Eingabe abschicken</button>
</form>
<?php echo $section_ende; ?>

<?php if (isset($_GET['zahl2']) && isset($_GET['vergleich_zahl2'])): ?>
    <?php
        $zweite_zahl = (float)$_GET['zahl2'];
        $vergleich_zahl2 = (float)$_GET['vergleich_zahl2'];
    ?>
    
    <?php if ($zweite_zahl <= $vergleich_zahl2): ?>
        <?php echo $section_beginn; ?>
            <?php echo $zweite_zahl; ?> ist <strong>kleiner oder gleich</strong> als <?php echo $vergleich_zahl2; ?>.
        <?php echo $section_ende; ?>
        <?php elseif ($zweite_zahl >= $vergleich_zahl2): ?>
        <?php echo $section_beginn; ?>
            <?php echo $zweite_zahl; ?> ist <strong>größer oder gleich</strong> als <?php echo $vergleich_zahl2; ?>.
        <?php echo $section_ende; ?>
        <?php else: ?>
        <?php echo $section_beginn; ?>
            <p>Du hast die gleiche Zahl eingegeben.</p>
        <?php echo $section_ende; ?>
    <?php endif; ?>
<?php endif; ?>


<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . "//1.0.0/layout/footer/php.footer.inc.php");
?>