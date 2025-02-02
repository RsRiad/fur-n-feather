<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer Contact</title>
    <link rel="stylesheet" href="customer-details.css">
</head>
<body>
    <div class="container">
        <h2>Customer Contact Details</h2>

        <form action="" method="GET">
            <div class="form-group">
                <label for="customer_id">Select Customer:</label>
                <select name="customer_id" id="customer_id" required>
                    <?php
                    include_once("../model/db.php");
                    $db = new Database();
                    $customers = $db->getCustomers();
                    foreach ($customers as $customer) {
                        echo "<option value='" . $customer['customer_id'] . "'>" . $customer['name'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn">View Contact Details</button>
        </form>

        <?php
        if (isset($_GET['customer_id'])) {
            $customer_id = $_GET['customer_id'];
            $customer = $db->getCustomerById($customer_id);
            if ($customer) {
                echo "<div class='customer-details'>";
                echo "<h3>Customer Name: " . $customer['name'] . "</h3>";
                echo "<p>Contact Number: " . $customer['contact_number'] . "</p>";
                echo "<p>Email: " . $customer['email'] . "</p>";
                echo "<p>Address: " . $customer['address'] . "</p>";
                echo "</div>";
            } else {
                echo "<p>Customer not found.</p>";
            }
        }
        ?>

        <!-- Back to Dashboard Button -->
        <div class="back-btn-container">
            <a href="index.php" class="btn-back">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
