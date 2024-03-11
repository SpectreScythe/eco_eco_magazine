<div class='hidden article-container'>
    <?php
    include '../../php/database/connection.php';

    if (isset($_GET['value'])) {
        $received_value = $_GET['value'];

        $getImages = 'SELECT * FROM articles WHERE ARTICLE_TITLE = \'' . $received_value . '\'';
        $result = mysqli_query($connection, $getImages);

        while ($row = mysqli_fetch_assoc($result)) {

            $ARTICLE_TITLE = $row['ARTICLE_TITLE'];
            $ARTICLE_PARA_A = $row['ARTICLE_PARA_A'];
            $ARTICLE_PARA_B = $row['ARTICLE_PARA_B'];
            $ARTICLE_PARA_C = $row['ARTICLE_PARA_C'];
            $ARTICLE_PARA_D = $row['ARTICLE_PARA_D'];
            $ARTICLE_IMG_A = $row['ARTICLE_IMG_A'];
            $ARTICLE_IMG_B = $row['ARTICLE_IMG_B'];

            echo '<h1 class="hidden article-title">' . $ARTICLE_TITLE . '</h1>';
            echo '<p class="hidden short-para">' . $ARTICLE_PARA_A . '</p>';
            echo '<img class="hidden my-img full_img" src="data:image;base64,' . base64_encode($ARTICLE_IMG_A) . '" alt="IMAGE" />';
            echo '<p class="hidden short-para">' . $ARTICLE_PARA_B . '</p>';
            echo '<p class="hidden short-para">' . $ARTICLE_PARA_C . '</p>';
            echo '<img class="hidden my-img full_img" src="data:image;base64,' . base64_encode($ARTICLE_IMG_B) . '" alt="IMAGE" />';
            echo '<p class="hidden short-para">' . $ARTICLE_PARA_D . '</p>';
        }
    } else {
        echo 'No images found.';
    }
    mysqli_close($connection);
    ?>
</div>