<?php

class mydb {

    function openCon() {
        $dbhost = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "mydb";
        $connobject = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
        return $connobject;
    }
        // name	email	phone	license	sp_field	avail_t	password	
 function addVet($table, $name, $email, $password, $phone, $license, $sp_field, $connobject) {
        $sql = "INSERT INTO $table (name, email, password, phone, license, sp_field) 
                VALUES ('$name', '$email','$password', $phone, $license, '$sp_field')";
        
        return $connobject->query($sql);
    }

    // function loginVet($table, $email, $password, $connobject) {
    //     $sql = "SELECT password FROM $table WHERE email = '$email'";
    //     $result = $connobject->query($sql);

    //     if ($result->num_rows > 0) {
    //         $row = $result->fetch_assoc();
    //         if (password_verify($password, $row['password'])) {
    //             return true; 
    //         }
    //     }
    //     return false;
    // }

    function loginVet($table, $email, $password, $connobject) {
        $sql = "SELECT * FROM $table WHERE email = '$email' AND password = '$password'";
        $result = $connobject->query($sql);
       
        return ($result->num_rows > 0) ? true : false;
    }


    // public function loginVet($tableName, $email, $password, $conn) {
    //     $sql = "SELECT * FROM $tableName WHERE email = '$email' AND password = '$password'";
    //     $result = mysqli_query($conn, $sql);
    
    //     return ($result && mysqli_num_rows($result) == 1) ? mysqli_fetch_assoc($result) : false;
    // }



    // public function loginVet($table, $email, $password, $conn) {
    //     $sql = "SELECT * FROM $table WHERE email = '$email'";
    //     $result = mysqli_query($conn, $sql);
    
    //     if ($result && mysqli_num_rows($result) == 1) {
    //         $user = mysqli_fetch_assoc($result);
    //         if (password_verify($password, $user['password'])) {
    //             return $user;
    //         }
    //     }
    //     return false;
    // }
    
    
    function showAllVets($table, $connobject) {
        $sql = "SELECT * FROM $table";
        return $connobject->query($sql);
    }

    function searchVetByID($table, $connobject, $id) {
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        return $connobject->query($sql);
    }

    function updateVetByID($table, $connobject, $id, $name, $email, $phone, $license, $sp_field, $avail_t) {
        $sql = "UPDATE $table SET 
                name = '$name', 
                email = '$email', 
                phone = '$phone', 
                license = '$license', 
                sp_field = '$sp_field', 
                avail_t = '$avail_t' 
                WHERE id = '$id'";
        
        return $connobject->query($sql);
    }
}

?>
