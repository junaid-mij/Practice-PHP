<!DOCTYPE html>
<html>
<head>
	<title>Table Example</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John</td>
				<td>25</td>
			</tr>
			<tr>
				<td>Sarah</td>
				<td>30</td>
			</tr>
			<tr>
				<td>Mike</td>
				<td>28</td>
			</tr>

			<?php
			// check if form is submitted
			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
				$age = $_POST['age'];

				// append new row with user input to the table
				echo "<tr><td>$name</td><td>$age</td></tr>";
			}
			?>
		</tbody>
	</table>

	<form method="post" action="">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name">
		<label for="age">Age:</label>
		<input type="text" id="age" name="age">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
