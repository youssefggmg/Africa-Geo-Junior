<?php
include '../config/db.php';
if (isset($_POST['cname'])) {
    $name = $_POST['cname'];
}
if (isset($_POST['cid'])) {
    $countryID = $_POST['cid'];
}
if (isset($_POST['population'])) {
    $population = $_POST['population'];
}
if (isset($_POST['languege'])) {
    $languege = $_POST['languege'];
}
$name =$connection->real_escape_string($name);
$countryID =$connection->real_escape_string($countryID);
$population =$connection->real_escape_string($population);
$languege =$connection->real_escape_string($languege);

// updateContryInfoQueryis the meaning of the next varaibl
$UCIQ="UPDATE country SET Name='$name', population=$population, language='$languege' WHERE Country_ID=$countryID";
$update=$connection->query($UCIQ);
if ($update) {
    $messge = "it have been updated sucssfuly";
}
else{
    $messge =$connection->error;
}
$connection->close();
header("location: http://localhost/Africa-Geo-Junior/index.php?message=".urlencode($messge));
?>