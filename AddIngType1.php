<?php 
	header ("url=AddIngType.php"); 
	include("dbconnection.php"); 

	$sql_query = "INSERT INTO ingredientname(ing_name, emergencyLvl)
			VALUES ('".$_POST["ing_name"]. "','" .$_POST["emergencyLvl"]."')"; 

	mysqli_query($connect, $sql_query); 
		
	echo "Ingredient added!";
	echo $sql_query; 

?>
