<?php


//    File: dbc_admin.php
//    Connect Read-only to MySQL databse via PHP



$host = "localhost";
$userName = "root";
$passWord = "";
$dataBase = "westchester";

$con = mysqli_connect($host, $userName, $passWord, $dataBase);

$connection_error = mysqli_connect_error();
if($connection_error != null){
    echo "<p>Error connection to database: $connection_error</p>";
}else{
    echo "Connected to Admin MySQL<br>";
}

?>