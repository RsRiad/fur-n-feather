<?php
include '../control/registration_control.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registration.css">

    <title>Registration</title>
</head>

<body>
    <div class="form-structor">
        <div class="signup">
            <!-- <div class="main"> -->
            <!-- <input type="checkbox" id="chk" aria-hidden="true"> -->
            <?php if (!empty($errors)): ?>
                <div class="error-box">
                    <?php foreach ($errors as $error): ?>
                        <p class="error-message"><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <form action="" method="POST" onsubmit="return validateForm()">
                <div class="form-holder">
                    <input type="text" class="input" placeholder="Name" id="signup-name" name="signup-name" />
                    <span id="error-name" class="error-msg"></span>

                    <input type="email" class="input" placeholder="Email" id="signup-email" name="signup-email" />
                    <span id="error-email" class="error-msg"></span>

                    <input type="number" class="input" placeholder="Phone" id="signup-phone" name="signup-phone" />
                    <span id="error-phone" class="error-msg"></span>

                    <input type="text" class="input" placeholder="License" id="signup-license" name="signup-license" />
                    <span id="error-license" class="error-msg"></span>

                    <input type="text" class="input" placeholder="Special Field" id="signup-special-field" name="signup-special-field" />
                    <span id="error-special-field" class="error-msg"></span>

                    <input type="password" class="input" placeholder="Password" id="signup-password" name="signup-password" />
                    <span id="error-password" class="error-msg"></span>

                    <input type="password" class="input" placeholder="Confirm Password" id="signup-confirm-password" name="signup-confirm-password" />
                    <span id="error-confirm-password" class="error-msg"></span>
                </div>
                <button onclick="validateForm()" type="submit" class="submit-btn" id="signup-button">Sign up</button>

            </form>
            <script src="../js/registration.js"></script>

        </div>

        <!-- <div class="login slide-up">
            <div class="center">
                <?php
                include '../control/login_control.php';
                ?>
                <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                <form action="" method="POST">
                    <div class="form-holder">
                        <input type="email" class="input" placeholder="Email" id="login-email" />
                        <input type="password" class="input" placeholder="Password" id="login-password" />
                    </div>
                    <button onclick="" type="submit" class="submit-btn" id="login-button">Log in</button>
                </form>

            </div>
        </div> -->
    </div>
    
</body>

</html>