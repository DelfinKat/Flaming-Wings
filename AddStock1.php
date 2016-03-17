<?php 
	header ("Refresh: 5; url=AddStock.php"); 
	include("dbconnection.php"); 

	$sql_query = "INSERT INTO stock(sname, unit_id, ingName_id, pack_id, stocktype_id)
			VALUES ('" . $_POST['sname'] . "',"  . $_POST['unitM'] . "," . $_POST['ingtype'] . "," . $_POST['pack'] . "," . $_POST['type'] . ")"; 

	mysqli_query($connect, $sql_query); 
		
	echo "Stock added!";

?>
