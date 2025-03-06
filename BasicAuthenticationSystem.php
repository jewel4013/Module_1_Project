<?php
    define("username", "Jewel");
    define( "password","12345");

    echo "Enter your username : ";
    $userName = readline();

    echo "Enter your passowrd: ";
    $password = readline();

    if(empty($userName) || empty($password)){
        echo "Enter a valid username and password.";
    }elseif($userName === username && $password === password){
        echo "Login Successfull.";
    }else{
        echo "Invalid username or password.";
    }
?>