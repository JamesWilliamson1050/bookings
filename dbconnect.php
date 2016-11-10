<?php

    $servername ="localhost";
    $username ="jwilliamson1050";
    $password ="";
    $dbname ="c9";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connecr_error){
    die("Connection Failed".$conn->connect_error);
    
    }

?>