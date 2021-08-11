<?php

include 'index3.php';

  $bg = array( 'road-landscape-mountains-67517.jpg','a.jpg','b.jpg', 'w.png', 'person.jpg','l.jpg'); // array of filenames for bg images
  
  $i = rand(0, count($bg)-1); // generate random number size of the array
    

    $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen

?>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
    body,h1 {font-family: "Raleway", sans-serif}
    body, html {font-size: 16px;
        font-size: 4vw;
        color: black;
        -webkit-text-fill-color: white; /* Will override color (regardless of order) */
        -webkit-text-stroke-width: 1.5px;
        -webkit-text-stroke-color: black;
    }
    div .w3-jumbo{
        text-align:center;
        font-size: 5.5vw;
    }
    body{
        background: url(<?php echo $selectedBg; ?>) no-repeat;
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }
    .bgimg {
      /* background-image: url(/BG) no-repeat; */

        /*background-image: url(/maxresdefault.jpg); */
        min-height: 100%;
        background-position: center;
        background-size: cover;

    }
    .bgimg:before{
        -webkit-filter: blur(5px);
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        -ms-filter: blur(5px);
        filter: blur(5px);

    }

    .btn {
        width: 10px;
        height: 10px;
        background: #000000;
        background-image: -webkit-linear-gradient(top, #fafffb, #eaeaea);
        background-image: -moz-linear-gradient(top, #ffffff, #dfdfdf);
        background-image: -ms-linear-gradient(top, #ffffff, #e6e9eb);
        background-image: -o-linear-gradient(top, #fefefe, #d8d8d8);
        background-image: linear-gradient(to bottom, #ffffff, #e4e4e4);

        border-radius: 28px;
        font-family: "Times New Roman";
        color: #000000;
        font-size: 20px;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
    }

    .btn:hover {
        background: #ffffff;
        background-image: -webkit-linear-gradient(top, #ffffff, #b1b1b1);
        background-image: -moz-linear-gradient(top, #ffffff, #b1b1b1);
        background-image: -ms-linear-gradient(top, #ffffff, #b1b1b1);
        background-image: -o-linear-gradient(top, #ffffff, #b1b1b1);
        background-image: linear-gradient(to bottom, #ffffff, #b1b1b1);
        text-decoration: none;
    }
    .footer {
        font-size: small;
        position: fixed;
        left: 0;
        color: white;
        bottom: 0;
        width: 100%;
        color: white;
        text-align: center;
    }
</style>
<center>
<div class="footer">
    <p> © Created by: Gourav </p>
</div>
<body>
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">

    <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top"><?php
            echo $Statement;
            ?></h1>

        <p  class="w3-center"> <a href='generate3.php' class='btn'>NEW QUOTE</a> </p>
        <p  class="w3-center"> <a href='https://twitter.com/?lang=en-in' class='btn'>TWITTER</a>
            <a href='https://www.facebook.com/' class='btn'>FACEBOOK</a>
            <a href='https://www.instagram.com/' class='btn'>INSTAGRAM</a>
         </p>

    </div>
</div>
</center>

</body>

</html>

