<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'pet_shop';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name,3306);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    public function searchPets($query) {
        $query = "%" . $query . "%"; // Prepare query for LIKE search
        $sql = "SELECT * FROM Pet WHERE name LIKE ? OR species LIKE ? OR breed LIKE ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $query, $query, $query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    

    // Add a New Pet
    public function addPet($name, $species, $breed, $age, $gender, $status, $vet_id) {
        $sql = "INSERT INTO Pet (name, species, breed, age, gender, status, assigned_vet_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssissi", $name, $species, $breed, $age, $gender, $status, $vet_id);
        return $stmt->execute();
    }

        // Get Available Pets
    public function getAvailablePets() {
        $sql = "SELECT * FROM Pet WHERE status = 'Available'";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Remove a Pet
    public function removePet($pet_id) {
        $sql = "DELETE FROM Pet WHERE pet_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $pet_id);
        return $stmt->execute();
    }

    // Get list of all customers
    public function getCustomers() {
        $sql = "SELECT * FROM Customer";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }



    // Update Pet Details
    public function updatePet($pet_id, $name, $age, $status) {
        $sql = "UPDATE Pet SET name = ?, age = ?, status = ? WHERE pet_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sisi", $name, $age, $status, $pet_id);
        return $stmt->execute();
    }

    // Assign Veterinarian to a Pet
    public function assignVetToPet($pet_id, $vet_id) {
        $sql = "UPDATE Pet SET assigned_vet_id = ? WHERE pet_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ii", $vet_id, $pet_id);
        return $stmt->execute();
    }

        // Get list of all veterinarians
    public function getVets() {
        $sql = "SELECT * FROM Veterinarian";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    // Process Pet Adoption
    public function processAdoption($pet_id, $customer_id, $agent_id) {
        $sql = "INSERT INTO Adoption (pet_id, customer_id, adoption_date, agent_id) VALUES (?, ?, NOW(), ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("iii", $pet_id, $customer_id, $agent_id);
        return $stmt->execute();
    }

    // View Adoption History
    public function getAdoptionHistory() {
        $sql = "SELECT * FROM Adoption";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
            // Get Pet by ID
        public function getPetById($pet_id) {
            $sql = "SELECT * FROM Pet WHERE pet_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $pet_id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        // Get Customer by ID
        public function getCustomerById($customer_id) {
            $sql = "SELECT * FROM Customer WHERE customer_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $customer_id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

        // Get Pet Agent by ID
        public function getAgentById($agent_id) {
            $sql = "SELECT * FROM PetAgent WHERE agent_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("i", $agent_id);
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc();
        }

    // Get Customer Contact Details
    public function getCustomerContact($customer_id) {
        $sql = "SELECT name, contact_number FROM Customer WHERE customer_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $customer_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Logout (destroy session)
    public function logout() {
        session_start();
        session_destroy();
        // header("Location: ../view/");
    }
}
?>
