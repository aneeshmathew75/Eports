<?php

require("connection.php");

// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.


$tour_name = $_POST['tour_name'];
$tour_name = mysqli_real_escape_string($con, $tour_name);

$prize_money = $_POST['prize_money'];
$prize_money = mysqli_real_escape_string($con, $prize_money);

$reg_fee = $_POST['reg_fee'];
$reg_fee = mysqli_real_escape_string($con, $reg_fee);

$start_date = $_POST['start_date'];
$start_date = mysqli_real_escape_string($con, $start_date);

$end_date = $_POST['end_date'];
$end_date = mysqli_real_escape_string($con, $end_date);

$category = $_POST['category'];
$category = mysqli_real_escape_string($con, $category);

$select = $_POST['select'];
$select = mysqli_real_escape_string($con, $select);


    $query = "INSERT INTO tour_reg(	tour_name, prize_money, reg_fee, start_date, end_date, hosted_by, cat, status ) VALUES('" . $tour_name . "','" . $prize_money . "','" . $reg_fee . "','" . $start_date . "','" . $end_date . "','" . $category . "','" . $select . "','Upcoming')";
    mysqli_query($con, $query) or die(mysqli_error($con));
header('location: ../admin/tournamentpost.php');


