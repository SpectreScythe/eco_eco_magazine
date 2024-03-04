<?php

include "./database/connection.php";

if (isset($_POST['username']) && isset($_POST['phonenumber']) && isset($_POST['email']) && isset($_POST['password'])) {

    $phone_number_pattern = "/^\d{10}$/";

    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO eco_eco_users (username, phonenumber, email, password) VALUES ('$username','$phonenumber','$email','$password')";
    $result = mysqli_query($connection, $query);
    header("Location: ../pages/home.php");
    exit();
} else {
    header("Location: ../pages/404_not_found.php");
    exit();
}
