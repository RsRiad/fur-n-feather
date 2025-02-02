<?php
include '../model/db.php'; 
// session_start();

$name = "";
$email = "";
$phone = "";
$password = "";
$errors = []; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["username"]) ? $_POST["username"] : "";
    $email = isset($_POST["signup-email"]) ? $_POST["signup-email"] : "";
    $phone = isset($_POST["signup-phone"]) ? $_POST["signup-phone"] : "";
    $password = isset($_POST["signup-password"]) ? $_POST["signup-password"] : "";

    
    if (empty($name)) {
        $errors['username'] = "Username is required.";
    }

   
    if (empty($email)) {
        $errors['signup-email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['signup-email'] = "Invalid email format.";
    }

    
    if (empty($phone)) {
        $errors['signup-phone'] = "Phone number is required.";
    } elseif (!is_numeric($phone) || strlen($phone) < 11) {
        $errors['signup-phone'] = "Phone number must be at least 11 digits.";
    }

   
    if (empty($password)) {
        $errors['signup-password'] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors['signup-password'] = "Password must be at least 6 characters.";
    }

    if (empty($errors)) {
        $mydb = new mydb();
        $conobj = $mydb->openCon();
        $result = $mydb->addAdmin("admin_data", $name, $email, $password, $phone, $conobj);

        if ($result === TRUE) {
            header("Location: ../view/dashboard.php"); 
            exit();
        } else {
            $errors['database'] = "Database error: " . $conobj->error;
        }
    }
}
?>
