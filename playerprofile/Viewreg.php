<!DOCTYPE html>
<html>

<head>
    <?php
    require("../include/connection.php");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View Reg</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="../Viewreg/style.css">
</head>

<body>
    <?php
    include '../include/navbar.php';
    ?>


    <!-- partial:index.partial.html -->
    <br><br>
    <br>
    <?php
    $database = mysqli_query($con, "SELECT * from  team_reg where userid = " . $_SESSION['userid']);
    while ($row_list = mysqli_fetch_assoc($database)) {

    ?>
            <br>

            <main class="st_viewport">
                <div class="st_wrap_table" data-table_id="0">
                    <header class="st_table_header">
                        <h2>T<?php echo $row_list['tournament_name'] ?></h2>
                        <div class="st_row">
                            <div class="st_column _rank">Rank</div>
                            <div class="st_column _name">Name</div>
                            <div class="st_column _surname">Valorant ID</div>

                        </div>
                    </header>
                    <div class="st_table">
                        <div class="st_row">
                            <div class="st_column _rank">1</div>
                            <div class="st_column _name"><?php echo $row_list['player1'] ?></div>
                            <div class="st_column _surname"><?php echo $row_list['valorant_1'] ?></div>

                        </div>
                        <div class="st_row">
                            <div class="st_column _rank">2</div>
                            <div class="st_column _name"><?php echo $row_list['player2'] ?></div>
                            <div class="st_column _surname"><?php echo $row_list['valorant_2'] ?></div>

                        </div>
                        <div class="st_row">
                            <div class="st_column _rank">3</div>
                            <div class="st_column _name"><?php echo $row_list['player3'] ?></div>
                            <div class="st_column _surname"><?php echo $row_list['valorant_3'] ?></div>
                        </div>
                        <div class="st_row">
                            <div class="st_column _rank">4</div>
                            <div class="st_column _name"><?php echo $row_list['player4'] ?></div>
                            <div class="st_column _surname"><?php echo $row_list['valorant_4'] ?></div>

                        </div>
                        <div class="st_row">
                            <div class="st_column _rank">5</div>
                            <div class="st_column _name"><?php echo $row_list['player5']?></div>
                            <div class="st_column _surname"><?php echo $row_list['valorant_5'] ?></div>

                        </div>
                        <div class="st_row">
                            <br>
                        </div>
                        <div class="st_row">

                            <div class="st_column _name">Mail ID : </div>
                            <div class="st_column _surname"><?php echo $row_list['mail'] ?></div>

                        </div>
                        <div class="st_row">
                            <div class="st_column _rank">Team Name: <?php echo $row_list['teamname'] ?></div>
                            <div class="st_column _name"><?php echo $row_list['teamname'] ?></div>
                        </div>
                        <div class="st_row">
                            <div class="st_column _rank">Ph NUmber:</div>
                            <div class="st_column _name"><?php echo $row_list['mobile'] ?></div>
                        </div>
        <?php
        }
        ?>
            </main>

            <footer>
                <pre>

  </pre>
            </footer>
            <!-- partial -->
            </main>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
            <script src="assets/js/theme.js"></script>
</body>

</html>