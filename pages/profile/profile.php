<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>eco eco | Profile</title>
    <link rel="stylesheet" href="../../styles/globals.css">
    <link rel="stylesheet" href="../../styles/home.css">
    <link rel="stylesheet" href="../../styles/profile.css">
</head>

<body>

    <?php
    include '../../components/ui/Nav/InnerNav.php';
    ?>

    <?php
    include '../../components/pages/profile/body.php';
    ?>

    <?php
    include "../../components/ui/Footer/InnerFooter.php";
    ?>