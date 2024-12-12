<?php
include "../config/db.php";
if (isset($_POST['cid'])) {
    $cityID = $_POST['cid'];
}
if (isset($_POST['cname'])) {
    $cityName = $_POST['cname'];
}
if (isset($_POST['type'])) {
    $cityType = $_POST['type'];
}
$ID = $connection->real_escape_string($cityID);
$Name = $connection->real_escape_string($cityName);
$type = $connection->real_escape_string($cityType);

//$query="UPDATE city SET name=$Name,type=$type WHERE City_ID=$ID";
$query="insert into city ( name, type) VALUES ('$Name','$type',1)";
$update = $connection->query($query);
$connection->close();
if ($update) {
    $messge = "the city info have been updated sucssefuly";
}else{
    $messge = "ther wasn an error ". $connection->error;
}
header("http://localhost/Africa-Geo-Junior/pages/addcountry.php?message=".urlencode($messge))
?>