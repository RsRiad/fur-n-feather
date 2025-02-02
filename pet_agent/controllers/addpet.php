<?php
require '../model/db.php'; // Include database class

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $vet_id = !empty($_POST['vet_id']) ? $_POST['vet_id'] : NULL;

    $db = new Database();
    
    if ($db->addPet($name, $species, $breed, $age, $gender, $status, $vet_id)) {
        echo "Pet added successfully!";
    } else {
        echo "Error adding pet.";
    }
}
?>
