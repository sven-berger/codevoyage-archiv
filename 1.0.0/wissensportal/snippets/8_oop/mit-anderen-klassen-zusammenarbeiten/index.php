<?php require("Person.php"); require("Auto.php"); ?>

<form method="POST">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>
    
    <label for="alter">Alter</label>
    <input type="number" id="alter" name="alter" required>

    <label for="auto">Auto</label>
    <input type="text" id="auto" name="auto" required>
    
    <button type="submit">Absenden</button>
    <button type="reset">Zurücksetzen</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['alter'], $_POST['auto'])) {
    
// Daten aus dem Formular holen und gegen XSS absichern
$name = htmlspecialchars($_POST['name']);
$alter = $_POST['alter'];
$auto = htmlspecialchars($_POST['auto']);

$person = new Person($name, $alter);
echo $person->vorstellen();

$auto = new Auto($auto, $person);
echo $auto->beschreibung();

}
?>