<?php 
	header ("Refresh: 3; url=VerifyStock.php"); 
	include("dbconnection.php"); 



	$sql_query = "INSERT INTO verifystock(dtVerified, verifiedqty, stock_id, remarks, personVerify)
			VALUES ('" . $_POST['dtVerified'] ."', '" . $_POST['qty']."', '" . $_POST['sname']. "', '" . $_POST['remarks'] . "', '" . $_POST['personVerify'] . "')"; 


	mysqli_query($connect, $sql_query); 
	
	echo "Verifying stock!";

?>
<html>
If the page does not reload in 3 secs, <a href="VerifyStock.php">click here.</a>...
</html>