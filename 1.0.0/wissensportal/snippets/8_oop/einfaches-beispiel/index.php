<?php require("Person.class.php"); ?>

<form method="POST">
    <label for="vorname">Vorname</label>
    <input type="text" id="vorname" name="vorname" required>
    
    <label for="zweitname">Zweitname</label>
    <input type="text" id="zweitname" name="zweitname" required>

    <label for="nachname">Nachname</label>
    <input type="text" id="nachname" name="nachname" required>

    <label for="wohnort">Wohnort</label>
    <input type="text" id="wohnort" name="wohnort" required>
    
    <button type="submit">Absenden</button>
    <button type="reset">Zurücksetzen</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vorname'], $_POST['zweitname'], $_POST['nachname'], $_POST['wohnort'])) {

// Daten aus dem Formular holen und gegen XSS absichern
$vorname = htmlspecialchars($_POST['vorname']);
$zweitname = htmlspecialchars($_POST['zweitname']);
$nachname = htmlspecialchars($_POST['nachname']);
$wohnort = htmlspecialchars($_POST['wohnort']);

// Objekt der Klasse Person erstellen
$person = new Person($vorname, $zweitname, $nachname, $wohnort);

// Ausgabe der Begrüßung
echo $person->vorstellen();
}