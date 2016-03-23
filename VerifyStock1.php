<?php 
	header ("url=VerifyStock.php"); 
	include("dbconnection.php"); 



	$sql_query = "INSERT INTO verifystock(dtVerified, verifiedqty, stock_id, remarks)
			VALUES ('".$_POST["dtVerified"] . "','" .$_POST['qty']. "','" .$_POST['sname']."','".$_POST['remarks']."')"; 

	mysqli_query($connect, $sql_query); 
	
	echo "Verified stock!";
	echo $sql_query;

?>
<html>
<a href="VerifyStock.php">Go Back</a>
</html>