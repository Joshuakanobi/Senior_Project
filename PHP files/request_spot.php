<?php
require "connection.php";
error_reporting(0);

$mysql_qry = "select spot_id from spots where taken = 'open' limit 1";

$result = mysqli_query($conn,$mysql_qry);

if ($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo "Your spot ID is: " .$row["spot_id"];
		$update = "UPDATE spots SET taken='request' WHERE spot_id = $row[spot_id]";
		$result = mysqli_query($conn,$update);
		}
	}
	else{
		echo "No spots available";
	}
?>