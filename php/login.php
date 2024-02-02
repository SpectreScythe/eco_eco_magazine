<?php

include "./database/connection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        header("Location: ../pages/auth/login_page.php?error=Email is Required");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../pages/auth/signup_page.php?error=Invalid Email format");
        exit();
    } elseif (empty($password)) {
        header("Location: ../pages/auth/login_page.php?error=Password is Required");
        exit();
    } else {
        $query = "SELECT * FROM eco_eco_users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result)) {
            echo "User Found";
        } else {
            echo "User not there";
        }
    }

} else {
    header("Location: index.php");
    exit();
}
