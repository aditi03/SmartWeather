<?php
    session_start();
    ?>
<div class="site-header">
    <div class="container">
        <a href="index.html" class="branding">
            <img src="images/logo.png" alt="" class="logo">
            <div class="logo-type">
                <h1 class="site-title">Smart Weather App</h1>
                <small class="site-description">A weather app which is smart unlike you.</small>
            </div>
        </a>

        <!-- Default snippet for navigation -->
        <div class="main-navigation">
            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
            <ul class="menu">
                <li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
                <li class="menu-item"><a href="live-cameras.html">Live cameras</a></li>
                <li class="menu-item"><a href="activites.php">Activities</a></li>
                <?php if(!isset($_SESSION["username"])) { ?>
                    <li class="menu-item" id="login-button"><a href="javascript:void(0)">Login</a></li>
                    <li class="menu-item" id="register-button"><a href="javascript:void(0)">Register</a></li>
                <?php } else { ?>
                    <li class="menu-item"><a href="food-places.php">Food Places</a></li>
                    <li class="menu-item"><a href="logout.php">Logout</a></li>
                <?php } ?>
            </ul> <!-- .menu -->
        </div> <!-- .main-navigation -->

        <div class="mobile-navigation"></div>

    </div>
</div> <!-- .site-header -->
