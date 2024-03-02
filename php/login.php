<?php

include "./database/connection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        header("Location: ../pages/auth/login_page.php?error=Email is Required");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../pages/auth/login_page.php?error=Invalid Email format");
    } elseif (empty($password)) {
        header("Location: ../pages/auth/login_page.php?error=Password is Required");
    } else {
        $query = "SELECT * FROM eco_eco_users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result)) {
            header("Location: ../pages/home.php");
        } else {
            header("Location: ../pages/auth/login_page.php?error=Incorrect Email or Password");
        }
    }
} else {
    header("Location: ../pages/404_not_found.php");
}
exit();
