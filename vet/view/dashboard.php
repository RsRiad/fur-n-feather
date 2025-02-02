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
                <input type="text" id="name" placeholder="Enter your name">
                
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Enter your email">

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" placeholder="Enter phone number">
                
                <button type="submit">Update Profile</button>
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
            <div class="chat-box">
                <div class="chat-message">Customer: Hello, my pet is sick.</div>
                <div class="chat-message vet">Vet: Please provide details.</div>
            </div>
            <form >
            <input id="msg_input" type="text" placeholder="Type a message..." class="chat-input">
            <button onclick="handelMsg()"class="send-btn" type="submit">Send</button>
            </form>

        </section>

        <!-- Notification Section -->
        <section class="notifications">
            <h2>Notifications</h2>
            <ul>
                <li>New appointment with John Doe at 10:00 AM.</li>
                <li>Message from pet agent.</li>
            </ul>
        </section>
    </div>
    <?php
echo "<script>
      function handelMsg(e){
        e.preventDefault();
        const msg=e.target.msg_input.value;
        console.log(msg);
    }
      
    </script>";
?>
    
</body>
</html>
