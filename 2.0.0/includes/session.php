<?php
ob_start();
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . "/2.0.0/includes/database-connect.php");

// Standard: kein Benutzer
$benutzername = null;

// Falls der Benutzer bereits eingeloggt ist, setzen wir $benutzername und beenden NICHT die Datei
if (isset($_SESSION['benutzername'])) {
    $benutzername = $_SESSION['benutzername'];
} elseif (isset($_COOKIE['login_token'])) {
    $token = $_COOKIE['login_token'];

    $stmt = $connection->prepare("SELECT * FROM benutzer WHERE token = :token");
    $stmt->bindParam(":token", $token);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Automatischer Login
        $_SESSION['benutzername'] = $user['benutzername'];
        $benutzername = $user['benutzername'];
    }
}
