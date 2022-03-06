<?php


namespace command;

use \PDO;

class Connection
{
    private static string $username ="root";
    private static string $password ="";
    private static string $url ="mysql:host=localhost;dbname=klinick;charset=utf8";
    private static PDO $pdo;

    public static function connect(): PDO {
        try {
            self::$pdo = new PDO(self::$url, self::$username, self::$password);
            return self::$pdo;
        } catch (PDOException $e) {
            die("Error " . $e->getMessage());
        }
    }
}