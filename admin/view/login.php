<?php
include("../control/login_control.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <?php $error_msg = "" ?>

    <body>
        <div class="main">
            <!-- <input type="checkbox" id="chk" aria-hidden="true"> -->
            <?php if (!empty($errors)): ?>
                <div class="error-box">
                    <?php foreach ($errors as $error): ?>
                        <p class="error-message"><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="login-container">
                <form action="#" method="POST" class="login-form">
                    <h2>Login</h2>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="login-email"  placeholder="Enter your email">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="login-password"  placeholder="Enter your password">
                    </div>
                    <button type="submit" class="login-btn">Login</button>
                </form>
            </div>
    </body>

</html>