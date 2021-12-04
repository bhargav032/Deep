<?php
// Create database connection using config file
include_once("../config.php");

// Fetch all users data from database
$result = mysqli_query($connection, "SELECT * FROM authority_type ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add_test.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th><th>Update</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['authority_type']."</td>";
        echo "<td><a href='edit_test.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>