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

    function addVet($table, $name, $email, $phone, $license, $sp_field, $avail_t, $password, $connobject) {
        $sql = "INSERT INTO $table (name, email, phone, license, sp_field, avail_t, password) 
                VALUES ('$name', '$email', '$phone', '$license', '$sp_field', '$avail_t', '$password')";
        
        return $connobject->query($sql);
    }

    function loginVet($table, $email, $password, $connobject) {
        $sql = "SELECT password FROM $table WHERE email = '$email'";
        $result = $connobject->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                return true; // Login successful
            }
        }
        return false; // Login failed
    }

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
