<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>eco eco | Entertainment</title>
    <link rel="stylesheet" href="../styles/globals.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/entertainment.css">
</head>

<body>

    <?php

    include '../components/ui/Nav/OuterNav.php';

    ?>

    <div class="hidden main">
        <?php
        include "../php/database/connection.php";

        if (!$connection) {
            header("Location: ./404_not_found.php");
            exit();
        } else {
            $linkQuery = 'SELECT * FROM eco_article_links';
            $resultLink = mysqli_query($connection, $linkQuery);

            $article_links = array();
            while ($linkRow = mysqli_fetch_assoc($resultLink)) {
                $article_links[] = $linkRow['link'];
            }

            $getImages = 'SELECT * FROM eco_eco_article';
            $result = mysqli_query($connection, $getImages);

            $i = 0;

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $article_title = $row['article_title'];
                    $article_short_a = $row['article_short_a'];
                    $article_short_b = $row['article_short_b'];
                    $article_brief_a = $row['article_brief_a'];
                    $article_brief_b = $row['article_brief_b'];
                    $deadpool_main = $row['img_blobA'];
                    $deadpool_movie_logo = $row['img_blobB'];

                    $article_short_a = substr($article_short_a, 0, 80);

                    echo '<div class="hidden card-grid">';
                    echo '<a href="' . $article_links[$i] . '?value=' . $article_title . '">';
                    echo "<div class='home-cards'> ";
                    echo '<img class="hidden card-img" src="data:image;base64,' . base64_encode($deadpool_movie_logo) . '" alt="IMAGE">';
                    echo "<div class='card-text'> ";
                    echo '<h1>' . $article_title . '</h1>';
                    echo '<p>' . $article_short_a . '.......</p>';
                    echo "</div > ";
                    echo "</div > ";
                    echo '</a>';
                    echo '</div>';

                    $i++;
                }
            }
        }


        mysqli_close($connection);
        ?>
    </div>

    <?php
    include "../components/ui/Footer/OuterFooter.php";
    ?>