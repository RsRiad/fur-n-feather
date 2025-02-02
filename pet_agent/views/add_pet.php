<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Pet</title>
    <link rel="stylesheet" href="add_pet.css">
</head>
<body>
    <div class="container">
        <h2>Add New Pet</h2>
        <form action="../controllers/addpet.php" method="POST">
            <label for="name">Pet Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="species">Species:</label>
            <input type="text" id="species" name="species" required>

            <label for="breed">Breed:</label>
            <input type="text" id="breed" name="breed">

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="Available">Available</option>
                <option value="Adopted">Adopted</option>
                <option value="In Training">In Training</option>
            </select>

            <label for="vet_id">Assigned Veterinarian (ID):</label>
            <input type="number" id="vet_id" name="vet_id">

            <button type="submit">Add Pet</button>
        </form>
    </div>
</body>
</html>
