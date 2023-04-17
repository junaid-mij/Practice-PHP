<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.container {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Registration Form</h1>
		<?php
		if(isset($_POST['submit'])) {
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirm_password = $_POST['confirm_password'];
			
			// Check if all fields are filled
			if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) {
				echo "<div class='alert alert-danger' role='alert'>Please fill in all fields.</div>";
			}
			else {
				// Check if email is in valid format
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "<div class='alert alert-danger' role='alert'>Invalid email format.</div>";
				}
				else {
					// Check if password and confirm password match
					if($password !== $confirm_password) {
						echo "<div class='alert alert-danger' role='alert'>Password and confirm password do not match.</div>";
					}
					else {
						// Redirect to login page
						header("Location: login.php");
						exit();
					}
				}
			}
		}
		?>
		<form method="post" action="">
			<div class="form-group">
				<label>First Name:</label>
				<input type="text" name="firstname" class="form-control" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>">
			</div>
			<div class="form-group">
				<label>Last Name:</label>
				<input type="text" name="lastname" class="form-control" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>">
			</div>
			<div class="form-group">
				<label>Email Address:</label>
				<input type="email" name="email" class="form-control" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<label>Confirm Password:</label>
				<input type="password" name="confirm_password" class="form-control">
			</div>
			<input type="submit" name="submit" value="Register" class="btn btn-primary">
		</form>
	</div>
</body>
</html>
