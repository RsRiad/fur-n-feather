<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Agent Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="dashboard-container">
    <!-- Header -->
    <header>
      <h1>Pet Agent Dashboard</h1>
      <nav>
        <ul>
          <li><a href="#manage-pets">Manage Pets</a></li>
          <li><a href="#manage-adoptions">Manage Adoptions</a></li>
          <li><a href="#contact-customer">Contact Customer</a></li>
          <li><a href="#logout">Logout</a></li>
        </ul>
      </nav>
    </header>

    <!-- Main Content -->
    <main>
      <!-- Manage Pets Section -->
      <section id="manage-pets">
        <h2>Manage Pets</h2>
        <div class="actions">
          <a href="add_pet.php" class="btn">Add New Pet</a>
          <a href="view-pets.php" class="btn">Remove Pet</a>
          <a href="view-pets.php" class="btn">View Pet Details</a>
          <a href="view-pets.php" class="btn">Update Pet Details</a>
          <a href="assign-vet.php" class="btn">Assign Veterinarian</a>
        </div>
      </section>

      <!-- Manage Adoptions Section -->
      <section id="manage-adoptions">
        <h2>Manage Adoptions</h2>
        <div class="actions">
          <a href="adoption-process.php" class="btn">Process Adoption</a>
          <a href="adoption-history.php" class="btn">View Adoption History</a>
        </div>
      </section>

      <!-- Contact Customer Section -->
      <section id="contact-customer">
        <h2>Contact Customer</h2>
        <div class="actions">
          <a href="customer-details.php" class="btn">View Customer Details</a>
        </div>
      </section>

      <!-- Logout Section -->
      <section id="logout">
        <h2>Logout</h2>
        <div class="actions">
          <a href="../../layout/home.php" class="btn logout-btn">Logout</a>
        </div>
      </section>
    </main>
  </div>
</body>
</html>