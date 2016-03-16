<?php 
	header ("Refresh: 5; url=ReplenishStock.php"); 
	include("dbconnection.php"); 

	$sql_query = "UPDATE replenishstock(dtReceived, qty, remarks)
	SET ('" . $_POST['dtReceived'] . "',"  . $_POST["qty"] . "," . $_POST["remarks"] . ")
	WHERE stock_id=1"; 

	
	mysqli_query($connect, $sql_query); 
		
	echo "Replenished stock!";

?>
