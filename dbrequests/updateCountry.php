<?php
include '../config/db.php';
$name = $countryID = $population = $language = '';
if (isset($_POST['cname'])) {
    $name = $_POST['cname'];
}
if (isset($_POST['cid'])) {
    $countryID = (int) $_POST['cid'];
}
if (isset($_POST['population'])) {
    $population = (int) $_POST['population'];
}
if (isset($_POST['languege'])) {
    $languege = $_POST['languege'];
}
$name = mysqli_real_escape_string($connection, $name);
$countryID = (int)mysqli_real_escape_string($connection, $countryID);
$population = (int)mysqli_real_escape_string($connection, $population);
$language = mysqli_real_escape_string($connection, $languege);

$update = mysqli_prepare($connection, "UPDATE country SET Name = ?, population = ?, language = ? WHERE Country_ID = ?");
echo 1;
mysqli_stmt_bind_param($update, "sisi", $name, $population, $language, $countryID);
echo 2;
mysqli_stmt_execute($update);
echo 3;
if (mysqli_stmt_execute($update)) {
    echo 4;
    mysqli_stmt_close($update);
    header("Location: http://localhost/Africa-Geo-Junior/index.php");
    exit();
} else {
    die("Query execution failed: " . mysqli_error($connection));
}
