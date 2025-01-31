<!-- <script src="../js/registration.js">  </script> -->
<?php
include '../model/db.php';



    






if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    
    

    $name = $_POST["signup-name"];
    $email = $_POST["signup-email"];
    $phone = $_POST["signup-phone"];
    $license = $_POST["signup-license"];
    $special_field = $_POST["signup-special-field"];
    $password = $_POST["signup-password"];
    $confirm_password = $_POST["signup-confirm-password"];

    $mydb = new mydb();
    $conobj = $mydb->openCon();

    // Add vet to the database
    $result = $mydb->addVet("vet", $name, $email, $phone, $license, $special_field, "", $password, $conobj);

    if ($result == TRUE) {
        // $_SESSION["email"] = $email;
        header("Location: ../view/dashboard.php"); 
        // exit();
    } else {
        echo "Error: " . $conobj->error;
    }



    // // Name validation
    // if (empty($name)) {
    //     $errors['signup-name'] = "Name is required.";
    // }

    // // Email validation
    // if (empty($email)) {
    //     $errors['signup-email'] = "Email is required.";
    // } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $errors['signup-email'] = "Invalid email format.";
    // }

    // // Phone validation
    // if (empty($phone)) {
    //     $errors['signup-phone'] = "Phone number is required.";
    // } elseif (!preg_match("/^[0-9]{11}$/", $phone)) {
    //     $errors['signup-phone'] = "Phone number must be 10 digits.";
    // }

    // // License validation
    // if (empty($license)) {
    //     $errors['signup-license'] = "License is required.";
    // }

    // // Special field validation
    // if (empty($special_field)) {
    //     $errors['signup-special-field'] = "Special field is required.";
    // }

    // // Password validation
    // if (empty($password)) {
    //     $errors['signup-password'] = "Password is required.";
    // } elseif (strlen($password) < 6) {
    //     $errors['signup-password'] = "Password must be at least 6 characters.";
    // }

    // // Confirm password validation
    // if (empty($confirm_password)) {
    //     $errors['signup-confirm-password'] = "Confirm Password is required.";
    // } elseif ($password !== $confirm_password) {
    //     $errors['signup-confirm-password'] = "Passwords do not match.";
    // }

    // // Check if there are errors
    // if (!empty($errors)) {
    //     // session_start();
    //     // $_SESSION['errors'] = $errors;
    //     // print_r($errors) ;
    //     // header("Location: registration_form.php");
    //     // exit();
    // } else {
    //     echo "Form submitted successfully!";
    //     // Process form (e.g., insert into database)

    // $mydb = new mydb();
    // $conobj = $mydb->openCon();

    // // Add vet to the database
    // $result = $mydb->addVet("vet", $name, $email, $phone, $license, $special_field, "", $password, $conobj);

    // if ($result === TRUE) {
    //     // $_SESSION["email"] = $email;
    //     header("Location: ../view/dashboard.php"); 
    //     // exit();
    // } else {
    //     echo "Error: " . $conobj->error;
    // }


    // }

    // echo $name;


}
?>
