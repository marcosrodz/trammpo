<?php

    $hostname = "localhost";
    $database = "trammpo";
    $user = "root";
    $password = "";

    $con = mysqli_connect($hostname, $user, $password, $database);

    if (!$con) 
    {
        die(mysqli_error());
    }
    else 
    {    
        $_SESSION["conexao"] = $con;
    }