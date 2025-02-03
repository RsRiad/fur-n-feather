<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Pets</title>
    <link rel="stylesheet" href="view-pets.css">

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
                    <th>Email</th>
                    <th>Password</th>
                    <th>Sp_field</th>
                    <th>License</th>
                    <th>Phone</th>
                    <!-- <th>Remove</th> -->
                </tr>
            </thead>
            <tbody id="pets-tbody">
                <!-- Search results will be populated here via AJAX -->
            </tbody>
        </table>
    </div>

    <!-- Back to Dashboard Button -->
    <div class="back-btn-container">
        <a href="dashboard.php" class="btn-back">Back to Dashboard</a>
    </div>

    <!-- Include search.js -->
    <script src="../js/search.js"></script>
</body>
</html>
