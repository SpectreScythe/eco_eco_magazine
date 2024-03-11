<div class="hidden main">
    <?php
    include "../php/database/connection.php";

    if (!$connection) {
        header("Location: ./404_not_found.php");
        exit();
    } else {
        $fetchArticles = 'SELECT * FROM articles';
        $result = mysqli_query($connection, $fetchArticles);

        $i = 0;

        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $ARTICLE_LINK = $row['ARTICLE_LINK'];
                $ARTICLE_TITLE = $row['ARTICLE_TITLE'];
                $ARTICLE_PARA_A = $row['ARTICLE_PARA_A'];
                $ARTICLE_CARD_IMG = base64_encode($row['ARTICLE_IMG_A']);

                $ARTICLE_PARA_A = substr($ARTICLE_PARA_A, 0, 100);

                echo '<div class="hidden card-grid">';
                echo '<a href="' . $ARTICLE_LINK . '?value=' . $ARTICLE_TITLE . '">';
                echo "<div class='home-cards'> ";
                echo '<img class="hidden card-img" src="data:image;base64,' . $ARTICLE_CARD_IMG . '" alt="IMAGE">';
                echo "<div class='card-text'> ";
                echo '<h1>' . $ARTICLE_TITLE . '</h1>';
                echo '<p>' . $ARTICLE_PARA_A . '.......</p>';
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
