<?php
require "connection.php";

$mysql_qry = "UPDATE spots set taken = 'open'";
$result = mysqli_query($conn,$mysql_qry);
?>