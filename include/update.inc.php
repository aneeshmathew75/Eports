<?php

require("connection.php");

// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.

$full_name = $_POST['full_name'];
$full_name = mysqli_real_escape_string($con, $full_name);

$mailid = $_POST['mailid'];
$mailid = mysqli_real_escape_string($con, $mailid);

$phnumber = $_POST['phnumber'];
$phnumber = mysqli_real_escape_string($con, $phnumber);

$website_url = $_POST['website_url'];
$website_url = mysqli_real_escape_string($con, $website_url);

$street = $_POST['street'];
$street = mysqli_real_escape_string($con, $street);

$city = $_POST['city'];
$city = mysqli_real_escape_string($con, $city);

$state = $_POST['state'];
$state = mysqli_real_escape_string($con, $state);

$zipcode = $_POST['zipcode'];
$zipcode = mysqli_real_escape_string($con, $zipcode);

$valorant_id = $_POST['valorant_id'];
$valorant_id = mysqli_real_escape_string($con, $valorant_id);

$counter_id = $_POST['counter_id'];
$counter_id = mysqli_real_escape_string($con, $counter_id);

$fortnite_id = $_POST['fortnite_id'];
$fortnite_id = mysqli_real_escape_string($con, $fortnite_id);

$fifa_id = $_POST['fifa_id'];
$fifa_id = mysqli_real_escape_string($con, $fifa_id);

$discord_id = $_POST['discord_id'];
$discord_id = mysqli_real_escape_string($con, $discord_id);

$youtube = $_POST['youtube'];
$youtube = mysqli_real_escape_string($con, $youtube);

$twitch = $_POST['twitch'];
$twitch = mysqli_real_escape_string($con, $twitch);

$facebook = $_POST['facebook'];
$facebook = mysqli_real_escape_string($con, $facebook);

$about = $_POST['about'];
$about = mysqli_real_escape_string($con, $about);


    $query = "UPDATE reg SET full_name = '" . $full_name. "', email= '" . $mailid . "',phone = '".$phnumber. "',street ='" . $street . "',city ='" . $city . "',state='" . $state . "', zipcode='" . $zipcode . "', valorant_id='" . $valorant_id . "', counter_id='" . $counter_id . "', fortnite_id='" . $fortnite_id . "', fifa_id='" . $fifa_id . "' ,discord='" . $discord_id . "', youtube='" . $youtube . "' ,twitch='" . $twitch . "', facebook='" . $facebook . "' ,about='" . $about . "',website_url='" . $website_url . "' where userid = ".$_SESSION['userid'];
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: ../Homepage/index.php');

