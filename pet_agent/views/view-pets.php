<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Pets</title>
    <link rel="stylesheet" href="view-pets.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Available Pets</h2>

        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Search by name, species, or breed...">
        </div>

        <table id="pets-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Species</th>
                    <th>Breed</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Update</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody id="pets-tbody">
                <!-- Search results will be populated here via AJAX -->
            </tbody>
        </table>
    </div>

    <!-- Back to Dashboard Button -->
    <div class="back-btn-container">
        <a href="index.php" class="btn-back">Back to Dashboard</a>
    </div>

    <!-- Include search.js -->
    <script src="../scripts/search.js"></script>
</body>
</html>
