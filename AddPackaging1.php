<?php 
	header ("Refresh: 3; url=AddPackaging.php"); 
	include("dbconnection.php"); 



	$sql_query = "INSERT INTO unitpackaging(pack_name)
			VALUES ('".$_POST["pack_name"]."')"; 

	mysqli_query($connect, $sql_query); 
	
	echo "Packaging added!";


?>
<html>
If the page does not reload in 3 secs, <a href="AddPackaging.php">click here.</a>
</html>