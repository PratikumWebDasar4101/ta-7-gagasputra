<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $db         = "db_jurnal7";
    
    $connect = mysqli_connect($servername, $username, $password, $db);

    if (!$connect) {
        die ("Connection Failed: ".mysqli_connect_error());
    }
?>