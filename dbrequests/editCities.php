<?php
include "../config/db.php";

$cityID = $cityName = $cityType = '';

if (isset($_POST['cid'])) {
    $cityID = (int) $_POST['cid'];
}
if (isset($_POST['cname'])) {
    $cityName = $_POST['cname'];
}
if (isset($_POST['type'])) {
    $cityType = $_POST['type'];
}

if (empty($cityID) || empty($cityName) || empty($cityType)) {
    die("All fields are required.");
}

$update = mysqli_prepare($connection, "UPDATE city SET name = ?, type = ? WHERE City_ID = ?");

mysqli_stmt_bind_param($update, "ssi", $cityName, $cityType, $cityID);

if (mysqli_stmt_execute($update)) {
    $message = "City updated successfully.";
} else {
    $message = "Failed to update city: " . mysqli_stmt_error($update);
}

mysqli_stmt_close($update);

header("Location: http://localhost/Africa-Geo-Junior/pages/citys.php" );
exit();
?>
