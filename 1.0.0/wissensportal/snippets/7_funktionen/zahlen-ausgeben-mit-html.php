<form method="POST">
    <label for="startzahl">Startzahl</label>
    <input type="number" id="startzahl" name="startzahl" required>
    
    <label for="endzahl">Endzahl</label>
    <input type="number" id="endzahl" name="endzahl" required>

    <label for="startzahl">Stellenwert</label>
    <input type="number" id="stellenwert" name="stellenwert" required>
    
    <button type="submit">Vergleichen</button>
</form>

<?php 
if (isset($_POST['startzahl'], $_POST['endzahl'], $_POST['stellenwert'])) {
    $startzahl = (int)$_POST['startzahl'];
    $endzahl = (int)$_POST['endzahl'];
    $stellenwert = (int)$_POST['stellenwert'];

    function zahlen_ausgeben($startzahl, $endzahl, $stellenwert) {
        foreach (range($startzahl, $endzahl, $stellenwert) as $zahl) {
            echo $zahl . '<br>';
        }
    }

    zahlen_ausgeben($startzahl, $endzahl, $stellenwert);
}
?>