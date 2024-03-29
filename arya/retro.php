<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>retromain</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleretro.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <script>
        let slideIndex = 0;

        document.addEventListener("DOMContentLoaded", function () {
            showSlides(slideIndex);

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var captionText = document.getElementById("caption");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }

                slides[slideIndex - 1].style.display = "block";
            }

            showSlides(0);
        });

        const plusSlides = (n) => {
            showSlides(slideIndex += n);
            console.log("nxt clicked")
        }

        const currentSlide = (n) => {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var captionText = document.getElementById("caption");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex - 1].style.display = "block";
        }
    </script>

    <header>
        <nav>
            <h1 class="cultitle">Retro</h1>
            <ul>
                <a href="./new.php">
                    <li><i class="fa fa-arrow-left" style="font-size:24px;color:white"></i>
                </a>
            </ul>
        </nav>
    </header>
    <main>

        <div class="content">
            <h1>Retro Style</h1>
            <h4>Making the old new</h4>
        </div>
        <div class="contentimg1">
            <a href="https://stylecaster.com/feature/retro-fashion-trends-1149491/"  target="_blank"><img
                    src="images/retroimg1.webp" alt="img"></a>
        </div>



        <div class="content2">
            <div class="content2image">
                <a href="https://fashionisk.com/70s-bollywood-retro-fashion/"
                    target="_blank">
                    <h2>70's Bollywood Retro Fashion: An Era of Unforgettable Style </h2>
                </a>
                <!-- <p class="content2content">A new footwear trend dominated the entire street style<br> space on day two
                    at the New York Fashion week as the<br> majority of showgoers stepped out and about in knee-high<br>
                    boots. Pairing these beauties with oversized blazers,<br> babydoll dresses, minimalist coordinates,
                    faux leather<br> jackets, and more, showgoers amped up their style with<br> these statement staples
                    for fall.
                </p> -->
                <a href="https://fashionisk.com/70s-bollywood-retro-fashion/"
                    target="_blank"><img src="images/retroimg2.jpg" alt=""></a>




            </div>
        </div>

        <a href="https://www.jdinstitute.edu.in/indian-retro-looks-a-fashion-comeback/" target="_blank">
            <h1 class="content3_title">Indian Retro looks – A Fashion comeback!</h1>
        </a>
        <div class="imgslider">
            <div class="container imgsliderCon" onload="showSlides(0)">
                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/retroslider2.webp" class="img1" style="width:50%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/retroslider3.webp" class="img2" style="width:50%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/retroslider4.webp" class="img3" style="width:50%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/retroslider1.webp" class="img4" style="width:50%">
                </div>


                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>


            <div class="content4">
                <!-- <a href="https://chowdhrain.com/blogs/news/significance-of-traditional-indian-sarees" target="_blank"><h1 class="content4_title">INDIAN CULTURAL ICON: THE SAREE</h1></a> -->
                <div class="content4image">
                    
                    <img src="images/retroimg4.jpg" alt="">

                    <a href="https://www.pinkvilla.com/fashion/celebrity-style/ranveer-singhs-promotional-fits-83-makes-winter-look-warmer-and-dapper-side-retro-fashion-974698" target="_blank">
                        <p class="content4content">Ranveer Singh's promotional fits for<br> 83 makes winter look warmer and dapper<br> with a side of retro fashion
                        </p>
                    </a>
                    <p class="content4subcontent">Updated on Dec 25, 2021 </p>
                </div>
            </div>

            <div class="content5">
                <div class="content5image">
                    <a href="https://www.harpersbazaararabia.com/gallery/70s-retro-fashion-trend" target="_blank"><img
                            src="images/retroimg5.gif" alt=""></a>
                </div>
                <div class="content5title">
                    <a href="https://www.harpersbazaararabia.com/gallery/70s-retro-fashion-trend" target="_blank">
                        <h1>That 70’s Show: Retro Fashion Is Having A Major Moment</h1>
                    </a>
                </div>
                <!-- <div class="content5content">

                    <p>Gigi Hadid has quickly become America's sweetheart of the<br> modeling world—with her
                        California-girl good looks and sunny<br> disposition—but her style says bona fide bombshell.
                        Hadid<br> knows how to dress her curves—from midriff-baring two-pieces<br> to curve-hugging
                        dresses and plunging necklines.
                    </p>
                </div> -->
                
            </div>
            <div class="footer">
                <hr>
                <h1 class="footertxt">FIND US HERE</h1>
                <div class="wrapper">
                    <div class="button">
                        <div class="icon">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <span>Facebook</span>
                        </div>
                    </div>

                    <div class="button">
                        <div class="icon">
                            <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"
                                target="_blank"><i class="fab fa-twitter"></i></a>
                            <span>Twitter</span>
                        </div>
                    </div>

                    <div class="button">
                        <div class="icon">
                            <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <span>Instagram</span>
                        </div>
                    </div>

                    <div class="button">
                        <div class="icon">
                            <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                            <span>Youtube</span>
                        </div>
                    </div>

                </div>
            </div>
    </main>



</body>

</html>