<?php
session_start();
include "../model/db.php"; 

$db = new mydb();
$conn = $db->openCon();

$table = "msg";

// Function to fetch all messages
function fetchMessages($conn, $table) {
    $sql = "SELECT type, msg FROM $table ORDER BY id ASC";
    $result = $conn->query($sql);

    $messages = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $messages[] = ["type" => $row["type"], "msg" => $row["msg"]];
        }
    }
    return json_encode($messages); // Return JSON format for JavaScript
}

// Handle message sending
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["msg_input"])) {
    $message = $_POST["msg_input"];
    $type = "vet";  
    $email = "rsriad00@.com"; 

    if ($db->addMessage($table, $type, $email, $message, $conn)) {
        // echo "Message sent successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Fetch messages when requested via AJAX
if (isset($_GET["fetch"])) {
    echo fetchMessages($conn, $table);
}

//$conn->close();


$sql = "SELECT name, email, phone FROM vet LIMIT 1";
$result = $conn->query($sql);

$vet = ["name" => "", "email" => "", "phone" => ""]; // Default values
if ($result->num_rows > 0) {
    $vet = $result->fetch_assoc();
}

$conn->close();
?>
