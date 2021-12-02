<!doctype html>
<html>

<head>
    <?php

    require("include/connection.php");
    ?>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #0C4160;
            padding: 30px 10px
        }

        .card {
            max-width: 500px;
            margin: auto;
            color: black;
            border-radius: 20 px
        }

        p {
            margin: 0px
        }

        .container .h8 {
            font-size: 30px;
            font-weight: 800;
            text-align: center
        }

        .btn.btn-primary {
            width: 100%;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 15px;
            background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
            border: none;
            transition: 0.5s;
            background-size: 200% auto
        }

        .btn.btn.btn-primary:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none
        }

        .btn.btn-primary:hover .fas.fa-arrow-right {
            transform: translate(15px);
            transition: transform 0.2s ease-in
        }

        .form-control {
            color: white;
            background-color: #223C60;
            border: 2px solid transparent;
            height: 60px;
            padding-left: 20px;
            vertical-align: middle
        }

        .form-control:focus {
            color: white;
            background-color: #0C4160;
            border: 2px solid #2d4dda;
            box-shadow: none
        }

        .text {
            font-size: 14px;
            font-weight: 600
        }

        ::placeholder {
            font-size: 14px;
            font-weight: 600
        }
    </style>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container p-0">
        <div class="card px-4">
            <p class="h8 py-3">Payment Details</p>
            <div class="row gx-3">
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Person Name</p> <input class="form-control mb-3" type="text" placeholder="Name" value="Barry Allen" require>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Card Number</p> <input class="form-control mb-3" type="text" placeholder="1234 5678 435678">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Expiry</p> <input class="form-control mb-3" type="text" placeholder="MM/YYYY">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">CVV/CVC</p> <input class="form-control mb-3 pt-2 " type="password" placeholder="***">
                    </div>
                </div>
                <div class="col-12">
                    <?php
                    $tour_id = $_GET['id'];
                    $list = mysqli_query($con, "select reg_fee from tour_reg WHERE tour_name = '$tour_id' ");
                    if ($row_list = mysqli_fetch_assoc($list)) {

                    ?>
                        <a href="include/teamreg_insert.php?id=<?php echo $row_list["reg_fee"]; ?>" >
                            <div class="btn btn-primary mb-3"> <span class="ps-3"> ₹ <?php echo $row_list["reg_fee"]; ?></span> <span class="fas fa-arrow-right"></span> </div>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript'></script>
</body>

</html>