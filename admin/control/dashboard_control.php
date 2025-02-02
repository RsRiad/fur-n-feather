<?php
include '../model/db.php';

$database = new mydb();
$conn = $database->openCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];
    $table = $_POST['table'];
    
    if ($table == "customer") {
        if ($action == "insert") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $nid = $_POST['nid'];
            $address = $_POST['address'];
            
            $result = $database->addCustomer($table, $name, $email, $password, $phone, $nid, $address, $conn);
            echo $result ? "Customer added successfully" : "Error adding customer";
        }
        elseif ($action == "update") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $nid = $_POST['nid'];
            $address = $_POST['address'];
            
            $result = $database->updateCustomerByID($table, $conn, $id, $name, $email, $phone, $nid, $address);
            echo $result ? "Customer updated successfully" : "Error updating customer";
        }
        elseif ($action == "delete") {
            $id = $_POST['id'];
            
            $result = $database->deleteCustomerByID($table, $conn, $id);
            echo $result ? "Customer deleted successfully" : "Error deleting customer";
        }
        elseif ($action == "search") {
            $id = $_POST['id'];
            $result = $database->searchCustomerByID($table, $conn, $id);
            
            if ($result->num_rows > 0) {
                echo json_encode($result->fetch_assoc());
            } else {
                echo json_encode(["error" => "Customer not found"]);
            }
        }
    }
    elseif ($table == "admin") {
        if ($action == "insert") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            
            $result = $database->addAdmin($table, $name, $email, $password, $phone, $conn);
            echo $result ? "Admin added successfully" : "Error adding admin";
        }
        elseif ($action == "update") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            
            $result = $database->updateAdminByID($table, $conn, $id, $name, $email, $phone);
            echo $result ? "Admin updated successfully" : "Error updating admin";
        }
        elseif ($action == "delete") {
            $id = $_POST['id'];
            
            $result = $database->deleteCustomerByID($table, $conn, $id);
            echo $result ? "Admin deleted successfully" : "Error deleting admin";
        }
        elseif ($action == "search") {
            $id = $_POST['id'];
            $result = $database->searchAdminByID($table, $conn, $id);
            
            if ($result->num_rows > 0) {
                echo json_encode($result->fetch_assoc());
            } else {
                echo json_encode(["error" => "Admin not found"]);
            }
        }
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $table = $_GET['table'];
    $result = $database->showAllAdmins($table, $conn);
    
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
}
?>
