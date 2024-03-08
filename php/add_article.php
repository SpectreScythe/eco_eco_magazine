<?php

include "./database/connection.php";

if (
    isset($_POST['submit']) &&
    isset($_FILES['article_imgA']) &&
    isset($_FILES['article_imgB']) &&
    isset($_POST['username']) &&
    isset($_POST['email']) &&
    isset($_POST['article_title']) &&
    isset($_POST['article_paraA']) &&
    isset($_POST['article_paraB']) &&
    isset($_POST['article_paraC']) &&
    isset($_POST['article_paraD'])
) {

    $article_title = isset($_POST['article_title']);
    $author = isset($_POST['username']);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $article_title = $_POST['article_title'];
    $article_paraA = $_POST['article_paraA'];
    $article_paraB = $_POST['article_paraB'];
    $article_paraC = $_POST['article_paraC'];
    $article_paraD = $_POST['article_paraD'];
    $article_imgA = $_FILES['article_imgA'];
    $article_imgB = $_FILES['article_imgB'];

    if (empty($username)) {
        header("Location: ../pages/add/add_article_page.php?username=❗ USERNAME CAN'T BE EMPTY");
        exit();
    } elseif (empty($email)) {
        header("Location: ../pages/add/add_article_page.php?email=❗ EMAIL CAN'T BE EMPTY");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../pages/add/add_article_page.php?email=❗ INVALID EMAIL ADDRESS");
        exit();
    } elseif (empty($article_title)) {
        header("Location: ../pages/add/add_article_page.php?title=❗ TITLE CAN'T BE EMPTY");
        exit();
    } elseif (empty($article_paraA)) {
        header("Location: ../pages/add/add_article_page.php?paraA=❗ PARAGRAPH A CAN'T BE EMPTY");
        exit();
    } elseif (empty($article_paraB)) {
        header("Location: ../pages/add/add_article_page.php?paraB=❗ PARAGRAPH B CAN'T BE EMPTY");
        exit();
    } elseif (empty($article_paraC)) {
        header("Location: ../pages/add/add_article_page.php?paraC=❗ PARAGRAPH C CAN'T BE EMPTY");
        exit();
    } elseif (empty($article_paraD)) {
        header("Location: ../pages/add/add_article_page.php?paraD=❗ PARAGRAPH D CAN'T BE EMPTY");
        exit();
    }
    // elseif ($article_imgA['error'] = 4) {
    //     header("Location: ../pages/add/add_article_page.php?imgA=❗ PLEASE SELECT AN IMAGE FOR THE ARTICLE");
    //     exit();
    // } elseif ($article_imgB['error'] = 4) {
    //     header("Location: ../pages/add/add_article_page.php?imgB=❗ PLEASE SELECT AN IMAGE FOR THE ARTICLE");
    //     exit();
    // } 
    else {

        $htmlContent = "<!DOCTYPE html>
    
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>eco eco | Added Article</title>
    <link href='../../styles/globals.css' rel='stylesheet'>
    <link href='../../styles/pages/home.css' rel='stylesheet'>
</head>
<body>

    <?php
    include '../../components/ui/Nav/InnerNav.php';
    ?>


<div class='hidden article-container'>";

        $url = "";
        $htmlContent .= " <?php
        include '../../components/ui/Nav/InnerNav.php';
        ?>
    
        <?php
        include '../../components/pages/ArticleBody.php';
        ?>
    
        <?php
        include '../../components/ui/Footer/Footer.php';
        ?> ";

        try {
            $filePath = "../pages/entertainment/" . $article_title . ".php";

            $filePath = str_replace("'", "", $filePath);

            file_put_contents($filePath, $htmlContent);
            $tmp_nameA = $_FILES['article_imgA']['tmp_name'];
            $tmp_nameB = $_FILES['article_imgB']['tmp_name'];

            $img_blobA = addslashes(file_get_contents($tmp_nameA));
            $img_blobB = addslashes(file_get_contents($tmp_nameB));

            $linkQuery = 'INSERT INTO eco_article_links (link) VALUES ("./entertainment/' . $article_title . '.php")';

            $resultLink = mysqli_query($connection, $linkQuery);

            $queryA = "INSERT INTO eco_eco_article (article_type, article_title, article_short_a, article_short_b, article_brief_a, article_brief_b, img_name, img_blobA, img_blobB) 
   VALUES ('Entertainment', '$article_title', '$article_paraA', '$article_paraB', '$article_paraC', '$article_paraD', 'img_name', '$img_blobA', '$img_blobB')";

            $resultA = mysqli_query($connection, $queryA);
        } catch (mysqli_sql_exception $e) {
            header("Location: ../pages/add/add_article_page.php?imgError=Select a smaller resolution image");
        }

        $queryB = "INSERT INTO add_users (username,email) VALUES ('$username','$email')";

        $resultB = mysqli_query($connection, $queryB);
    }
    header("Location: ../pages/add/add_article_page.php?success=Article Added Successfully");
} else {
    header("Location: ../pages/add/add_article_page.php?error=Please fill out all the fields");
    exit();
}
