<?php      
class Database {
    private static $host = 'j3us.your-database.de';
    private static $port = '3306';
    private static $database = 'codevoyage';
    private static $username = 'codevoyage';
    private static $password = 'ta86E8eFhWJYk254';
    private static $connection = null;

    public static function connect() {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO(
                    "mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$database,
                    self::$username,
                    self::$password
                );
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                error_log("Fehler bei der DB-Verbindung: " . $e->getMessage());
                header("HTTP/1.1 500 Internal Server Error");
                exit;
            }
        }
        return self::$connection;
    }
}
// Verbindung abrufen
$connection = Database::connect();