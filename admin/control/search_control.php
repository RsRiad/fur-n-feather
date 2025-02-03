<?php
require '../model/db.php';

$db = new Database();

// Check if there's a search query
if (isset($_GET['query']) && !empty($_GET['query'])) {
    $query = $_GET['query'];
    // Get pets matching the search query
    $pets = $db->searchPets($query);
} else {
    // Get all available pets
    $pets = $db->getAvailablePets();
}

echo json_encode($pets); // Return the result as JSON
