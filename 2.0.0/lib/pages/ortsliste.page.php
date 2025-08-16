<?php
    require_once "$_SERVER[DOCUMENT_ROOT]" . "/2.0.0/lib/class/ortsliste.class.php";
    $stadtliste = new OrtsListe();
    $stadtliste->ortsnamenZaehlen($connection);  // Anzahl der Orte zählen   
    $stadtliste->buchstaben();  // Liste der Buchstaben anzeigen
    $stadtliste->ortsnamen($connection);  // Orte, basierend auf dem gewählten Buchstaben anzeigen
?>