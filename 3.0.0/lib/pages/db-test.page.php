<?php
$host = 'localhost'; // <-- wichtig: das ist der Name deines MySQL-Services im Docker-Netz
$port = 3306;
$dbname = 'codevoyage';
$username = 'sven';
$password = 'DieS?ms22';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbindung erfolgreich!";
} catch (PDOException $e) {
    echo "Verbindung fehlgeschlagen: " . $e->getMessage();
}
