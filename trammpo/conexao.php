<?php
    require_once("includes.php");

    $hostname = "db4free.net";
    $database = "trammpo";
    $user = "marcosrodz";
    $password = "senaictm";

    $con = mysqli_connect($hostname, $user, $password, $database);

    if (!$con) 
    {
        die(mysqli_error());
    }
    else 
    {    
        $_SESSION["conexao"] = $con;
    }