<?php 
	header ("url=AddUOM.php"); 
	include("dbconnection.php"); 



	$sql_query = "INSERT INTO unitmeasurement(unit_name)
			VALUES ('".$_POST["unit_name"]."')"; 

	mysqli_query($connect, $sql_query); 
	
	echo "Unit of measurement added!";


?>
<html>
<a href="AddUOM.php">Go Back</a>
</html>