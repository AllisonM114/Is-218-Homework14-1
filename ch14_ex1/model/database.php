<?php
class Database {
    private static $dsn = 'mysql:host=sql1.njit.edu;dbname=adm52';
    private static $username = 'adm52';
    private static $password = '55G0oL4D';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>
