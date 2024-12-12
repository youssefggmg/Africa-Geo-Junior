<?php
include "../config/db.php";

$countryName = $countrypopulation = $countryLanguage = '';

if (isset($_POST['countryName'])) {
    $countryName = $_POST['countryName'];
}
if (isset($_POST['countrypopulation'])) {
    $countrypopulation = (int) $_POST['countrypopulation'];
}
if (isset($_POST['countryLanguage'])) {
    $countryLanguage = $_POST['countryLanguage'];
}
echo $countryName . ' ' . $countrypopulation . ' ' . $countryLanguage;

if (empty($countryName) || empty($countrypopulation) || empty($countryLanguage)) {
    die("All fields are required.");
}

$insert = mysqli_prepare($connection, "INSERT INTO country (Name, population, language) VALUES (?, ?, ?)");

mysqli_stmt_bind_param($insert, "sis", $countryName, $countrypopulation, $countryLanguage);

if (!mysqli_stmt_execute($insert)) {
    die("Failed to execute query: " . mysqli_stmt_error($insert));
}

mysqli_stmt_close($insert);

header("Location: ../index.php");
exit();
?>
