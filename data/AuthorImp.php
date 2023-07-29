<?php
include "AuthorDao.php";

class AuthorImp implements AuthorDao {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    public function allAuthores() {
        $conn = $this->db->connection();
        $stmt = $conn->query("CALL get_authors()");
        return $stmt->fetchAll();
    }
}