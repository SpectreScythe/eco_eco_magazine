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
    <title>eventsmain</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleevents.css">
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
            <h1 class="cultitle">Events</h1>
            <ul>
                <a href="./new.php" >
                    <li><i class="fa fa-arrow-left" style="font-size:24px;color:white"></i>
                </a>
            </ul>
        </nav>
    </header>
    <main>

        <div class="content">
            <h1>Fashion Events</h1>
            <h4>The Largest Fashion Events in the World that you must know of!
            </h4>
        </div>
        <div class="contentimg1">
            <a href="https://fashinnovation.nyc/the-largest-fashion-events-in-the-world-that-you-must-know-of/"
                target="_blank"><img src="images/eventimg1a.jpg" alt="img"></a>
        </div>



        <div class="content2">
            <div class="content2image">
                <a href="https://thesocietyfashionweek.com/fashion-week-dates/new-york-september/" target="_blank">
                    <h2>NEW YORK FASHION WEEK</h2>
                </a>
                <p class="content2content">New York Fashion Week takes place twice a year:<br> in February and
                    September, in
                    our beloved New York<br> City. The event is considered to be one of the four<br> major fashion weeks
                    in the
                    world. It goes next to<br> London, Milan, and Paris, also known as the “Big Four”
                </p>
                <a href="https://thesocietyfashionweek.com/fashion-week-dates/new-york-september/" target="_blank"><img
                        src="images/eventimg2.webp" alt=""></a>




            </div>
        </div>

        <a href="https://edition.cnn.com/style/article/london-fashion-week-fall-winter-2023-highlights/index.html"
            target="_blank">
            <h1 class="content3_title">LONDON FASHION WEEK</h1>
        </a>
        <div class="imgslider">
            <div class="container imgsliderCon" onload="showSlides(0)">
                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/eventslider1.webp" class="img1" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/evenslider5.jpg" class="img2" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/eventslider3.jpg" class="img3" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/eventslider4.jpeg" class="img4" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/eventslider2.jpg" class="img5" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="images/eventslidertheme.jpg" class="img6" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>


            <div class="content4">
                <!-- <a href="https://chowdhrain.com/blogs/news/significance-of-traditional-indian-sarees" target="_blank"><h1 class="content4_title">INDIAN CULTURAL ICON: THE SAREE</h1></a> -->
                <div class="content4image">

                    <img src="images/eventimg4.gif" alt="">

                    <a href="https://www.elle.com/culture/celebrities/a43750928/dua-lipa-dress-red-carpet-met-gala-2023/"
                        target="_blank">
                        <p class="content4content">MET GALA
                        </p>
                    </a>
                    <p class="content4subcontent">Dua Lipa Dressed Like a Princess in a Dreamy White Gown at the 2023
                        Met Gala</p>
                </div>
            </div>

            <div class="content5">
                <div class="content5title">
                    <a href="https://www.fhcm.paris/en/paris-fashion-week" target="_blank">
                        <h1>PARIS FASHION WEEK</h1>
                    </a>
                </div>
                <div class="content5content">

                    <p>The shows in New York, London, and Milan have come<br> and gone and the fashion world has rolled into
                        Paris for<br> the final leg for the Spring/Summer 2023 shows. Here, our<br> favorite moments, from a
                        Catherine De'Medici-inspired<br> collection at Dior, to a comeback of the capuche at Saint<br> Laurent,
                        at Paris Fashion Week.
                    </p>
                </div>
                <div class="content5image">
                    <a href="https://www.townandcountrymag.com/style/g41450371/paris-fashion-week-spring-summer-2023/"
                        target="_blank"><img src="images/eventimg6.jpg" alt=""></a>
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