<?php
include '../config/db.php';
$cityID = '';
if (isset($_GET['cityID'])) {
    $cityID =$_GET['cityID'];
}
$cityID = (int)mysqli_real_escape_string($connection,$cityID);

$delete = mysqli_prepare($connection,"DELETE from city WHERE City_ID = ?");
mysqli_stmt_bind_param($delete,"i",$cityID);
mysqli_stmt_execute($delete);
header("location: http://localhost/Africa-Geo-Junior/pages/citys.php?message=".urldecode("thecountryhave been deleted succssefuly"));
mysqli_close($connection);
?>