<?php
include '../model/db.php'; // Include the database class
// session_start();

$errors = []; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = isset($_POST["login-email"]) ? $_POST["login-email"] : "";
    $password = isset($_POST["login-password"]) ? $_POST["login-password"] : "";

    // Validate Email
    if (empty($email)) {
        $errors['login-email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['login-email'] = "Invalid email format.";
    }

    // Validate Password
    if (empty($password)) {
        $errors['login-password'] = "Password is required.";
    }

   
    if (empty($errors)) {
        $mydb = new MyDB();
        $conobj = $mydb->openCon();

        $admin = $mydb->loginAdmin("admin_data", $email, $password, $conobj);

        if ($admin) {
            // $_SESSION["admin_name"] = $admin["name"];
            // $_SESSION["admin_email"] = $admin["email"];
            header("Location: ../view/dashboard.php"); // Redirect to admin dashboard
            exit();
        } else {
            $errors['login'] = "Invalid email or password!";
        }
    }
}
?>
