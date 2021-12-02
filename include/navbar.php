<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
    <div class="container"><a class="navbar-brand" href="#">Esport Tms</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarResponsive"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <?php
                if (isset($_SESSION['email'])) {
                ?>
                    <li class="nav-item"><a class="nav-link" href="../Homepage/index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../gamepage/index.php">Game's</a></li>
                    <li class="nav-item"><a class="nav-link" href="../playerprofile/index.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="../playerprofile/Viewreg.php">View Reg</a></li>
                    <li class="nav-item"><a class="nav-link" href="../About Us/index.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../include/logout.inc.php">Logout</a></li>
                <?php
                } else {
                ?>
                    <li class="nav-item"><a class="nav-link" href="../Homepage/index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="..//About Us/index.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../loginSignup/signup.php">Login / Signup</a></li>
                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</nav>