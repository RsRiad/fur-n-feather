<?php
include_once("../model/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $pet_id = $_POST['pet_id'];
    $customer_id = $_POST['customer_id'];
    $agent_id = $_POST['agent_id'];

    // Create Database object and call processAdoption method
    $db = new Database();
    if ($db->processAdoption($pet_id, $customer_id, $agent_id)) {
        // Update the pet status to 'Adopted'
        $db->updatePet($pet_id, null, null, 'Adopted');
        
        echo "Adoption processed successfully!";
        // Optionally, redirect after success
        // header("Location: success_page.php");
    } else {
        echo "Error processing adoption!";
    }
}
?>
