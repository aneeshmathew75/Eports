<?php

require("connection.php");

// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.


$logname = $_POST['logname'];
$logname = mysqli_real_escape_string($con, $logname);

$logemail = $_POST['logemail'];
$logemail = mysqli_real_escape_string($con, $logemail);

  $password = $_POST['logpass'];
  $password = mysqli_real_escape_string($con, $password);
 //$password = MD5($password);


  $query = "SELECT * FROM reg WHERE mail='$logemail'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);

  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists Please SignUp again </span>";
    header('location: ../loginSignup/signup.php?m1='.$m);
  }
  else {

    $query = "INSERT INTO reg(name, mail, password) VALUES('" . $logname . "','" . $logemail . "','" . $password . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));

    $userid=mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['userName'] = $name;
    $_SESSION['userid'] = $userid;
    $m = "<span class='red'>Registered Sucessfully </span>";
     header('location: ../loginSignup/signup.php?m2=' . $m);
  }
?>
