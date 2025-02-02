<?php
include_once("../model/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $pet_id = $_POST['pet_id'];
    $vet_id = $_POST['vet_id'];

    // Create Database object and call assignVetToPet method
    $db = new Database();
    if ($db->assignVetToPet($pet_id, $vet_id)) {
        echo "Veterinarian assigned successfully!";
        // Optionally, redirect after success
        // header("Location: success_page.php");
    } else {
        echo "Error assigning veterinarian!";
    }
}
?>
