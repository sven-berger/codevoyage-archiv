<?php
    require_once("../1.0.0/lib/class/zahlen-raten.class.php");    
    $zahlenRaten = new ZahlenRaten();

    if (!isset($_POST['zahl'])) {
        include("../1.0.0/lib/forms/zahlen-raten.form.php");
    }

    if (!isset($_SESSION['zufallszahl'])) {
        $_SESSION['zufallszahl'] = rand(0, 101);
    }

    if (isset($_POST['zahl'])) {
        $zahl = (int)$_POST['zahl'];
        $zufallszahl = $_SESSION['zufallszahl'];

        if ($zahl < $zufallszahl) {
            $zahlenRaten->higherRant();
        } elseif ($zahl > $zufallszahl) {
            $zahlenRaten->lowerRant();
        } else {
            $zahlenRaten->rightNumber();
        }
    }

?>