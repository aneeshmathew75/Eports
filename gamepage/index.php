<!DOCTYPE html>
<html>
<?php
require("../include/connection.php");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ESPORTS - Game Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards-1.css">
    <link rel="stylesheet" href="assets/css/Animation-Cards.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Full-Page-Image-Slider-Header-Reponsive.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Half-Page-Image-Slider-Header.css">
    <link rel="stylesheet" href="assets/css/button-materialize-1.css">
    <link rel="stylesheet" href="assets/css/button-materialize.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/responsive-blog-card-slider.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
</head>

<body>
    <?php
    include '../include/navbar.php';
    ?>
    <br><br>
    <section>
        <div class="simple-slider" style="height: 90vh;">
            <div class="swiper-container" style="height: 90vh;">
                <div class="swiper-wrapper" style="height: 90vh;">
                    <div class="swiper-slide" style="height: 90vh;" center center / cover no-repeat;" style="height: 90vh;"><img src="assets/img/fifa.jpg" style="height: 100%; width: 100%;"></div>
                    <div class="swiper-slide" style="height: 90vh;" center center / cover no-repeat;"><img src="assets/img/fornite.jpg" style="height: 100%; width: 100%;"></div>
                    <div class="swiper-slide" style="height: 90vh;" center center / cover no-repeat;"><img src="assets/img/call-of-duty.jpg" style="height: 100%; width: 100%;"></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Live Tournament's</h2>
            </div>
        </div>
        <div class="row space-rows">
            <?php
            $list1 = mysqli_query($con, "select tour_name , prize_money, reg_fee, end_date, hosted_by from tour_reg where status = 'Live'");
            while ($row_list = mysqli_fetch_assoc($list1)) {
            ?>
                <div class="col">

                    <div class="card cards-shadown cards-hover" data-aos="flip-left" data-aos-duration="950">
                        <div class="card-header"><span class="space">
                                <div class="cardheader-text">

                                    <h4 id="heading-card-1"> <?php echo $row_list['tour_name'] ?> </h4>
                                    <p id="cardheader-subtext-1">Live Till - <?php echo $row_list['end_date'] ?> </p>
                                    <p id="cardheader-subtext-1">Hosted by - <?php echo $row_list['hosted_by'] ?> </p>
                                    <p id="cardheader-subtext-1"><a href="https://discord.gg/hrmjs78e">Join Discord for more info</a> </p>

                                </div>
                        </div>

                        <div class="card-body">
                            <p class="card-text cardbody-sub-text"><a href="https://www.youtube.com/channel/UCOkDFZQnyZ8Jc7IV0lpJrDw" class="waves-effect waves-light btn" target="_blank">Watch Now</a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <section class=" projects-horizontal">
                                    <div class="container">
                                        <div class="intro">
                                            <h2 class="text-center">Upcoming Tournament's</h2>
                                        </div>
                                    </div>
                                    <div class="row space-rows">
                                        <?php
                                        $list1 = mysqli_query($con, "select tour_name , prize_money, reg_fee, end_date from tour_reg where status = 'Upcoming'");
                                        while ($row_list = mysqli_fetch_assoc($list1)) {
                                        ?>
                                            <div class="col">

                                                <div class="card cards-shadown cards-hover" data-aos="flip-left" data-aos-duration="950">
                                                    <div class="card-header"><span class="space">
                                                            <div class="cardheader-text">

                                                                <h4 id="heading-card-1"> <?php echo $row_list['tour_name'] ?> </h4>
                                                                <p id="cardheader-subtext-1">Last Date <?php echo $row_list['end_date'] ?> </p>
                                                                <p id="cardheader-subtext-1">Prize Money will be - <?php echo $row_list['prize_money'] ?> </p>
                                                                <p id="cardheader-subtext-1">Reg Fee - <?php echo $row_list['reg_fee'] ?> </p>
                                                            </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <p class="card-text cardbody-sub-text"><a href="../registrationform/index.php" class="waves-effect waves-light btn" target="_blank">Register Now</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <?php
                                    include  '../include/footer.php';
                                    ?>



                                    <script src=" assets/bootstrap/js/bootstrap.min.js"></script>
                                    <script src="assets/js/bs-init.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
                                    <script src="assets/js/button-materialize.js"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
                                    <script src="assets/js/responsive-blog-card-slider-1.js"></script>
                                    <script src="assets/js/responsive-blog-card-slider.js"></script>
                                    <script src="assets/js/Simple-Slider.js"></script>

</body>

</html>