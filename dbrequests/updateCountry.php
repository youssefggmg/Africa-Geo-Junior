<?php
include '../config/db.php';
$name = $countryID = $population = $languege = '';
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
echo $name . $countryID .  $population .  $languege;

// updateContryInfoQuery is the meaning of the next varaibl
$update = $connection->prepare("UPDATE country SET Name=?, population=?, language=? WHERE Country_ID=?");;
$update->bind_param("ssss",$name,$population,$languege,$countryID);
$update->execute();
$connection->close();
// header("location: http://localhost/Africa-Geo-Junior/index.php");
?>