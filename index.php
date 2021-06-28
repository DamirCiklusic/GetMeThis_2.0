<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con); //check if user is loged in

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta lang="de"
          content="simple ✅ free  ✅ "
          name="description"/>
    <title>🎁 GetMeThis</title>
    <link rel="icon" href="images/Tabicon.PNG">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Source+Sans+Pro&display=swap" rel="stylesheet">
</head>


<body>
<header>
    <a class="logo" href="main.html"><img src="images/Logo_first.png" alt="logo"></a>
    <nav>
        <ul class="nav__links">
            <li><a href="wishlist.html">Create Wishlist</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="About%20us.html">About us</a></li>

        </ul>
    </nav>
    <a class="cta" href="signup.html">Login / Sign-up</a>
    <p class="menu cta">Menu</p>
</header>
<a href="logout.php">Logout</a>
<br>
Hello, <?php echo $user_data['user_name']; ?>

<div class="overlay">
    <a class="close">&times;</a>
    <div class="overlay__content">

        <a href="wishlist.html">Create Wishlist</a>
        <a href="#">Friends</a>
        <a href="#">About us</a>
        <a href="signup.html">Login</a>
    </div>
</div>


<main>
    <section id="teaser">
        <div class="container">

            <div id="call-to-actions">
                <div class="row">
                    <div class="column column-1-3">
                        <h1>Gifts what you really want</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="column column-1-3">
                        <h2>Create your own wishlist within
                            <span style="text-decoration: underline;">2 clicks</span>
                            and share it with your friends and family.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="column column-1-3">

                <!--<img class="fade-in" src="images/teaserBG.jpg"> -->

            </div>
        </div>
        <div class="row">
            <div class="column column-1-3 action-buttons">
                <div class="new-wishlist-button">
                    <a class="button" title="Create a Wishlist" href="wishlist.html">Create a Wishlist</a>
                </div>
            </div>
        </div>
        <!-- Reihe -->
        <div id="summary" class="row">
            <ul>
                <li class="fade-in">
                    <span style="font-weight: bold; font-size: 32px">✔</span>
                    Free
                </li>
                <li class="fade-in">
                    <span style="font-weight: bold;font-size: 32px">✔</span>
                    User friendly
                </li>
                <li class="fade-in">
                    <span style="font-weight: bold;font-size:32px;">✔</span>
                    Easy
                </li>
            </ul>
        </div>
    </section>
    <section id="howto">
        <div class="container">
            <div class="row">
                <h2>Wishlist in three steps</h2>
            </div>
            <div class="row">
                <div class="column column-1">
                    <img src="images/Add_Wishlist.png" alt="Add wishlist">
                    <h3>1. Create a wishlist</h3>
                    <p>
                        Create your own wish list - it's completely free. Complete so
                        as many requests as you want, e.g. directly from an online shop, from the flower shop around the corner
                        or via our integrated search.
                    </p>
                </div>
                <div class="column column-1">
                    <img src="images/@.png" alt="Forward wishlist">
                    <h3>2. Share your wishlist</h3>
                    <p>
                        Send your wishlist to your friends and relatives. Only those who are invited have
                        Access to your wishlist. Uninvited guests stay outside.
                    </p>
                </div>
                <div class="column column-1">
                    <img src="images/present.png" alt="Present">
                    <h3>3. Get desired gifts</h3>
                    <p>
                        Visitors to your wish-list can choose the wishes they would like to fulfill,
                        Reservations. So there will never be a double gift again.
                    </p>
                </div>
            </div>
        </div>
    </section>


</main>
<script type="text/javascript" src="mobile.js"></script>
</body>

</html>