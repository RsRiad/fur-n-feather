<?php

class mydb {

    function openCon() {
        $dbhost = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "mydb"; // Your database name
        $connobject = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

        if ($connobject->connect_error) {
            die("Connection failed: " . $connobject->connect_error);
        }
        return $connobject;
    }

    function addAdmin($table, $name, $email,  $password,$phone, $connobject) {
        $sql = "INSERT INTO $table (name, email, password, phone) 
                VALUES ('$name', '$email', '$password', '$phone')";
        
        return $connobject->query($sql);
    }

    function loginAdmin($table, $email, $password, $connobject) {
        $sql = "SELECT * FROM $table WHERE email = '$email' AND password = '$password'";
        $result = $connobject->query($sql);
        
        return ($result->num_rows > 0) ? true : false;
    }

    function showAllAdmins($table, $connobject) {
        $sql = "SELECT * FROM $table";
        return $connobject->query($sql);
    }

    function searchAdminByID($table, $connobject, $id) {
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        return $connobject->query($sql);
    }

    function updateAdminByID($table, $connobject, $id, $name, $email, $phone) {
        $sql = "UPDATE $table SET 
                name = '$name', 
                email = '$email', 
                phone = '$phone' 
                WHERE id = '$id'";
        
        return $connobject->query($sql);
    }

    function addCustomer($table, $name, $email, $password, $phone, $nid, $address, $connobject) {
        $sql = "INSERT INTO $table (name, email, password, phone, nid, address) 
                VALUES ('$name', '$email', '$password', '$phone', '$nid', '$address')";
        
        return $connobject->query($sql);
    }

    // Customer Login
    function loginCustomer($table, $email, $password, $connobject) {
        $sql = "SELECT * FROM $table WHERE email = '$email' AND password = '$password'";
        $result = $connobject->query($sql);
        
        return ($result->num_rows > 0) ? $result->fetch_assoc() : false;
    }

    // Show All Customers
    function showAllCustomers($table, $connobject) {
        $sql = "SELECT * FROM $table";
        return $connobject->query($sql);
    }

    // Search Customer by ID
    function searchCustomerByID($table, $connobject, $id) {
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        return $connobject->query($sql);
    }

    // Update Customer
    function updateCustomerByID($table, $connobject, $id, $name, $email, $phone, $nid, $address) {
        $sql = "UPDATE $table SET 
                name = '$name', 
                email = '$email', 
                phone = '$phone', 
                nid = '$nid',
                address = '$address' 
                WHERE id = '$id'";
        
        return $connobject->query($sql);
    }

    // Delete Customer
    function deleteCustomerByID($table, $connobject, $id) {
        $sql = "DELETE FROM $table WHERE id = '$id'";
        return $connobject->query($sql);
    }


}

?>
