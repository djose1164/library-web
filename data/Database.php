<?php

class Database {
    static $conn;
    /**
     * Obtiene la conexion a la base de datos.
     */
    public function connection() {
        $servername = "localhost";
        $database = "library";
        $username = "library-user";
        $password = "1234";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: ". $e->getMessage();
        }
    }
}