<?php
$hostName="localhost";
$userName = "root";
$password = "";
$DBname = "africa_géo_junior";
$connection =  mysqli_connect($hostName,$userName,$password,$DBname);
if (mysqli_connect_error()) {
    die("connection error". $connection->connect_error);
}
?>