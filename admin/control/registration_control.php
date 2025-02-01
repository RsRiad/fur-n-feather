<?php
include '../model/db.php'; // Include your database class file
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $email = $_POST["signup-email"];
    $phone = $_POST["signup-phone"];
    $password = $_POST["signup-password"];
    // $confirm_password = $_POST["signup-confirm-password"];

    // // Check if passwords match
    // if ($password !== $confirm_password) {
    //     echo "Passwords do not match!";
    //     exit();
    // }

    // Validate Username
    $cnt = 0;
    if (empty($name)) {
        $errors['username'] = "Username is required.";
        $cnt++;
    }

    // Validate Email
    if (empty($email)) {
        $errors['signup-email'] = "Email is required.";
        $cnt++;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['signup-email'] = "Invalid email format.";
        $cnt++;
    }

    // Validate Phone
    if (empty($phone)) {
        $errors['signup-phone'] = "Phone number is required.";
        $cnt++;
    } elseif (!is_numeric($phone) || strlen($phone) < 11) {
        $errors['signup-phone'] = "Phone number must be at least 11 digits.";
        $cnt++;
    }

    // Validate Password
    if (empty($password)) {
        $errors['signup-password'] = "Password is required.";
        $cnt++;
    } elseif (strlen($password) < 6) {
        $errors['signup-password'] = "Password must be at least 6 characters.";
        $cnt++;
    }
    print_r($errors);
    // If no errors, insert into database
    if ($cnt == 0) {
        $mydb = new mydb();
        $conobj = $mydb->openCon();
        // $result = $mydb->addAdmin("admin", );
        $result = $mydb->addAdmin("admin_data", $name, $email, $password, $phone, $conobj);

        if ($result === TRUE) {
            $_SESSION["uname"] = $username;
            header("Location: ../view/dashboard.php"); // Redirect to profile page
            exit();
        } else {
            $errors['database'] = "Error: " . $conobj->error;
        }
    }
}
