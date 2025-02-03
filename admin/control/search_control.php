<?php
require '../model/db.php';

$db = new Database();


if (isset($_GET['query']) && !empty($_GET['query'])) {
    $query = $_GET['query'];
    $pets = $db->searchPets($query);
} else {

    $pets = $db->getAvailablePets();
}

echo json_encode($pets); 
