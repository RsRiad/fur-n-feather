<?php
include "../control/dashboard_control.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet Management Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <header>
        <h1>Vet Management Dashboard</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>License</th>
                    <th>Specialization Field</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="userTableBody">
                <tr>
                    <td colspan="8">

                        <form id="addUserForm" method="POST">
                            <input type="hidden" name="action" value="add"> <!-- Hidden action field -->
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="email" name="email" placeholder="Email" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <input type="text" name="phone" placeholder="Phone" required>
                            <input type="text" name="license" placeholder="License" required>
                            <input type="text" name="s_field" placeholder="Specialization Field" required>
                            <button type="submit">Add User</button>
                        </form>

                    </td>
                </tr>
                <tr>
                    <td colspan="8">
                        <form id="updateUserForm" method="POST">
                            <input type="hidden" name="action" value="update"> <!-- Hidden action field -->
                            <input type="text" name="id" placeholder="User ID" required>
                            <input type="text" name="name" placeholder="New Name">
                            <input type="email" name="email" placeholder="New Email">
                            <input type="password" name="password" placeholder="New Password">
                            <input type="text" name="phone" placeholder="New Phone">
                            <input type="text" name="license" placeholder="New License">
                            <input type="text" name="s_field" placeholder="New Specialization Field">
                            <button type="submit">Update User</button>
                        </form>

                    </td>
                </tr>
                <tr>
                    <td colspan="8">
                        <h2>Search Vet</h2>
                        <form method="POST">
                            <input type="hidden" name="action" value="search">
                            <input type="text" name="keyword" placeholder="Enter name, email, or phone" required>
                            <button type="submit">Search</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="8">
                        <form id="deleteUserForm" method="POST">
                            <input type="hidden" name="action" value="delete"> <!-- Hidden action field -->
                            <input type="text" name="id" placeholder="User ID" required>
                            <button type="submit">Delete User</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>


        <tbody>
    <?php if (!empty($vets)) : ?>
        <?php foreach ($vets as $vet) : ?>
            <tr>
                <td><?php echo $vet['id']; ?></td>
                <td><?php echo $vet['name']; ?></td>
                <td><?php echo $vet['email']; ?></td>
                <td><?php echo $vet['password']; ?></td>
                <td><?php echo $vet['phone']; ?></td>
                <td><?php echo $vet['license']; ?></td>
                <td><?php echo $vet['sp_field']; ?></td>
                <td>
                    <form method="POST" style="">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?php echo $vet['id']; ?>">
                        <!-- <button type="submit">Delete</button> -->
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="8">No vets found.</td>
        </tr>
    <?php endif; ?>
</tbody>










    </main>


    <!-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetchUsers();

            function fetchUsers() {
                fetch("../control/dashboard_control.php?ajax=true")
                    .then(response => response.json())
                    .then(data => {
                        let tableBody = document.getElementById("userTableBody");
                        tableBody.innerHTML = "";
                        data.forEach(user => {
                            let row = `<tr>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.password}</td>
                        <td>${user.phone}</td>
                        <td>${user.license}</td>
                        <td>${user.sp_field}</td>
                        <td>
                            <button onclick="deleteUser(${user.id})">Delete</button>
                        </td>
                    </tr>`;
                            tableBody.innerHTML += row;
                        });
                    })
                    .catch(error => console.error('Error fetching users:', error));
            }

            function deleteUser(id) {
                fetch("../control/dashboard_control.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: `action=delete&id=${id}`
                }).then(() => fetchUsers());
            }
        });
    </script>


    <script src="../js/dashboard.js"></script> -->
</body>

</html>