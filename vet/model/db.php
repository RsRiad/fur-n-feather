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


    function loginVet($table, $email, $password, $connobject) {
        $sql = "SELECT * FROM $table WHERE email = '$email' AND password = '$password'";
        $result = $connobject->query($sql);
       
        return ($result->num_rows > 0) ? true : false;
    }

    
    function showAllVets($table, $connobject) {
        $sql = "SELECT * FROM $table";
        return $connobject->query($sql);
    }

    function searchVetByID($table, $connobject, $id) {
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        return $connobject->query($sql);
    }

    function updateVetByID($table, $connobject, $id, $name, $email, $phone, $license, $sp_field) {
        $sql = "UPDATE $table SET 
                name = '$name', 
                email = '$email', 
                phone = '$phone', 
                license = '$license', 
                sp_field = '$sp_field', 
                WHERE id = '$id'";
        
        return $connobject->query($sql);
    }
}

?>
