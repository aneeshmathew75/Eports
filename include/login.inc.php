<?php

require("connection.php");

if (isset($_POST['submit'])) {
    $email = $_POST['logemail'];
    $email = mysqli_real_escape_string($con, $email);


    $password = $_POST['logpass'];
    $password = mysqli_real_escape_string($con, $password);
   // $password = MD5($password);
if($password == 'admin' && $email == 'admin@gmail.com') {
            $_SESSION['admin_name'] = "admin";
            header('location:../admin/index.php');
    }
    else{
    // Query checks if the email and password are present in the database.
    $query = "SELECT * FROM reg WHERE mail='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
    // If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
    if ($num == 0) {
        $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: ../loginSignup/signup.php?error=' . $error);
    } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['mail'];
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['username'] = $row['name'];
        header('location: ../Homepage/index.php?s='.$_SESSION['email']);
    }
}
}
?>