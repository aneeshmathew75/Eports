<!DOCTYPE html>
<html>

<head>
    <?php
    require("../include/connection.php");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <?php
    include '../include/navbar.php';
    ?>
    <form action="../include/update.inc.php" method="post">
        <main class="page lanidng-page">
            <section class="portfolio-block block-intro"><br>
                <?php
                $database = mysqli_query($con, "SELECT * from  reg  where userid = " . $_SESSION['userid']);
                while ($row_list = mysqli_fetch_assoc($database)) {
                ?>
                    <div class="container">
                        <div class="row gutters">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="account-settings">
                                            <div class="user-profile">
                                                <div class="user-avatar">
                                                    <img src="assets/img/avatar.jpeg" alt="">
                                                </div>

                                                <h5 class="user-name"><?php echo $row_list['name'] ?></h5>
                                                <p> <?php echo $row_list['mail'] ?> </p>
                                            </div>
                                            <div class="about">
                                                <h5>About</h5>

                                                <p> <?php echo $row_list['about'] ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h6 class="mb-2 text-primary">Personal Details</h6>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="fullName">Full Name</label>
                                                    <input type="text" name="full_name" class="form-control" id="fullName" placeholder="Enter full name" value="<?php echo $row_list['full_name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="eMail">Email</label>
                                                    <input type="email" name="mailid" class="form-control" id="eMail" placeholder="Enter email ID" value="<?php echo $row_list['mail'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" name="phnumber" class="form-control" id="phone" placeholder="Enter phone number" value="<?php echo $row_list['phone'] ?>">
                                                </div>
                                            </div>
                                            <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Website URL</label>
                                                    <input type="url" name="website_url" class="form-control" id="website" placeholder="Website url" value="<?php echo $row_list['website_url'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="Street">Street</label>
                                                    <input type="text" name="street" class="form-control" id="Street" placeholder="Enter Street" value="<?php echo $row_list['street'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="ciTy">City</label>
                                                    <input type="text" name="city" class="form-control" id="ciTy" placeholder="Enter City" value="<?php echo $row_list['city'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="sTate">State</label>
                                                    <input type="text" name="state" class="form-control" id="sTate" placeholder="Enter State" value="<?php echo $row_list['state'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="zIp">Zip Code</label>
                                                    <input type="text" name="zipcode" class="form-control" id="zIp" placeholder="Zip Code" value="<?php echo $row_list['zipcode'] ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h6 class="mt-3 mb-2 text-primary">Game</h6>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <div class="form-group">
                                                    <label for="Street">Valorent ID </label>
                                                    <input type="name" name="valorant_id" class="form-control" id="Street" placeholder="Valorent id" value="<?php echo $row_list['valorant_id'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="ciTy">Counter Strick ID</label>
                                                    <input type="name" name="counter_id" class="form-control" id="ciTy" placeholder="Counter Strick id" value="<?php echo $row_list['counter_id'] ?>">
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="sTate">Fortnite ID</label>
                                                    <input type="text" name="fortnite_id" class="form-control" id="sTate" placeholder="Fortnite" value="<?php echo $row_list['fortnite_id'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="zIp">FIFA ID</label>
                                                    <input type="text" name="fifa_id" class="form-control" id="zIp" placeholder="FIFA ID" value="<?php echo $row_list['fifa_id'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h6 class="mt-3 mb-2 text-primary">Social</h6>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                                <div class="form-group">
                                                    <label for="Street">Discord ID </label>
                                                    <input type="text" name="discord_id" class="form-control" id="" placeholder="Discord id" value="<?php echo $row_list['discord'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="ciTy">Youtube Channel</label>
                                                    <input type="name" name="youtube" class="form-control" id="ciTy" placeholder="URL" value="<?php echo $row_list['youtube'] ?>">
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="sTate">Twitch Channel </label>
                                                    <input type="text" name="twitch" class="form-control" id="sTate" placeholder="URL" value="<?php echo $row_list['twitch'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="zIp">Facebook</label>
                                                    <input type="text" name="facebook" class="form-control" id="zIp" placeholder="Link" value="<?php echo $row_list['facebook'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6 class="mt-3 mb-2 text-primary">About</h6>
                                        </div>
                                        <center>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="zIp">About</label>
                                                    <input type="text" name="about" class="form-control" id="zIp" placeholder="About " value="<?php echo $row_list['about'] ?>">
                                                </div>
                                            </div>
                                            <br>
                                        </center>
                                        <br>
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="text-right">
                                                    <button type="Submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </form>

<?php
                }

?>


</main>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>