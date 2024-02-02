<?php

$userhost = "localhost";
$username = "root";
$password = "";
$database = "eco_eco_database";

$connection = mysqli_connect($userhost, $username, $password, $database);

if (!$connection){
    echo "Connection Failed <br>";
} else {
    echo "Connection Established <br>";
}