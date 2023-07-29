<?php
include "BookDao.php";
include "Database.php";

class BookImpl implements BookDao {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insert(Book $book) {
        
    }
    
    public function allBooks() {
        $conn = $this->db->connection();
        $sql = "CALL get_books()";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll();
    }

    public function findById($titleId) {
        $conn = $db->connection();
        $conn.exec("SELECT * FROM titles WHERE id_titulo = $titleId");
    }
}