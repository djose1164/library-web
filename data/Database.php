<?php

class Database {
    /**
     * Obtiene la conexion a la base de datos.
     */
    public function connection() {
        $servername = "localhost";
        $database = "library";
        $username = "library-user";
        $password = "1234";

        try {
            return new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        } catch (PDOException $e) {
            echo "Connection failed: ". $e->getMessage();
        }
    }
}