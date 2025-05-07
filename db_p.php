<?php
    // Procedural
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "loginsystem";

    if(@$con = mysqli_connect($server, $user, $pass, $dbName)){
        // echo "Connected Successflly";
    }else{
        echo "Connection Failed: ".mysqli_connect_error();
    }

?>