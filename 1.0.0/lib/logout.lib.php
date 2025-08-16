<?php

// Session beenden
$_SESSION = [];
session_destroy();

// Cookie löschen
if (isset($_COOKIE['login_token'])) {
    setcookie("login_token", "", time() - 3600, "/");

    // Token in der Datenbank zurücksetzen
    $stmt = $connection->prepare("UPDATE benutzer SET token = NULL WHERE token = :token");
    $stmt->bindParam(":token", $_COOKIE['login_token']);
    $stmt->execute();
}

// Aktuelle Seite aktualisieren
header("Location: ../1.0.0/index.php");

exit;
