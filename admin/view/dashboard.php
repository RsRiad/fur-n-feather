<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/dashboard.js" defer></script>
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h2>Admin Dashboard</h2>
            <div class="admin-info">
                <span>Admin: John Doe (admin@example.com)</span>
                <button class="logout">Logout</button>
            </div>
        </header>
        
        <nav>
            <button class="tab-button" onclick="showTab('admin')">Admins</button>
            <button class="tab-button" onclick="showTab('customer')">Customers</button>
        </nav>
        
        <section class="tab-content" id="admin">
            <h3>Admin Management</h3>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="admin-table"></tbody>
            </table>
            <button class="insert" onclick="openForm('admin')">Insert New Admin</button>
            <input type="text" id="search-admin" placeholder="Search by ID...">
            <button onclick="searchRecord('admin')">Search</button>
        </section>
        
        <section class="tab-content" id="customer" style="display: none;">
            <h3>Customer Management</h3>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="customer-table"></tbody>
            </table>
            <button class="insert" onclick="openForm('customer')">Insert New Customer</button>
            <input type="text" id="search-customer" placeholder="Search by ID...">
            <button onclick="searchRecord('customer')">Search</button>
        </section>
    </div>
    
    <!-- Modal Form -->
    <div id="form-modal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeForm()">&times;</span>
            <h3 id="form-title">Insert Admin</h3>
            <input type="hidden" id="record-id">
            <input type="text" id="name" placeholder="Name">
            <input type="email" id="email" placeholder="Email">
            <input type="text" id="phone" placeholder="Phone">
            <button onclick="submitForm()">Save</button>
        </div>
    </div>
</body>
</html>
