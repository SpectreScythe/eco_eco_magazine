<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>eco eco | Sports</title>
    <link rel="stylesheet" href="../styles/globals.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/style.css" />

    <style>
      p {
        font-size: 23px;
      }
      </style>

      <?php
        header('Content-type: text/html; charset=utf-8');

        $servername = "localhost";
        $username = "username";
        $password = "password";
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        $sql = "CREATE DATABASE myDB";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
          } else {
            echo "Error creating database: " . $conn->error;
          }
    
        /*
        $imageSources = array("../images/all_sp_cover_2.jpg", "../images/all_sp_cover_3.jpg", "../images/all_sp_cover_4.jpg", "../images/all_sp_cover.jpg");
        $index = 0;
        foreach($imageSource as $img){
        while (true) {
            if ($index === count($imageSources)) {
                $index = 0;
            }
            $imageSource = $imageSources[$index];
            sleep(1);
            echo " <img id="image" src="../images/all_sp_cover.jpg" width="600" height="430">";
            
        }
    }

        $conn->close();
*/
      ?>

</head>
<body>
<div class="nav">
    <ul>
        <a href="./home.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"
                      style="fill: #cccccc"/>
            </svg>
            <li>Home</li>
        </a>
        <a href="./fashion.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3L628.5 127.4c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0h12.6z"
                      style="fill: #cccccc"/>
            </svg>
            <li>Fashion</li>
        </a>
        <a href="./sports.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M86.6 64l85.2 85.2C194.5 121.7 208 86.4 208 48c0-14.7-2-28.9-5.7-42.4C158.6 15 119 35.5 86.6 64zM64 86.6C35.5 119 15 158.6 5.6 202.3C19.1 206 33.3 208 48 208c38.4 0 73.7-13.5 101.3-36.1L64 86.6zM256 0c-7.3 0-14.6 .3-21.8 .9C238 16 240 31.8 240 48c0 47.3-17.1 90.5-45.4 124L256 233.4 425.4 64C380.2 24.2 320.9 0 256 0zM48 240c-16.2 0-32-2-47.1-5.8C.3 241.4 0 248.7 0 256c0 64.9 24.2 124.2 64 169.4L233.4 256 172 194.6C138.5 222.9 95.3 240 48 240zm463.1 37.8c.6-7.2 .9-14.5 .9-21.8c0-64.9-24.2-124.2-64-169.4L278.6 256 340 317.4c33.4-28.3 76.7-45.4 124-45.4c16.2 0 32 2 47.1 5.8zm-4.7 31.9C492.9 306 478.7 304 464 304c-38.4 0-73.7 13.5-101.3 36.1L448 425.4c28.5-32.3 49.1-71.9 58.4-115.7zM340.1 362.7C317.5 390.3 304 425.6 304 464c0 14.7 2 28.9 5.7 42.4C353.4 497 393 476.5 425.4 448l-85.2-85.2zM317.4 340L256 278.6 86.6 448c45.1 39.8 104.4 64 169.4 64c7.3 0 14.6-.3 21.8-.9C274 496 272 480.2 272 464c0-47.3 17.1-90.5 45.4-124z"
                      style="fill: #cccccc"/>
            </svg>
            <li>Sports</li>
        </a>
        <a href="./entertainment.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M64 64V352H576V64H64zM0 64C0 28.7 28.7 0 64 0H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM128 448H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H128c-17.7 0-32-14.3-32-32s14.3-32 32-32z"
                      style="fill: #cccccc"/>
            </svg>
            <li>Entertainment</li>
        </a>
        <a href="./games.php">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z"
                      style="fill: #cccccc"/>
            </svg>
            <li>Games</li>
        </a>
    </ul>
    <!--    <ul>-->
    <!--        <a href="">-->
    <!--            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">-->
    <!--                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
    -->
    <!--                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"-->
    <!--                      style="fill: #cccccc"/>-->
    <!--            </svg>-->
    <!--            <li>Account</li>-->
    <!--        </a>-->
    <!--    </ul>-->
</div>

<main><br>
      <div class="top">
        <div class="top_content">
          <h1>Welcome to the Sports section</h1>
          <h4>All the news about the world of sport in one place.</h4>
        </div>
        <div class="top">
          <img id="image" src="../images/all_sp_cover.jpg" width="600" height="430">
        </div>
      </div>

      <a href="sub_pgs/bumrah.html">
        <div class="box">
      <div class="card">
        <div class="card_content">
          <h2>Everyone else's expectations are their problems, not mine: Jasprit Bumrah</h2>
          <p>
            On Wednesday, the 29-year-old, who is making a return from a recurring back injury was seen bowling without any discomfort in his action - with no drop in his pace.
          </p>
          <div class="status">
            <p>July 11 2023</p>
          </div>
        </div>
        <img src="../images/bumrah.jpg" alt="bumrah" width="520" height="460"/>
      </div>
    </div>
    </a>
    <hr class="new1">
    
    <div class="card_container">
      <a href="sub_pgs/messi.html">
        <div class="box">
          <div class="v-card">
            <div class="card_content">
              <h2>Lionel Messi makes shortlist for UEFA award as best player last season alongside Kevin De Bruyne and Erling Haaland</h2>
              <p>
               Messi won the UEFA award twice in its 12-year history, both in years when Barcelona was the European champion.
              </p>
              <div class="status">
                <p>September 2 2023</p>
              </div>
            </div>
            <img src="../images/messi.jpg" alt="messi" />
        </div>
      </div>
      </a>

        <a href="sub_pgs/chess.html">
          <div class="box">
          <div class="v-card">
            <div class="card_content">
              <h2>Chess World Cup 2023 Live Updates: Praggnanandhaa wins 1st game, but Arjun Erigaisi levels in must-win game</h2>
              <p>
                Arjun Erigaisi vs Praggnanandhaa Live, Chess World Cup 2023: The winner of the Erigaise-Praggnanandhaa clash will play Fabiano Caruana in the semifinal.
              </p>
              <div class="status">
                <p>August 17 2023</p>
              </div>
            </div>
            <img src="../images/chess.jpeg" alt="chess" />
        </div>
      </div>
      </a>

        <a href="sub_pgs/tennis.html">
          <div class="box">
          <div class="v-card">
            <div class="card_content">
              <h2>Novak Djokovic missed playing big US events and excited to be back</h2>
              <p>
                The 23-times Grand Slam champion was not allowed to compete in the U.S. last year and earlier this year over his refusal to take a COVID-19 vaccine,
                but returned after the U.S. government relaxed its rules for unvaccinated foreign travellers in May
              </p>
              <div class="status">
                <p>8 Feb 2023</p>
              </div>
            </div>
            <img src="../images/tennis.jpg" alt="tennis" />
          </div>
      </div>
    </div>
    </a>
    <hr class="new1">

<a href="sub_pgs/ronaldo.html">
  <div class="box">
      <div class="card">
        <div class="card_content">
          <h2>'Everybody called Cristiano Ronaldo crazy but…': Neymar</h2>
          <p>
            Cristiano Ronaldo is responsible for transforming the Saudi Pro League, said Neymar in his first interview after the transfer to Al Hilal.
          </p>
          <div class="status">
            <p>29 april 2023</p>
          </div>
        </div>
        <img src="../images/ronaldo.png" width="520" height="460" alt="Ronaldo" />
      </div>
    </div>
    </a>
    </main>

</body>
</html>
