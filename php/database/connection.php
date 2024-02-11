<?php

$userhost = "localhost";
$username = "root";
$password = "";
$database = "eco_eco_database";

$connection = mysqli_connect($userhost, $username, $password, $database);

if (!$connection) {
    header("Location: ../../pages/404_not_found.php");
    exit();
}
