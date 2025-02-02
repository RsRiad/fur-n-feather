<?php
require '../model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_id = $_POST['pet_id'];

    $db = new Database();

    if ($db->removePet($pet_id)) {
        header("Location: view_pets.php"); // Redirect back to pet list
        exit;
    } else {
        echo "Error removing pet.";
    }
}
?>
