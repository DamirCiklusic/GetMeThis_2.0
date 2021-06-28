<?php

function check_login($con) //check if session value exists
{

    if(isset($_SESSION['user_id']))	//if inside section user id is set
    {

        $id = $_SESSION['user_id'];			//a real database
        $query = "select * from users where user_id = '$id' limit 1";		//ask database if its valide

        $result = mysqli_query($con,$query);		//read from database
        if($result && mysqli_num_rows($result) > 0)		//when positive
        {

            $user_data = mysqli_fetch_assoc($result);		//send result
            return $user_data;								//return
        }
    }

    //redirect to login
    header("Location: login.php");		//if failed
    die;

}

function random_num($length)	//how long number is
{

    $text = "";
    if($length < 5)
    {
        $length = 5;		//never less than 5
    }

    $len = rand(4,$length);			//select nr between 4 & f.e 20 (not less than 5)

    for ($i=0; $i < $len; $i++) {
        # code...

        $text .= rand(0,9);
    }

    return $text;
}