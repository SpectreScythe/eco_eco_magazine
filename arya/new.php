<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>arya</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <script src="app.js" async defer></script>
        <!--<video src="backgroundvid.mp4" class="backgroundvid" loop muted></video>-->
        <div class="fashionmain">

            <video autoplay loop muted plays-inline class="backvideo">
                <source src="images/backgroundvid.mp4" type="video/mp4">
            </video>
           <!-- <div class="content">
                <h1>Fashion</h1>
           </div> -->
          <!-- <div id="horizontal-line"></div>-->
           <div class="card">
                <a href="./cultural.php"><div class="card1">
                    <h5>Cultural</h5>
                </div></a>
                <a href="./street.php" ><div class="card2">
                    <h5>Street</h5>
                </div></a>
                <a href="./summer.php" ><div class="card3">
                    <h5>Summer Collection</h5>
                </div></a>
                <a href="./retro.php" ><div class="card4">
                    <h5>Retro</h5>
                </div></a>
                <a href="./businessmain.php" ><div class="card5">
                    <h5>Business Casuals </h5>
                </div></a>
                <a href="./events.php" ><div class="card6">
                    <h5>Events</h5>
                </div></a>

            </div>
            <div class="sliderheading">
                <h1>Latest</h1>
            </div>
            <section class="section">
                <div class="slider">
                    <div class="slide">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <input type="radio" name="radio-btn" id="radio5">
                        <input type="radio" name="radio-btn" id="radio6">

                        <div class="st first">
                            <img src="images/latest1.jpg" alt="">
                        </div>
                        <div class="st">
                            <img src="images/latest2.jpg" alt="">
                        </div>
                        <div class="st">
                            <img src="images/latest3.jpg" alt="">
                        </div>
                        <div class="st">
                            <img src="images/latest4.jpg" alt="">
                        </div>
                        <div class="st">
                            <img src="images/latest5.jpg" alt="">
                        </div>
                        <div class="st">
                            <img src="images/latest6.jpg" alt="">
                        </div>

                        <div class="nav-auto">
                            <div class="a-b1"></div>
                            <div class="a-b2"></div>
                            <div class="a-b3"></div>
                            <div class="a-b4"></div>
                            <div class="a-b5"></div>
                            <div class="a-b6"></div>
                        </div>

                        <div class="nav-m">
                            <label for="radio1" class="m-btn"></label>
                            <label for="radio2" class="m-btn"></label>
                            <label for="radio3" class="m-btn"></label>
                            <label for="radio4" class="m-btn"></label>
                            <label for="radio5" class="m-btn"></label>
                            <label for="radio6" class="m-btn"></label>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>