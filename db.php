<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "GD4_A_0753";
    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failed to connect : " . mysqli_connect_error();

    }
?>