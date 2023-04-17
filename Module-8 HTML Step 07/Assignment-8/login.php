<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.container {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login Form</h1>
		<?php
		if(isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			// Check if all fields are filled
			if(empty($email) || empty($password)) {
				echo "<div class='alert alert-danger' role='alert'>Please fill in all fields.</div>";
			}
			else {
				// Check if email and password match
				if($email === 'user@example.com' && $password === 'password') {
					// Redirect to welcome page
					header("Location: welcome.php");
					exit();
				}
				else {
					echo "<div class='alert alert-danger' role='alert'>Invalid email or password.</div>";
				}
			}
		}
		?>
		<form method="post" action="">
			<div class="form-group">
				<label>Email Address:</label>
				<input type="email" name="email" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control">
			</div>
			<input type="submit" name="submit" value="Login" class="btn btn-primary">
		</form>
	</div>
</body>
</html>
