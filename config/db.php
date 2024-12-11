<?php
$hostName="localhost";
$userName = "root";
$password = "";
$DBname = "africa_géo_junior";
$connection = new mysqli($hostName,$userName,$password,$DBname);
if ($connection->connect_error) {
    die("connection error". $connection->connect_error);
}

?>