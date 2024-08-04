<?php
class Conexion {
    private static $host = "localhost";
    private static $db_name = "eventos_db";
    private static $username = "root";
    private static $password = "";
    private static $con = null;

    public static function getConexion() {
        if (self::$con == null) {
            try {
                self::$con = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
                self::$con->exec("set names utf8");
            } catch(PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
        }
        return self::$con;
    }
}


