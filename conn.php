<?php
// error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbbox";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn){
        // echo "connect!!!";
    }
    else{
        echo "no";
        // .mysqli_connect_error();
    }

?>