<?php
require '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_id = $_POST['pet_id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $status = $_POST['status'];

    $db = new Database();

    if ($db->updatePet($pet_id, $name, $age, $status)) {
        header("Location: ../views/view-pets.php");
    } else {
        echo "Error updating pet.";
    }
}
?>
