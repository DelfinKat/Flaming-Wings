<?php 
	header ("Refresh: 3; url=ReplenishStock.php"); 
	include("dbconnection.php"); 

	$sql_query = "INSERT INTO replenishstock(dtReceived, qty, stock_id, remarks) 
	VALUES ('".$_POST['dtReceived']."', '".$_POST['qty']."', '".$_POST['sname']."','".$_POST['remarks']."')"; 

	
	mysqli_query($connect, $sql_query); 
		
	echo "Replenished stock!";
	

?>
<html>
<body>
If the page does not reload in 3 secs, <a href="ReplenishStock.php">click here.</a>
</body>
</html>
