<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption Shop Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>

    <main>
        <!-- CRUD Operations Section -->
        <section class="crud-section">
            <h2>Manage Pets</h2>
            <form id="pet-form">
                <input type="text" id="pet-id" placeholder="Pet ID" required>
                <input type="text" id="breed" placeholder="Breed" required>
                <input type="number" id="age" placeholder="Age" required>
                <input type="text" id="category" placeholder="Category" required>
                <button type="submit">Add/Update Pet</button>
                <button type="button" onclick="deletePet()">Delete Pet</button>
            </form>
        </section>

        <section class="crud-section">
            <h2>Manage Veterinarians</h2>
            <form id="vet-form">
                <input type="text" id="vet-id" placeholder="Vet ID" required>
                <input type="text" id="vet-name" placeholder="Name" required>
                <input type="text" id="vet-specialization" placeholder="Specialization" required>
                <button type="submit">Add/Update Vet</button>
                <button type="button" onclick="deleteVet()">Delete Vet</button>
            </form>
        </section>

        <section class="crud-section">
            <h2>Manage Pet Agents</h2>
            <form id="agent-form">
                <input type="text" id="agent-id" placeholder="Agent ID" required>
                <input type="text" id="agent-name" placeholder="Name" required>
                <input type="text" id="agent-contact" placeholder="Contact" required>
                <button type="submit">Add/Update Agent</button>
                <button type="button" onclick="deleteAgent()">Delete Agent</button>
            </form>
        </section>

        <!-- Display Tables Section -->
        <section class="tables-section">
            <h2>Existing Information</h2>
            <table id="pet-table">
                <thead>
                    <tr>
                        <th>Pet ID</th>
                        <th>Breed</th>
                        <th>Age</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated dynamically -->
                </tbody>
            </table>

            <table id="vet-table">
                <thead>
                    <tr>
                        <th>Vet ID</th>
                        <th>Name</th>
                        <th>Specialization</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated dynamically -->
                </tbody>
            </table>

            <table id="agent-table">
                <thead>
                    <tr>
                        <th>Agent ID</th>
                        <th>Name</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data will be populated dynamically -->
                </tbody>
            </table>
        </section>

        <!-- Notifications Section -->
        <section class="notifications-section">
            <h2>Notifications</h2>
            <div id="notifications">
                <!-- Notifications will be populated dynamically -->
            </div>
        </section>

        <!-- Financial Monitoring Section -->
        <section class="financial-section">
            <h2>Financial Overview</h2>
            <div>
                <p>Total Money Transactions: <span id="total-transactions">$0.00</span></p>
                <p>Total Salaries: <span id="total-salaries">$0.00</span></p>
            </div>
        </section>
    </main>

    <script src="../js/admin.js"></script>
</body>
</html>