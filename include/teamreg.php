<?php

require("connection.php");

// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.

$_SESSION['teamname'] = $_POST['teamname'];
$_SESSION['dropdown'] = $_POST['dropdown'];
$_SESSION['player1'] = $_POST['player1'];
$_SESSION['valorantid_1'] = $_POST['valorantid_1'];
$_SESSION['player2'] = $_POST['player2'];
$_SESSION['valorantid_2'] = $_POST['valorantid_2'];
$_SESSION['player3'] = $_POST['player3'];
$_SESSION['valorantid_3'] = $_POST['valorantid_3'];
$_SESSION['player4'] = $_POST['player4'];
$_SESSION['valorantid_4'] = $_POST['valorantid_4'];
$_SESSION['player5'] = $_POST['player5'];
$_SESSION['valorantid_5'] = $_POST['valorantid_5'];
$_SESSION['mailid'] = $_POST['mailid'];
$_SESSION['phnumber'] = $_POST['phnumber'];

$dropdown = $_POST['dropdown'];

header('location: ../paymentpage.php?id='. $dropdown);

?>