<?php

include "../model/db.php";

$db = new MyDB();
$conn = $db->openCon();

$message = "";
$vets = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    // Add Vet
    if ($action == 'add') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $license = $_POST['license'];
        $s_field = $_POST['s_field'];

        if ($db->addVet("vet", $name, $email, $password, $phone, $license, $s_field, $conn)) {
            $message = "Vet added successfully!";
        } else {
            $message = "Failed to add vet: " . $conn->error; 
        }
    }

    // Update Vet
    if ($action == 'update') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $license = $_POST['license'];
        $s_field = $_POST['s_field'];

        if ($db->updateVetByID("vet", $conn, $id, $name, $email, $password, $phone, $license, $s_field)) {
            $message = "Vet updated successfully!";
        } else {
            $message = "Failed to update vet: " . $conn->error;
        }
    }

    // Delete Vet
    if ($action == 'delete') {
        $id = $_POST['id'];

        if ($db->deleteVetByID("vet", $conn, $id)) {
            $message = "Vet deleted successfully!";
        } else {
            $message = "Failed to delete vet: " . $conn->error;
        }
    }

    // Search Vet
    if ($action == 'search') {
        $keyword = $_POST['keyword']; 
        $result = $db->searchVet("vet", $conn, $keyword); 
        $vets = []; 
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $vets[] = $row; 
            }
        } else {
            $message = "No results found or an error occurred: " . $conn->error; 
        }
    }
}


if (!isset($_POST['action']) || $_POST['action'] != 'search') {
    $result = $db->showAllVets("vet", $conn);
    while ($row = $result->fetch_assoc()) {
        $vets[] = $row;
    }
}
?>