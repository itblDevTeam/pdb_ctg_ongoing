<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="./image/icon.ico" type="image/ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;


        }

        html {
            font-size: 62.5%;
            margin: 0;
            padding: 0;
        }

        .header {
            max-width: 80rem;
            /* height: 50rem; */
            /* margin: 0 auto; */
            margin: 5rem auto;
            position: relative;
            box-shadow: 0 10px 30px 0px rgba(0, 0, 0, 0.1);


        }

        p {
            font-size: 1.3rem;
            text-align: justify;
            text-justify: inter-word;
        }

        /* .header {
      text-transform: uppercase;
      text-align: center;
      
      
      line-height: 48px;
      padding-bottom: 2rem;
      
      background: linear-gradient(to right,  #f4524d 0%,  #5543ca 100%); 
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
  } */

        .lbl_title {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
        }

        /* .title{
		 text-align: center; 
			height: 15%;
			background: -webkit-linear-gradient(left, #0072ff, #8811c5);
			color: #fff;
			font-weight: bold;
			line-height: 10px;
		}  */

        .logo {
            float: right;
        }

        .note {
            text-align: center;
            height: 15%;
            background: -webkit-linear-gradient(left, #0072ff, #8811c5);
            color: #fff;
            font-weight: bold;
            line-height: 80px;
        }

        .sub {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow-x: hidden;
        }



        .forward {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            text-decoration: none;
            text-transform: uppercase;
            /* color: rgba(255, 255, 255, 0.4); */
            color: #262c37;
            /* background: #262c37; */
            background: #09790e;
            letter-spacing: 2px;
            font-size: 16px;
            transition: 0.5s;
        }

        .backoword {
            position: relative;
            display: inline-block;
            padding: 10px 30px;
            text-decoration: none;
            text-transform: uppercase;
            /* color: rgba(255, 255, 255, 0.4); */
            /* color: rgba(255, 255, 255, 0.4); */
            color: #262c37;
            /* background: #262c37; */
            background: #fd1d1d;
            letter-spacing: 2px;
            font-size: 16px;
            transition: 0.5s;
        }

        .clearfix {
            overflow: auto;
        }

        a:hover {
            color: rgba(255, 255, 255, 1);
            text-decoration: none;
        }

        a span {
            display: block;
            position: absolute;
            background: #262c37;
            ;
            /* background: #2894ff; */
            border: 1px solid;
        }

        a span:nth-child(1) {
            left: 0;
            bottom: 0;
            width: 1px;
            height: 100%;
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.5s;
        }

        a:hover span:nth-child(1) {
            transform: scaleY(1);
            transform-origin: bottom;
            transition: transform 0.5s;
        }

        a span:nth-child(2) {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 1px;
            transform: scalex(0);
            transform-origin: right;
            transition: transform 0.5s;
        }

        a:hover span:nth-child(2) {
            transform: scaleY(1);
            transform-origin: left;
            transition: transform 0.5s;
        }

        a span:nth-child(3) {
            right: 0;
            bottom: 0;
            width: 1px;
            height: 100%;
            transform: scaley(0);
            transform-origin: top;
            transition: transform 0.5s;
        }

        a:hover span:nth-child(3) {
            transform: scaleY(1);
            transform-origin: bottom;
            transition: transform 0.5s;
        }

        a span:nth-child(4) {
            left: 0;
            top: 0;
            width: 100%;
            height: 1px;
            transform: scalex(0);
            transform-origin: right;
            transition: transform 0.5s;
            transition-delay: 0.5s;
        }

        a:hover span:nth-child(4) {
            transform: scaleY(1);
            transform-origin: left;
            transition: transform 0.5s;
            transition-delay: 0.5s;

        }

        @media only screen and (max-width: 770px) {
            .logo {
                float: none !important;
            }
        }
    </style>

</head>

<body>

    <!-- header starts  -->
    <?php include "header.php" ?>
    <!-- header ends  -->






    <!-- report starts  -->
    <section class="header">
        <h1 class="lbl_title m-3"><u> রিপোর্ট </u></h1>

        <div class="container">

            <div class="card">
                <div class="card-header">
                    <h3 style="text-align: justify; text-justify: inter-word;"> বিষয়ঃ বিক্রয় ও বিতরন বিভাগ-স্টেডিয়াম, বিউবো, চট্টগ্রাম এর অধীন ১১ কেজি এইচ-০৪ ফিডারের আওতাধীন মোঃ নূরুল আনোয়ার, পিতাঃ মোঃ নূরুল ইসলাম এর নবনির্মিত ভবন হোল্ডিং নংঃ-১৪, বাটালী রোড, কোতয়ালী, চট্টগ্রাম এর অনূকুলে ১২০ কিলোওয়াট লোড অনুমোদন সহ নতুন মধ্যম চাপ সংযোগ প্রসঙ্গে।</h3>
                </div>


                <div class="card-body">

                    <?php  include "r_p1.php"  ?>

                </div>

            </div>

            <div class="card-footer">
                <div class="btn_div">
                    <a href="#" class="backoword">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <b>Backward</b>
                    </a>
                    <a href="#" style="float:right;" class="forward">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <b>Forward</b>
                    </a>
                </div>

            </div>
        </div>

        
    </section>
    <!-- report ends  -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</body>

</html>