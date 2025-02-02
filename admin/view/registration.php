<?php
include "../control/registration_control.php";
?>
<?php
include "../control/login_control.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="../css/registration.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<?php  $error_msg="" ?>
<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">
		<?php if (!empty($errors)): ?>
    <div class="error-box">
        <?php foreach ($errors as $error): ?>
            <p class="error-message"><?php echo $error; ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

		<div class="signup">
			<form method="POST">
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="text" id="username" name="username" placeholder="User name">
				<input type="email" id="signup-email" name="signup-email" placeholder="Email">
				<input type="number" id="signup-phone" name="signup-phone" placeholder="Phone">
				<input type="password" id="signup-password" name="signup-password" placeholder="Password">
				<button type="submit" class="btn">Sign up</button>
				<!-- <input type="submit" class="btn" value="Sign Up"> -->
			</form>
		</div>

		<div class="login">
			<form method="POST">
				<label for="chk" aria-hidden="true">Login</label>
				<input type="email" id="login-email" name="login-email" placeholder="Email">
				<input type="password" id="login-password" name="login-password" placeholder="Password">
				<button type="submit" class="btn">Login</button>
			</form>
		</div>
	</div>
</body>

</html>