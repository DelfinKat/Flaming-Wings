<?php 
	header ("Refresh: 3;url=Conversion.php"); 
	include("dbconnection.php"); 

	$sql_query = "INSERT INTO conversion(unit_id1, qty1, unit_id2, qty2)
			VALUES ('" . $_POST['unitM1'] . "','" . $_POST['qty1'] . "','" . $_POST['unitM2'] . "','" . $_POST['qty2'] . "')"; 

	mysqli_query($connect, $sql_query); 
		
	echo "Conversion added!";
	
?>

<html>
<body>
If the page does not reload in 3 secs, <a href="Conversion.php">click here.</a>
</body>
</html>
