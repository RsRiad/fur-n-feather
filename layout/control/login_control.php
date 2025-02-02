<?php
include "./model/db.php";

$email    = "";
$password ="" ;
 $email=$_REQUEST["email"];
 $password=$_REQUEST["pass"];

 echo $email;
 echo $password;

 $mydb = new mydb();
 $conobj = $mydb->openCon();

 $vet = $mydb->loginVet("vet", $email, $password, $conobj);

 if ($vet) {
     // $_SESSION["admin_name"] = $admin["name"];
     // $_SESSION["admin_email"] = $admin["email"];
     header("Location: ../layout/shop.php"); // Redirect to admin dashboard
     exit();
 } else {
     echo  "Invalid email or password!";
 }
?>