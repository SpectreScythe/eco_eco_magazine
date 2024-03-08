<div class='hidden article-container'>
    <?php
    include '../../php/database/connection.php';

    if (isset($_GET['value'])) {
        $received_value = $_GET['value'];

        $getImages = 'SELECT * FROM eco_eco_article WHERE article_title = \'' . $received_value . '\'';
        $result = mysqli_query($connection, $getImages);

        while ($row = mysqli_fetch_assoc($result)) {

            $article_title = $row['article_title'];
            $article_short_a = $row['article_short_a'];
            $article_short_b = $row['article_short_b'];
            $article_brief_a = $row['article_brief_a'];
            $article_brief_b = $row['article_brief_b'];
            $deadpool_main = $row['img_blobA'];
            $deadpool_movie_logo = $row['img_blobB'];

            echo '<h1 class="hidden article-title">' . $article_title . '</h1>';
            echo '<p class="hidden short-para">' . $article_short_a . '</p>';
            echo '<img class="hidden my-img full_img" src="data:image;base64,' . base64_encode($deadpool_movie_logo) . '" alt="IMAGE">';
            echo '<p class="hidden short-para">' . $article_short_b . '</p>';
            echo '<p class="hidden short-para">' . $article_brief_a . '</p>';
            echo '<img class="hidden my-img full_img" src="data:image;base64,' . base64_encode($deadpool_main) . '" alt="IMAGE">';
            echo '<p class="hidden short-para">' . $article_brief_b . '</p>';
        }
    } else {
        echo 'No images found.';
    }
    mysqli_close($connection);
    ?>
</div>