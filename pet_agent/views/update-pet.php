<?php
require '../model/db.php';

$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pet_id = $_POST['pet_id'];
    echo $pet_id;

    
    $pet = $db->getPetById($pet_id);

    if (!$pet) {
        die("Pet not found.");
    }
} else {
    die("Pet ID not provided.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
    <link rel="stylesheet" href="../views/update-pet.css">
</head>
<body>
    <div class="container">
        <h2>Edit Pet Details</h2>
        <form action="../controllers/update-pet.php" method="POST">
            <input type="hidden" name="pet_id" value="<?= $pet['pet_id']; ?>">

            <label for="name">Pet Name:</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($pet['name']); ?>" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="<?= $pet['age']; ?>" required>

            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="Available" <?= $pet['status'] == 'Available' ? 'selected' : ''; ?>>Available</option>
                <option value="Adopted" <?= $pet['status'] == 'Adopted' ? 'selected' : ''; ?>>Adopted</option>
                <option value="In Training" <?= $pet['status'] == 'In Training' ? 'selected' : ''; ?>>In Training</option>
            </select>

            <button type="submit">Update Pet</button>
        </form>
        <a href="../views/index.php" class="back-btn">Back to Dashboard</a>
    </div>
</body>
</html>
