<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "loginsystem";

    $con = new mysqli($server, $user, $pass, $dbName);

    if($con->connect_error){
        echo "Connection Failed: ".$con->connect_error;
    }else{
        // echo "Connected Successfully";
    }
?>