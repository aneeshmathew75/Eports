<?php
require("connection.php");
$tourid = $_GET['tour_id'];
$query = "UPDATE tour_reg SET status = 'Live' where tour_id = '$tourid'";
mysqli_query($con, $query) or die(mysqli_error($con));
header('location: ../admin/tournamentstatus.php');
?>