<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add_test.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="authority_type"></td>
			</tr>
            <tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['authority_type'];

		// include database connection file
		require_once "../config.php";

		// Insert user data into table
		$result = mysqli_query($connection, "INSERT INTO authority_type(authority_type) VALUES('$name')");

		// Show message when user added
		echo "User added successfully. <a href='index1.php'>View Users</a>";
	}
	?>
</body>
</html>