<?php
require '../model/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact_number = $_POST['contact_number'];

    $errors = [];

    // Validate Name
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    // Validate Email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate Password
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // Validate Contact Number
    if (empty($contact_number)) {
        $errors[] = "Contact number is required.";
    } elseif (!preg_match('/^[0-9]{10}$/', $contact_number)) {
        $errors[] = "Invalid contact number.";
    }

    // If there are errors, return to the form
    if (count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        header("Location: ../views/register-pet-agent.php");
        
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $db = new Database();
    $query = "INSERT INTO PetAgent (name, email, password_hash, contact_number) VALUES (?, ?, ?, ?)";
    $stmt = $db->conn->prepare($query);
    $stmt->bind_param("ssss", $name, $email, $password_hash, $contact_number);

    if ($stmt->execute()) {
        // Redirect to success page or dashboard
        header("Location: ../views/index.php");
        exit();
    } else {
        // Database error
        $_SESSION['errors'] = ["An error occurred while registering. Please try again."];
        header("Location: ../views/register_agent.php");
        exit();
    }
}
?>
