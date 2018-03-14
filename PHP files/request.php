<?php
require "connection.php";

$mysql_qry = "SELECT * FROM spots";

$result = mysqli_query($conn,$mysql_qry);

if ($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		#echo "spot_id: " .$row["spot_id"]. " " .$row["taken"]. "<br>";
		if ($row["taken"] == "open") {
		?>
			<p style="border: 1px Solid Green; color:white; background:green">
			Spot ID: <?php echo $row["spot_id"]; ?> </p>
		<?php
		}
		
		if ($row["taken"] == "closed") {
		?>
			<p style="border: 1px Solid Green; color:white; background:red">
			Spot ID: <?php echo $row["spot_id"]; ?> </p>
		<?php
		}
		if ($row["taken"] == "request") {
		?>
			<p style="border: 1px Solid Green; color:white; background:blue">
			Spot ID: <?php echo $row["spot_id"]; ?> </p>
		<?php
		}
		}
	}
	else{
		echo "No spots available";
	}
?>