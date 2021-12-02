<?php

require("connection.php");

// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.

$reg_fee = $_GET['id'];
$teamname = $_SESSION['teamname'];
$dropdown = $_SESSION['dropdown'];
$player1 = $_SESSION['player1'];
$valorantid_1 = $_SESSION['valorantid_1'];
$player2 = $_SESSION['player2'];
$valorantid_2 = $_SESSION['valorantid_2'];
$player3 = $_SESSION['player3'];
$valorantid_3 = $_SESSION['valorantid_3'];
$player4 = $_SESSION['player4'];
$valorantid_4 = $_SESSION['valorantid_4'];
$player5 = $_SESSION['player5'];
$valorantid_5 = $_SESSION['valorantid_5'];
$mailid = $_SESSION['mailid'];
$phnumber = $_SESSION['phnumber'];

$query = "INSERT INTO team_reg(userid, teamname, tournament_name, player1, valorant_1, player2, valorant_2, player3, valorant_3, player4, valorant_4, player5, valorant_5, mail, mobile, reg_fee	) VALUES('" . $_SESSION['userid'] . "','" . $teamname . "','" . $dropdown . "','" . $player1 . "','" . $valorantid_1 . "','" . $player2 . "','" . $valorantid_2 . "','" . $player3 . "','" . $valorantid_3 . "','" . $player4 . "','" . $valorantid_4 . "','" . $player5 . "','" . $valorantid_5 . "','" . $mailid . "','" . $phnumber . "', '" . $reg_fee . "')";
mysqli_query($con, $query) or die(mysqli_error($con));
header('location: ../invoice/invoice.php?id='.$reg_fee);

?>