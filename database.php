<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "tathastu_tailor";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>