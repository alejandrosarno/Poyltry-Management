<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<link href="css/style2.css" rel="stylesheet">
</head>
<body>

<form method="POST" action="register.php" >
<div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
				<?php if (count($errors) > 0): ?>
				<div class="error">
					<?php foreach ($errors as $error): ?>
						<p><?php echo $error; ?></p>
					<?php endforeach?>
				</div>
				<?php endif ?>
				<label for="username"><b>Username</b></label>
				<input type="text" name="username" placeholder="Enter Name" value="<?php echo $username; ?>">
				<label for="email"><b>Email</b></label>
				<input type="text" name="email" placeholder="Enter Email" value="<?php echo $email; ?>" required>
				<label for="psw"><b>Password</b></label>
				<input type="password" name="password_1" placeholder="Enter Password">
				<label for="psw-repeat"><b>Repeat Password</b></label>
				<input type="password" name="password_2" placeholder="Repeat Password">
				<label>
       <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="register">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
			</form>
</body>
</html>