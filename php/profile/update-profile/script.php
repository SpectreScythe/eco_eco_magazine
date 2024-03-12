<?php

session_start();

include "../database/connection.php";

if (isset($_POST['new-username']) && isset($_POST['new-phonenumber']) && isset($_POST['new-password'])) {

    $phone_number_pattern = "/^\d{10}$/";

    $username = $_POST['new-username'];
    $phonenumber = $_POST['new-phonenumber'];
    $password = $_POST['new-password'];

    $query = "UPDATE users SET USER_NAME = '$username', USER_PHONE_NUMBER = '$phonenumber', USER_PASSWORD = '$password' WHERE USER_ID = '" . $_SESSION['USER_ID'] . "'";
    $result = mysqli_query($connection, $query);
    header("Location: ../../pages/profile/profile.php?value=Profile Updated Successfully");
} else {
    header("Location: ../../pages/404_not_found.php");
    exit();
}
