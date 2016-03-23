<?php 
	header ("url=AddStock.php"); 
	include("dbconnection.php"); 

	$sql_query = "INSERT INTO stock(sname, qty, unit_id, ingName_id, pack_id, stocktype_id)
			VALUES ('" . $_POST["sname"] . "','" . $_POST['qty'] . "','"  . $_POST['unitM'] . "','" . $_POST['ingtype'] . "','" . $_POST['pack_name'] . "','" . $_POST['type'] . "')"; 

	mysqli_query($connect, $sql_query); 
		
	echo "Stock added!";
?>
<html>
<a href="AddStock.php">Go Back</a>
</html>