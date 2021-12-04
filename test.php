


<!-- begin:: Page Setting -->
<?php 
$page_title = 'DASHBOARD'; 
$page_type = '';
$page_property = '';
?>
<!-- end:: Page Setting -->

<!-- include:: Begin file -->
<?php include "begin.php"; ?>

<!-- begin:: Content -->
<?php

$result = mysqli_query($connection, "SELECT COLUMN_NAME FROM deep.COLUMNS WHERE TABLE_NAME = 'register' ORDER BY ORDINAL_POSITION");
echo $result;

?>


<!-- end:: Content -->

<!-- include:: footer -->
<?php include "footer.php"; ?>