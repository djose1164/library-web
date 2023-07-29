<?php
include "models/Book.php";

interface BookDao {
    public function insert(Book $book);

    public function findById(int $titleId);

    public function allBooks();
}