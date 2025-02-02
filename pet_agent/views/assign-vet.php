<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Veterinarian</title>
    <link rel="stylesheet" href="assign-vet.css">
</head>
<body>
    <div class="container">
        <h2>Assign Veterinarian to Pet</h2>
        <form action="../controllers/assign-vet.php" method="POST">
            <div class="form-group">
                <label for="pet_id">Select Pet:</label>
                <select name="pet_id" id="pet_id" required>
                    <!-- Populate pets from the database -->
                    <?php
                    // Fetch available pets and display options
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
                <label for="vet_id">Select Veterinarian:</label>
                <select name="vet_id" id="vet_id" required>
                    <!-- Populate veterinarians from the database -->
                    <?php
                    // Fetch veterinarians and display options
                    $vets = $db->getVets();
                    foreach ($vets as $vet) {
                        echo "<option value='" . $vet['vet_id'] . "'>" . $vet['name'] . " (" . $vet['specialization'] . ")</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn">Assign Veterinarian</button>
        </form>
    </div>
</body>
</html>
