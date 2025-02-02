<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Pet Adoption</title>
    <link rel="stylesheet" href="adoption.css">
</head>
<body>
    <div class="container">
        <h2>Process Pet Adoption</h2>
        <form action="../controllers/adoption-process.php" method="POST">
            <div class="form-group">
                <label for="pet_id">Select Pet:</label>
                <select name="pet_id" id="pet_id" required>
                    <?php
                    include_once("../model/db.php");
                    $db = new Database();
                    $pets = $db->getAvailablePets();
                    foreach ($pets as $pet) {
                        echo "<option value='" . $pet['pet_id'] . "'>" . $pet['name'] . " (" . $pet['species'] . ")</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="customer_id">Select Customer:</label>
                <select name="customer_id" id="customer_id" required>
                    <?php
                    $customers = $db->getCustomers();
                    foreach ($customers as $customer) {
                        echo "<option value='" . $customer['customer_id'] . "'>" . $customer['name'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="agent_id">Select Pet Agent:</label>
                <select name="agent_id" id="agent_id" required>
                    <option value="1">Agent 1</option>
                    <option value="2">Agent 2</option>
                </select>
            </div>
            <button type="submit" class="btn">Process Adoption</button>
        </form>

        <!-- Back to Dashboard Button -->
        <div class="back-btn-container">
            <a href="index.php" class="btn-back">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
