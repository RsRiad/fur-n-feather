<?php

class MyDB {
    function openCon() {
        $dbhost = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "mydb";
        $connobject = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

        if ($connobject->connect_error) {
            die("Connection failed: " . $connobject->connect_error);
        }
        return $connobject;
    }

    function addVet($table, $name, $email, $password, $phone, $license, $sp_field, $connobject) {
        $sql = "INSERT INTO $table (name, email, password, phone, license, sp_field) 
                VALUES ('$name', '$email', '$password', '$phone', '$license', '$sp_field')";
        return $connobject->query($sql);
    }

    function showAllVets($table, $connobject) {
        $sql = "SELECT * FROM $table";
        return $connobject->query($sql);
    }

    function searchVet($table, $connobject, $keyword) {
        $sql = "SELECT * FROM $table WHERE name LIKE '%$keyword%' OR email LIKE '%$keyword%' OR phone LIKE '%$keyword%'";
        return $connobject->query($sql);
    }

    function updateVetByID($table, $connobject, $id, $name, $email, $password, $phone, $license, $sp_field) {
        $sql = "UPDATE $table SET 
                name = '$name',
                email = '$email',
                password = '$password',
                phone = '$phone',
                license = '$license',
                sp_field = '$sp_field' 
                WHERE id = '$id'";
        return $connobject->query($sql);
    }

    function deleteVetByID($table, $connobject, $id) {
        $sql = "DELETE FROM $table WHERE id = '$id'";
        return $connobject->query($sql);
    }
    private $conn;
    public function searchPets($query) {
        $query = "%" . $query . "%"; // Prepare query for LIKE search
        $sql = "SELECT * FROM vet WHERE name LIKE ? OR email LIKE ? OR id LIKE ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $query, $query, $query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }


}

?>
