<?php
include "../control/msg_control.php";
//session_start();
// session_start(); // Start the session
// if (!isset($_SESSION['name'])) { // Check if the user is logged in
//     header("Location: ./vet/view/login.php"); // Redirect to login page
//     exit();
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinarian Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <div class="dashboard">
        <!-- Profile Section -->
        <section class="profile">
            <h2>Vet Profile</h2>
            <img src="profile-placeholder.png" alt="Vet Profile Picture" class="profile-img">
            <form class="profile-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($vet['name']); ?>" readonly>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($vet['email']); ?>" readonly>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($vet['phone']); ?>" readonly>
            </form>
        </section>

        <!-- Appointment Section -->
        <section class="appointments">
            <h2>Appointments</h2>
            <table>
                <tr>
                    <th>Time</th>
                    <th>Customer</th>
                    <th>Pet</th>
                </tr>
                <tr>
                    <td>10:00 AM</td>
                    <td>John Doe</td>
                    <td>Dog</td>
                </tr>
                <tr>
                    <td>11:00 AM</td>
                    <td>Jane Smith</td>
                    <td>Cat</td>
                </tr>
            </table>
        </section>

        <!-- Chat Section -->
        <section class="chat">
            <h2>Chat</h2>
            <div class="chat-box" id="chatBox"></div>

            <form id="chatForm" method="POST" action="../control/msg_control.php">
                <input id="msg_input" type="text" placeholder="Type a message..." class="chat-input" name="msg_input">
                <button class="send-btn" type="submit">Send</button>
            </form>
        </section>
        <script src="../js/chat.js"></script>

        <!-- Notification Section -->
        <form action="../control/logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>

        <script>
            function handelMsg(event) {
                // event.preventDefault();
                const msg = event.target.msg_input.value;
                console.log(msg);
                const newMsg = document.createElement("p");
                newMsg.classList.add("chat-message", "vet");

                newMsg.textContent = msg;
                document.querySelector(".chat-box").appendChild(newMsg);
            }
            document.querySelector(".chat form").addEventListener("submit", handelMsg);
        </script>


</body>

</html>