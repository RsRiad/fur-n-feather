<?php
include '../model/db.php'; // Include database class

$errors = []; // Initialize an array for error messages
$success= ""; 
    $name            = "";
    $email           = "";
    $phone           = 0;
    $license         = 0;
    $specialField    = "";
    $password        = "";
    $confirmPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values safely
    $name = isset($_POST["signup-name"]) ? $_POST["signup-name"] : "";
    $email = isset($_POST["signup-email"]) ? $_POST["signup-email"] : "";
    $phone = isset($_POST["signup-phone"]) ? $_POST["signup-phone"] : "";
    $license = isset($_POST["signup-license"]) ? $_POST["signup-license"] : "";
    $specialField = isset($_POST["signup-special-field"]) ? $_POST["signup-special-field"] : "";
    // $availableTime="";
    $password = isset($_POST["signup-password"]) ? $_POST["signup-password"] : "";
    $confirmPassword = isset($_POST["signup-confirm-password"]) ? $_POST["signup-confirm-password"] : "";

    // Validate Name
    if (empty($name)) {
        $errors['signup-name'] = "Name is required.";
    }

    // Validate Email
    if (empty($email)) {
        $errors['signup-email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['signup-email'] = "Invalid email format.";
    }

    // Validate Phone
    if (empty($phone)) {
        $errors['signup-phone'] = "Phone number is required.";
    } elseif (!is_numeric($phone) || strlen($phone) < 11) {
        $errors['signup-phone'] = "Phone number must be at least 11 digits.";
    }

    // Validate License
    if (empty($license)) {
        $errors['signup-license'] = "License is required.";
    }

    // Validate Special Field
    if (empty($specialField)) {
        $errors['signup-special-field'] = "Special field is required.";
    }

    // Validate Password
    if (empty($password)) {
        $errors['signup-password'] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors['signup-password'] = "Password must be at least 6 characters.";
    }

    // Validate Confirm Password
    if (empty($confirmPassword)) {
        $errors['signup-confirm-password'] = "Please confirm your password.";
    } elseif ($password !== $confirmPassword) {
        $errors['signup-confirm-password'] = "Passwords do not match.";
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $mydb = new mydb();
        $conobj = $mydb->openCon();

        // Insert vet details into database
        $result = $mydb->addVet("vet", $name, $email,$password, $phone, $license, $specialField,  $conobj);

        if ($result === TRUE) {
            $success = "Registration successful! Redirecting...";
            header("Location: ../view/dashboard.php"); 
            exit();
        } else {
            $errors['database'] = "Error: " . $conobj->error;
        }
    }
}
?>
