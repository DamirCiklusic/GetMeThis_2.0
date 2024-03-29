<?php

session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] === $password)	//if pw is the same
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "wrong username or password!";
    }else
    {
        echo "wrong username or password!";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<style type="text/css">

    #text{

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{

        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box{

        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }

</style>

<header>
    <a class="logo" href="main.html"><img src="images/Logo_first.png" alt="logo"></a>
    <nav>
        <ul class="nav__links">
            <li><a href="wishlist.html">Create Wishlist</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="About%20us.html">About us</a></li>

        </ul>
    </nav>
    <a class="cta" href="signup.php">Login / Sign-up</a>
    <p class="menu cta">Menu</p>
</header>

<div id="box">

    <form method="post">
        <div style="font-size: 20px;margin: 10px;color: white;">Login</div>

        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Login"><br><br>

        <a href="signup.php">Click to Signup</a><br><br>
    </form>
</div>
</body>
</html>