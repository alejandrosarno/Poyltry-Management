<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Poultry</title>
	<link href="css/style2.css" rel="stylesheet">
</head>
<body>
<p>&nbsp;<p>

<<<<<<< HEAD
<form method="POST" action="login.php" >
=======
<form method="POST" action="register.php" >
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
<div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>				<?php if (count($errors) > 0): ?>
				<div class="error">
					<?php foreach ($errors as $error): ?>
						<p><?php echo $error; ?></p>
					<?php endforeach?>
				</div>
				<?php endif ?>
			<label for="uname"><b>Username</b></label>
			<input type="text" name="username" placeholder="Enter Username" required />
			<label for="psw"><b>Password</b></label>
			<input type="password" name="password" placeholder="Enter Password" required />
<<<<<<< HEAD
			<button type="submit" name="loginbtn" class="login">Login</button>
=======
			<button type="submit" name="registerbtn" class="register">Login</button>
>>>>>>> b247b6e3529876e8b02ee9695d93195a07e1eea2
		</div>
	
		<div class="container" style="background-color:#f1f1f1">
			<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			<span class="psw">Not yet a member? <a href="register.php">Sign Up</a></span>
						<div>
							</a>
						</div>
					</div>

					
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>