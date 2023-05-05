<?php

    $servername = "localhost:3306";
    $username = "pn133_root";
    $password = "Bankppk2540";
    $dbname = "pn133_paparkorn";

    //Create Connection
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    //Check connection
    if (!$conn) {
        die("connection failed".mysql_connect_error());
    } 

?>