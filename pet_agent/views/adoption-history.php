<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Adoption History</title>
    <link rel="stylesheet" href="adoption-history.css">
</head>
<body>
    <div class="container">
        <h2>Adoption History</h2>
        <table>
            <thead>
                <tr>
                    <th>Adoption ID</th>
                    <th>Pet Name</th>
                    <th>Species</th>
                    <th>Customer Name</th>
                    <th>Adoption Date</th>
                    <th>Agent</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include Database class and fetch adoption history
                include_once("../model/db.php");
                $db = new Database();
                $adoptions = $db->getAdoptionHistory();
                foreach ($adoptions as $adoption) {
                    // Fetch pet details
                    $pet = $db->getPetById($adoption['pet_id']);
                    // Fetch customer details
                    $customer = $db->getCustomerById($adoption['customer_id']);
                    // Fetch agent details
                    $agent = $db->getAgentById($adoption['agent_id']);
                    echo "<tr>
                            <td>{$adoption['adoption_id']}</td>
                            <td>{$pet['name']}</td>
                            <td>{$pet['species']}</td>
                            <td>{$customer['name']}</td>
                            <td>{$adoption['adoption_date']}</td>
                            <td>{$agent['name']}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Back to Dashboard Button -->
        <div class="back-btn-container">
            <a href="index.php" class="btn-back">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>
