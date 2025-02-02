<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Agent Registration</title>
    <link rel="stylesheet" href="register_agent.css">
</head>
<body>
    <div class="container">
        <h2>Pet Agent Registration</h2>
        <form id="agent-registration-form" action="../controllers/agent_validation.php" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" >
                <span class="error" id="name-error"></span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" >
                <span class="error" id="email-error"></span>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" >
                <span class="error" id="password-error"></span>
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" >
                <span class="error" id="contact-number-error"></span>
            </div>
            <p class="error" id="form-error"></p>

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>

        <div class="back-btn-container">
            <a href="index.php" class="btn-back">Back to Dashboard</a>
        </div>
    </div>

    <script src="../scripts/agent_validation.js"></script>
</body>
</html>
