<?php
include_once "data/Database.php";

function save_contact() {
    try {
        $db = new Database();
        $conn = $db->connection();
        $query = "CALL insert_contact(?, ?, ?, ?)";

        $email = $_POST['email'];
        $name = $_POST['fullname'];
        $subject = $_POST['subject'];
        $commentary = $_POST['commentary'];

        // Call the stored procedure with arguments.
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $name);
        $stmt->bindParam(3, $subject);
        $stmt->bindParam(4, $commentary);

        $stmt->execute();

        show_message($stmt->rowCount());
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function show_message(int $count) {
    echo '<div class="container">';
    if ($count > 0)
        $msg = "Informacion de contacto guardada sastifactoriamente!";
    else
        $msg = "No se ha podido guardar la informacion";

    echo "<h1>{$msg}</h1>";
    echo '</div>';
}

save_contact();
