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
    <title>streetmain</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylestreet.css">
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
            <h1 class="cultitle">Street</h1>
            <ul>
                <a href="F:\CSS1\main\new.html" >
                    <li><i class="fa fa-arrow-left" style="font-size:24px;color:white"></i>
                </a>
            </ul>
        </nav>
    </header>
    <main>

        <div class="content">
            <h1>Street Style</h1>
            <h4>Inspiring street style images of celebrities, models, editors, and stylish people around the world.
            </h4>
        </div>
        <div class="contentimg1">
            <a href="https://www.palwalonline.in/city-guide/culture-in-palwal" target="_blank"><img
                    src="images/street1.webp" alt="img"></a>
        </div>



        <div class="content2">
            <div class="content2image">
                <a href="https://www.harpersbazaar.com/uk/fashion/what-to-wear/g27814036/knee-high-boots/"
                    target="_blank">
                    <h2>Knee-High Boots </h2>
                </a>
                <p class="content2content">A new footwear trend dominated the entire street style<br> space on day two
                    at the New York Fashion week as the<br> majority of showgoers stepped out and about in knee-high<br>
                    boots. Pairing these beauties with oversized blazers,<br> babydoll dresses, minimalist coordinates,
                    faux leather<br> jackets, and more, showgoers amped up their style with<br> these statement staples
                    for fall.
                </p>
                <a href="https://www.harpersbazaar.com/uk/fashion/what-to-wear/g27814036/knee-high-boots/"
                    target="_blank"><img src="images/street2.jpg" alt=""></a>




            </div>
        </div>

        <a href="https://www.vogue.co.uk/gallery/milan-fashion-week-street-style" target="_blank">
            <h1 class="content3_title">The Best Street Style Photos From Milan Fashion Week SS24</h1>
        </a>
        <div class="imgslider">
            <div class="container imgsliderCon" onload="showSlides(0)">
                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/streetsliderimg6.jpg" class="img1" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/streetsliderimg2.jpg" class="img2" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/streetsliderimg3.jpg" class="img3" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/streetsliderimg4.jpg" class="img4" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/streetsliderimg5.jpg" class="img5" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/streetsliderimg1.jpg" class="img6" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>


            <div class="content4">
                <!-- <a href="https://chowdhrain.com/blogs/news/significance-of-traditional-indian-sarees" target="_blank"><h1 class="content4_title">INDIAN CULTURAL ICON: THE SAREE</h1></a> -->
                <div class="content4image">
                    
                    <img src="images/streetimg4vid.gif" alt="">

                    <a href="https://www.vogue.com/article/transportation-methods-in-street-style" target="_blank">
                        <p class="content4content">Here’s the Most Stylish and Sustainable<br> Way to Travel this Summer
                        </p>
                    </a>
                    <p class="content4subcontent">BY IRENE KIM</p>
                </div>
            </div>

            <div class="content5">
                <div class="content5title">
                    <a href="https://www.harpersbazaar.com/fashion/street-style/g5973/gigi-hadid-style/" target="_blank">
                        <h1>Gigi Hadid's Bombshell Style</h1>
                    </a>
                </div>
                <div class="content5content">

                    <p>Gigi Hadid has quickly become America's sweetheart of the<br> modeling world—with her
                        California-girl good looks and sunny<br> disposition—but her style says bona fide bombshell.
                        Hadid<br> knows how to dress her curves—from midriff-baring two-pieces<br> to curve-hugging
                        dresses and plunging necklines.
                    </p>
                </div>
                <div class="content5image">
                    <a href="https://www.harpersbazaar.com/fashion/street-style/g5973/gigi-hadid-style/" target="_blank"><img
                            src="images/streetimg5.jpg" alt=""></a>
                </div>
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