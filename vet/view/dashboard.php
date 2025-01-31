<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinarian Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <header>
        <h1>Veterinarian Dashboard</h1>
        <nav>
            <ul>
                <li><a href="#profile">Profile</a></li>
                <li><a href="#appointments">Appointments</a></li>
                <li><a href="#messages">Messages</a></li>
                <li><a href="#treatment">Treatment History</a></li>
                <li><a href="#notifications">Notifications</a></li>
                <li><a href="#logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="profile">
        <h2>Profile</h2>
        <img src="profile.jpg" alt="Veterinarian Picture" id="profile-pic">
        <p><strong>Name:</strong> Dr. John Doe</p>
        <p><strong>Specialization:</strong> Small Animals</p>
        <p><strong>Contact:</strong> johndoe@email.com</p>
        <button onclick="editProfile()">Edit Profile</button>
    </section>
    
    <section id="appointments">
        <h2>Appointments</h2>
        <ul id="appointment-list">
            <li>Pet: Bella (Dog) - 12:00 PM, Jan 31</li>
            <li>Pet: Whiskers (Cat) - 2:00 PM, Jan 31</li>
        </ul>
    </section>
    
    <section id="messages">
        <h2>Messages</h2>
        <div id="chat-box">
            <div class="message">Owner: Hello, what time is my appointment?</div>
        </div>
        <textarea id="message-box" placeholder="Type a message..."></textarea>
        <button onclick="sendMessage()">Send</button>
    </section>
    
    <section id="treatment">
        <h2>Treatment History</h2>
        <table>
            <tr>
                <th>Pet</th>
                <th>Date</th>
                <th>Treatment</th>
            </tr>
            <tr>
                <td>Bella</td>
                <td>Jan 25</td>
                <td>Vaccination</td>
            </tr>
        </table>
    </section>
    
    <section id="notifications">
        <h2>Notifications</h2>
        <ul id="notification-list">
            <li>New appointment scheduled for Feb 1.</li>
            <li>Message received from Pet Owner.</li>
        </ul>
    </section>
    
    <script src="../js/dashboard.js"></script>
</body>
</html>
