<?php
// include database connection file
require_once "../config.php";

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$authority_type=$_POST["authority_type"];
	
    // update user data
	$result = mysqli_query($connection, "UPDATE authority_type SET authority_type='$authority_type' WHERE id=$id");

	// Redirect to homepage to display updated user in list
	header("Location: index1.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($connection, "SELECT * FROM authority_type WHERE id=$id");

while($authority_type_data = mysqli_fetch_array($result))
{
	$authority_type = $authority_type_data["authority_type"];
	
}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="index1.php">Home</a>
	<br/><br/>

	<form name="update_authority_type" method="post" action="edit_test.php">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="authority_type" value=<?php echo $authority_type;?>></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>