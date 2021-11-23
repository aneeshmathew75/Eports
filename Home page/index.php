<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ESPORT - HomePage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Filterable-Cards-.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Callout-Info.css">
    <link rel="stylesheet" href="assets/css/Continue-Button.css">
    <link rel="stylesheet" href="assets/css/untitled-1.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
</head>
<body>
        <?php
        include '../include/navbar.php';
        ?>
    <header class="text-center text-white masthead">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Gaming Website</h1>
                <h2 class="masthead-subheading mb-0">Lets Play</h2><a class="btn btn-primary btn-xl rounded-pill mt-5" role="button" href="#">About US</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <section>
        <div class="container">
            <section class="py-5">
                <div class="container">
                    <h1 class="text-center mb-4">Upcoming Tournment&nbsp;&nbsp;</h1>
                    <div class="wrapper">
                        <nav>
                            <div id="filterButtons" class="items">
                                <span id="all" class="iteams">All</span>
                                <span id="action" class="iteams">Action</span>
                                <span id="shooting" class="iteams">Shooting</span>
                                <span id="mobile" class="iteams">Mobile</span>
                                <span id="racing" class="iteams">Racing</span>
                                <span id="console" class="iteams">Console</span>
                            </div>
                        </nav>
                    </div>
                    <div class="row filtr-container" id="filterContainer">
                    </div>
                </div>
                <article class="bg-light text-dark py-4 mt-5 border-top border-bottom border-dark">
                    <div class="container">
                        <h3></h3>
                    </div>
                    <div class="bs-callout bs-callout-info">
                        <h4>Want to create your own Tournament&nbsp;</h4>
                        <p>Creating your own tournament takes less than 5 minutes. Create a tournament as small as 4 players and take advantage of the platform's auto pay technology. For larger tournaments you can also earn an Organizer Fee. Organizers do a lot of work for their communities and should be incentivized to run great events.<br></p>
                    </div><button class="btn btn-outline-dark btn-sm ms-auto" type="button"><i class="fa fa-plus"></i> Button 2</button>
                </article>
            </section>
        </div>
    </section>
<?php
 include  '../include/footer.php';
 ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Filterable-Cards-.js"></script>
    <script src="assets/js/data.js"></script>
    <script src="assets/js/cards.js"></script>
    
</body>

</html>