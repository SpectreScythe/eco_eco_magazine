<?php

include "./database/connection.php";

if (isset($_POST['username']) && isset($_POST['phonenumber']) && isset($_POST['email']) && isset($_POST['password'])) {

    $phone_number_pattern = "/^\d{10}$/";

    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username)) {
        header("Location: ../pages/auth/signup_page.php?error=Username is Required");
        exit();
    } elseif (empty($phonenumber)) {
        header("Location: ../pages/auth/signup_page.php?error=PhoneNumber is Required");
        exit();
    } elseif (!preg_match($phone_number_pattern, $phonenumber)) {
        header("Location: ../pages/auth/signup_page.php?error=Invalid Phone Number format");
        exit();
    } elseif (empty($email)) {
        header("Location: ../pages/auth/signup_page.php?error=Email is Required");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../pages/auth/signup_page.php?error=Invalid Email format");
        exit();
    } elseif (empty($password)) {
        header("Location: ../pages/auth/signup_page.php?error=Password is Required");
        exit();
    } else {
        $query = "INSERT INTO eco_eco_users (username, phonenumber, email, password) VALUES ('$username','$phonenumber','$email','$password')";
        $result = mysqli_query($connection, $query);
        header("Location: ../pages/home.php");
        exit();
    }

} else {
    header("Location: ../pages/404_not_found.php");
    exit();
}
