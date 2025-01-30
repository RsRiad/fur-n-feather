<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Dashboard</h1>
        </header>

        <nav class="sidebar">
            <ul>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="manage-pets.html">Manage Pets</a></li>
                <li><a href="manage-vets.html">Manage Vets</a></li>
                <li><a href="manage-agents.html">Manage Agents</a></li>
                <li><a href="notifications.html">Notifications</a></li>
                <li><a href="inventory.html">Inventory</a></li>
                <li><a href="transactions.html">Transactions</a></li>
            </ul>
        </nav>

        <main>
            <section id="dashboard">
                <h2>Dashboard Overview</h2>
                <div class="dashboard-cards">
                    <div class="card">
                        <h3>Total Pets</h3>
                        <p>120</p>
                    </div>
                    <div class="card">
                        <h3>Total Vets</h3>
                        <p>15</p>
                    </div>
                    <div class="card">
                        <h3>Total Agents</h3>
                        <p>8</p>
                    </div>
                    <div class="card">
                        <h3>Monthly Transactions</h3>
                        <p>$8,560</p>
                    </div>
                </div>
                <div class="notifications">
                    <h3>Recent Notifications</h3>
                    <ul>
                        <li>New pet added: Bella the Golden Retriever</li>
                        <li>Agent John Doe updated inventory details</li>
                        <li>Monthly vet report submitted</li>
                        <li>New transaction: $450 for pet supplies</li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
