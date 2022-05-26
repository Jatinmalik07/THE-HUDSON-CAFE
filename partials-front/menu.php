<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUDSON CAFE</title>
    <link rel="stylesheet" href="partials-front/style.css">
    
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="header">
        <nav>
        <a href="<?php echo SITEURL; ?>"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>contact.php">Contact</a>
                    </li>

                </ul>

            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>
        <div class="text-box">
            <h1>"Welcome to THE HUDSON CAFE"</h1>
            <p>
              
            </p>
            <br>
            <a href="<?php echo SITEURL; ?>contact.php" class="hero-btn">"Visit Us To Know More"</a>

        </div>
    </section>
    <br><br>
<!-- Navbar Section Ends Here -->

