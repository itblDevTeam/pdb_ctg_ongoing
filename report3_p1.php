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

    <div class="note">
        <!-- <p>This is a simpleRegister Form made using Boostrap.</p> -->

        <legend>
            <center>



                <div class="row">

                    <div class="col-md-2" style="padding-right: 0!important;">
                        <img class=" mt-2 mb-2 logo" src="./image/Logo.png" alt="BPDB" height="80px" width="80px">
                    </div>

                    <div class="col-md-8 mt-4">
                        <center>
                            <h1><b>বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ড</b></h1>
                            <h4>বিক্রয় ও বিতরণ বিভাগ- স্টেডিয়াম, বিউবো, চট্টগ্রাম ।</h4>
                        </center>
                    </div>
                    <div class="col-md-2"></div>

                </div>
            </center>
        </legend>
    </div>
    <!-- header ends  -->






    <!-- report starts  -->
    <section class="header">
        <h1 class="lbl_title m-3"><u> নোটশীট </u></h1>

        <div class="container">

            <div class="card">
                <div class="card-header">
                    <h3 style="text-align: justify; text-justify: inter-word;"> বিষয়ঃ বিক্রয় ও বিতরন বিভাগ-স্টেডিয়াম, বিউবো, চট্টগ্রাম এর অধীন ১১ কেজি এইচ-০৪ ফিডারের আওতাধীন মোঃ নূরুল আনোয়ার, পিতাঃ মোঃ নূরুল ইসলাম এর নবনির্মিত ভবন হোল্ডিং নংঃ-১৪, বাটালী রোড, কোতয়ালী, চট্টগ্রাম এর অনূকুলে ১২০ কিলোওয়াট লোড অনুমোদন সহ নতুন মধ্যম চাপ সংযোগ প্রসঙ্গে।</h3>
                </div>
                <div class="card-body">

                    <p>
                        ১. উপর্যুক্ত বিষয়ে সদয় অবগতির জন্য জানানো যাইতেছে যে, <span name="i1" id="i1" style="color: red ;">মোঃ নুরুল আলম, পিতাঃ মোঃ নুরুল ইসলাম,</span> তাহার নবনির্মিত ভবন, <span name="i2" id="i2" style="color: red ;">হোল্ডিং নং-১৪, বাটালী রোড, কোতয়ালী, চট্টগ্রাম</span> এর অনুকূলে <span name="i3" id="i3" style="color: red ;"> ১২০ (একশত বিশ) কিঃওঃ</span> নতুন মধ্যম চাপ বিদ্যুৎ সংযোগের জন্য আবেদন করিয়াছেন।
                    </p>

                    <p> ২. আবেদনকারী তাহার ভবনে ১১/০.৪ কেভি <span name="i4" id="i4" style="color: red ;">১৫০ কেভিএ উপকেন্দ্র,</span> এলটি সুইচ গিয়ার ও পিএফআই প্ল্যান্ট সহ আনুসাঙ্গিক যন্ত্রপাতি স্থাপন করিয়াছেন। আবেদন পত্রের সাথে একক লাইন নকশা ও যন্ত্রপাতির টেকনিকেল স্পেসিফিকেশন/টেষ্ট রিপোর্ট এবং চট্টগ্রাম উন্নয়ন কর্তৃপক্ষের গৃহ নির্মান অনুমতি পত্র ও অন্যান্য প্রয়োজনীয় দলিলাদি দাখিল করিয়াছেন।</p>

                    <p> ৩. সরজমিনে পরিদর্শন পূর্বক দেখা যায় নতুন সংযোগের জন্য আবেদনকৃত ভবনটি <span name="i5" id="i5" style="color: red ;">৩৩/১১ কেভি ষ্টেডিয়াম </span>উপকেন্দ্রের <span name="i6" id="i6" style="color: red ;">১১ কেভি ফিডার নং- এইচ/০৪</span> এর আওতায় অবস্থিত। উল্লেখিত ১১ কেভি ফিডারের ভোল্টেজ ড্রপ ও ফল্ট লেভেল ক্যালকুলেশন পূর্বক পর্যালোচনা করিয়া দেখা যায় যে, উক্ত ভবনে বিদ্যুৎ সংযোগ প্রদান করিলে ফিডার ওভার লোডেড হইবে না। <span name="i7" id="i7" style="color: red ;">নিন্মে স্টেডিয়াম এইচ/০৪</span> ফিডারের কারিগরী তথ্যাবলী প্রদত্ত হইলঃ

                        <div class="sub">
                            <dl>
                                <dt class="mb-2">উপকেন্দ্রের নামঃ <span name="i8" id="i8" style="color: red ;">৩৩/১১ কেভি স্টেডিয়াম উপকেন্দ্র।</dt>
                                <dd class="ml-4">&#9745;উপকেন্দ্রের ক্ষমতা ঃ <span name="i9" id="i9" style="color: red ;">৩ও ১৬/২০ এমভিএ।</span></dd>
                                <dd class="ml-4">&#x2611;ব্রেকার ক্ষমতা &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ঃ <span name="i10" id="i10" style="color: red ;">৬৩০ এ্যাম্পস।</span></dd>
                                <dd class="ml-4">&#9745;ব্রেকার সিটি রেশিও ঃ <span name="i11" id="i11" style="color: red ;">৩০০/৫ এ্যাম্পস।</span></dd>
                                <dd class="ml-4">&#9745;ফিডারের সর্বোচ্চ লোড ঃ<span name="i12" id="i12" style="color: red ;"> ৪.০ মেঃওঃ।</span></dd>
                                <dd class="ml-4">&#9745;গ্রাহক প্রান্তের ভোল্টেজ ড্রপঃ<span name="i13" id="i13" style="color: red ;"> ২.৬৮%</span></dd>
                                <dd class="ml-4">&#9745;ফিডারের শেষ প্রান্তের ভোল্টেজ ড্রপঃ <span name="i14" id="i14" style="color: red ;">২.৯৮%</span></span></dd>

                            </dl>
                        </div>

                    </p>


                    <p>
                        ৪. এমতাবস্থায় সরকারী সিদ্ধান্ত মোতাবেক এয়ারকুলার ব্যবহার না করা নিশ্চিতকরনসহ নতুন সংযোগ প্রদানের সকল নিয়মাবলী ও শর্তাদি পুরন সাপেক্ষে উল্লেখিত ভবন, <span name="i15" id="i15" style="color: red ;">হোল্ডিং নং-১৪, বাটালী রোড, কোতয়ালী, চট্টগ্রাম</span> এর অনুকুলে <span name="i16" id="i16" style="color: red ;">১২০ (একশত বিশ) কিঃওঃ</span> লোডের মধ্যম চাপ সংযোগের সদয় অনুমোদনের পরবর্তী প্রয়োজনীয় ব্যবস্থা গ্রহনের জন্য পেশ করা হইল। সংযুক্তিঃ

                        <div class="sub">
                            <ul style="list-style: none;">
                                <li>ক) গ্রাহকের আবেদনপত্র।</li>
                                <li>খ) আবেদনপত্রের সঙ্গে প্রাপ্ত সংযুক্তির বিবরনী।</li>
                                <li>গ) ফিডারের একক লাইন নকশা।</li>
                                <li>ঘ) ভোল্টেজ ড্রপ ও ফল্ট লেভেল ক্যালকুলেশন।</li>
                                <li>ঙ) উপকেন্দ্রের সিঙ্গেল লাইন ডায়াগ্রাম।</li>
                                <li>চ) স্থাপিত যন্ত্রপাতির টেকনিক্যাল স্পেসিফিকেশন।</li>
                            </ul>
                        </div>


                    </p>

                    <div class="sign clearfix">

                        <div class="sign1" style="float: left;">

                            <p>
                                <h4 style="display: inline-block;">সহকারী প্রকৌশলী </h4><br>
                                বিবিবি স্টেডিয়াম <br>
                                বিউবো, চট্টগ্রাম।

                            </p>

                        </div>

                        <div class="sign2" style="float: right;">
                            <p>
                                <h4 style="display: inline-block;">নির্বাহী প্রকৌশলী </h4><br>
                                বিবিবি স্টেডিয়াম <br>
                                বিউবো, চট্টগ্রাম।
                            </p>

                        </div>






                    </div>


                    <p>
                        ৫. অনুগ্রহপূর্বক টোকার অনুচ্ছেদ ১ হইতে ৪ পর্যন্ত দেখা যাইতে পারে। গ্রাহকের আবেদনপত্র ও দাখিলকৃত কাগজপত্রের আলোকে নতুন সংযোগ প্রদানে সরকার কর্তৃক আরোপিত শর্তাদি পূরন সাপেক্ষে ভবন,<span name="i17" id="i17" style="color: red ;"> হোল্ডিং নং-১৪, বাটালী রোড, কোতয়ালী, চট্টগ্রাম এর অনুকুলে ১২০ (একশত বিশ) কিঃওঃ</span> লোডের নতুন সংযোগের অনুমোদনের পরবর্তী ব্যবস্থা গ্রহনের নিমিত্তে সদয় পেশ করা হইল।

                    </p>

                    <div class="sign clearfix">

                        <div class="sign1" style="float: left;">

                            <p>
                                <h4 style="display: inline-block;">সহকারী প্রকৌশলী </h4><br>
                                বিবিবি স্টেডিয়াম <br>
                                বিউবো, চট্টগ্রাম।

                            </p>

                        </div>

                        <div class="sign2" style="float: right;">
                            <p>
                                <h4 style="display: inline-block;">তত্ত্বাবধায়ক প্রকৌশলী </h4><br>
                                পঃ ও সঃ সার্কেল চট্টমেট্রো পূর্ব <br>
                                বিউবো, চট্টগ্রাম।
                            </p>

                        </div>






                    </div>



                    <!-- page2 starts  -->

                    <p>
                        ৬. অনুগ্রহ পূর্বক উপর্যুক্ত অনুচ্ছেদ সমুহ দেখা যেতে পারে । বিক্রয় ও বিতরন বিভাগ-স্টেডিয়াম দপ্তরের আওতাধীন এলাকার মোঃ নুরুল আলম, পিতাঃ মোঃ নুরুল ইসলাম, তাহার নবনির্মিত ভবন, হোল্ডিং নং-১৪, বাটালী রোড, কোতয়ালী, চট্টগ্রাম এর অনুকূলে ১২০ (একশত বিশ) কিঃওঃ লোড অনুমোদনসহ নতুন সংযোগের প্রস্তাব করা হইয়াছে। গ্রাহক আঙ্গিনায় আনুষাঙ্গিক যন্ত্রপাতি সহ ১১/০.৪ কেভি, ১৫০ কেভিএ ট্রান্সফরমার স্থাপনের কাজ প্রক্রিয়াধীন।

                    </p>

                    <p>
                        ৭. বর্ণিত গ্রাহককে <span name="i18" id="i18" style="color: red ;">৩৩/১১ স্টেডিয়াম উপকেন্দ্রের </span> আওতাধীন ১১ কেভি ফিডার নং-<span name="i19" id="i19" style="color: red ;">এইচ ০৪</span> হইতে সংযোগ প্রদানের প্রস্তাব করা হইয়াছে। <span name="i20" id="i20" style="color: red ;">স্টেডিয়াম ৩৩/১১ কেভি </span>উপকেন্দ্রের সর্বোচ্চ লোড <span name="i21" id="i21" style="color: red ;">৩২.০ মেঃওঃ</span> এবং<span name="i22" id="i21" style="color: red ;"> ১১ কেভি ফিডার নং-এইচ-০৪</span> এর সর্বোচ্চ লোড<span name="i23" id="i23" style="color: red ;"> ৪.০ মেঃওঃ</span>। নথিতে সংযুক্ত কারিগরী তথ্যাদিও আলোকে বর্ণিত গ্রাহককে <span name="i24" id="i24" style="color: red ;">১২০(একশত বিশ) কিঃওঃ</span> লোডসহ মধ্যম চাপ নতুন সংযোগ দেওয়া যাইতে পারে। তবে বিদ্যুৎ, জ্বালানী এবং খনিজ সম্পদ মন্ত্রনালয়, বিদ্যুৎ বিভাগ এর সুত্র নং-২৭.০০.০০০০.০৫২.৩১.৩২৭.২০১১-৩৩০ তাং- ০৪/০৮/২০১৫ ইং এর নির্দেশনা সমুহ অনুসরন করতঃ নতুন বিদ্যুৎ সংযোগের ক্ষেত্রে গ্রাহককে সোলার প্যানেল স্থাপন করিতে হইবে। প্রস্তাবিত স্থানে পূর্বেও কোন গ্রাহকের সংযোগ থাকিলে তার হাল নাগাদ বকেয়া আদায় পূর্বক যথানিয়মে স্থায়ী বিচ্ছিন্নকরনের ব্যবস্থা নিশ্চিত করিতে হইবে।


                    </p>

                    <p>
                        ৮. এমতাবস্থায় নির্বাহী প্রকৌশলী, <span name="i25" id="i25" style="color: red ;">বিবিবি-স্টেডিয়াম</span> এর প্রস্তাব, সুপারিশ ও দাখিলকৃত নথিপত্রের ভিত্তিতে প্রস্তাবিত গ্রাহককে বোর্ডের প্রচলিত ট্যারিফ এর বিধি বিধান ও জারীকৃত নিয়মাবলী প্রতিপালন সাপেক্ষে মধ্যশ চাপ গ্রাহক হিসাবে<span name="i26" id="i26" style="color: red ;"> ১২০(একশত বিশ) কিঃওঃ</span> লোড অনুমোদনের জন্য নথিটি প্রধান প্রকৌশলী, বিতরন দক্ষিনাঞ্চল, বিউবো, চট্টগ্রাম মহোদয় বরাবর প্রেরণ করা যাইতে পারে।<br>

                        সদয় সমীপে পেশ করা হইল।
                    </p>

                    <div class="sign clearfix">

                        <div class="sign1" style="float: left;">

                            <p>
                                <h4 style="display: inline-block;">সহকারী প্রকৌশলী </h4><br>
                                পঃ ও সঃ সার্কেল চট্টমেট্রো (পূর্ব) <br>
                                বিউবো, চট্টগ্রাম।

                            </p>

                        </div>

                        <div class="sign2" style="float: right;">
                            <p>
                                <h4 style="display: inline-block;">তত্ত্বাবধায়ক প্রকৌশলী </h4><br>
                                পঃ ও সঃ সার্কেল চট্টমেট্রো (পূর্ব) <br>
                                বিউবো, চট্টগ্রাম।
                            </p>

                        </div>






                    </div>

                    <!-- page2 ends  -->


                    <!-- page3 starts  -->
                    <p>
                        ৯. টোকা পত্রের পূর্ববর্তী অনুচ্ছেদ সমুহ সদয় দ্রষ্টব্য। নথিখানা বিক্রয় ও বিতরণ বিভাগ স্টেডিয়াম, বিউবো, চট্টগ্রাম এর আওতাধীন গ্রাহক <span name="i27" id="i27" style="color: red ;">মোঃ নুরুল আলম, পিতাঃ মোঃ নুরুল ইসলাম, তাহার নবনির্মিত ভবন, হোল্ডিং নং-১৪, বাটালী রোড, কোতয়ালী, চট্টগ্রাম</span> এর অনুকূলে ১১কেভি ভোল্টেজ লেভেলে <span name="i28" id="i28" style="color: red ;">১২০.০ (একশত বিশ) কিঃওঃ</span> লোডের অনুমোদন ও মধ্যম চাপ গ্রাহক হিসাবে বিদ্যুৎ সংযোগের আবেদনঅনুমোদন সংক্রান্ত।
                    </p>

                    <p>
                        ১০. সংশ্লিষ্ট দপ্তর ন্টেডিয়াম ৩৩/১১ কেভি উপকেন্দ্রের ১১ কেভি ফিডার নং-এইচ-০৪ হইতে গ্রাহক সংযোগ প্রদানের সুপারিশ সহ উপকেন্দ্রের তথ্য, ফিডারের একক নকশা, ভোল্টেজ ড্রপ ও ফল্ট লেভেলের ক্যালকুলেশন শীট ইত্যাদি সংযুক্ত করা হইয়াছে। সংশ্লিষ্ট দপ্তর কর্তৃক প্রস্তুতকৃত ভোল্টেজ ড্রপ ক্যালকুলেশন সীট অনুযায়ী সংযোগ প্রদানের পর গ্রাহক ও ফিডারের শেষ প্রান্তে ভোল্টেজ ড্রপের পরিমান হবে যথাক্রমে ২.৬৮% ও ২.৯৮%। যা বিউবো’র গ্রহনযোগ্য মাত্রার মধ্যে আছে।

                    </p>

                    <p>
                        ১১. গ্রাহক তার উপকেন্দ্রে স্থাপিত অথবা স্থাপিতব্য <span name="i29" id="i29" style="color: red ;">১১/০৪ কেভি, ১৫০.০ কেভিএ</span> ক্ষমতার ট্রান্সফরমার, ৭৫.০ কিলোভার এলটি অটো পিএফআই প্ল্যান্ট ইত্যাদিও টেকনিক্যাল ডকুমেন্ট সরবরাহকারী প্রতিষ্ঠান পাওয়ারম্যান বাংলাদেশ লিমিটেড হইতে জমা প্রদান করেছেন।

                    </p>

                    <p>
                        ১২. সংশ্লিষ্ট দপ্তর কর্তৃক প্রদত্ত তথ্যাদি, নির্বাহী প্রকৌশলী ও তত্ত¡বধায়ক প্রকৌশলী সুপারিশ ও কারিগরী প্যারামিটারস গুলো বিবেচনায় বিক্রয় ও বিতরণ বিভাগ স্টেডিয়াম, চট্টগ্রাম এর আওতাধীন <span name="i30" id="i30" style="color: red ;">“মোঃ নূরুল আনোয়ার”</span>-এর অনুকুলে <span name="i31" id="i31" style="color: red ;">১২০.০ (একশত বিশ)</span> কিলোওয়াট</span> লোডে ১১
                    </p>


                    <p>
                        ১৩. গ্রাহক গনপ্রজাতন্ত্রী বাংলাদেশ সরকারের বৈদ্যুতিক উপদেষ্টা ও প্রধান বিদ্যুৎ পরিদর্শক এর সার্টিফিকেট প্রদান করেন নাই।

                    </p>

                    <p>
                        ১৪. মিটারিং ইউনিটের চাহিদা পত্র প্রেরণের পূর্বে গনপ্রজাতন্ত্রী বাংলাদেশ সরকারের বৈদ্যুতিক উপদেষ্টা ও প্রধান বিদ্যুৎ পরিদর্শক এর সার্টিফিকেট অবশ্যই জমা প্রদান করিতে হইবে।

                    </p>

                    <p>
                        ১৫. প্রযোজ্যক্ষেত্রে পরিবেশ অধিদপ্তর ও ফায়ার সার্ভিসের এর সার্টিফিকেট জমা প্রদান করিতে হইবে।

                    </p>

                    <p>
                        ১৬. অনুমোদিত লোডের জন্য জামানতের পাশাপাশি বিউবো’র স্মারক নং ৩০৮-বিউবো (সচি) উন্নয়ন-৯০, তারিখ-২৮/০১/২০১৬ইং মোতাবেক প্রয়োজন অনুযায়ী সিটি-পিটি মিটারের মূল্য সমেত একখানা বিল এবং বিউবো কর্তৃক সম্পাদনতব্য সকল কাজ সহ মিটারিং ইউনিট স্থাপন কাজের প্রাক্কলিত মূল্য গ্রাহককে পরিশোধ করিতে হইবে। প্রযোজ্য ক্ষেত্রে সিটি-পিটি ও মিটারের মূল্য এবং প্রাক্কলন বিলের যাচিত পরিশোধিত মূল কপি দাপ্তরিক ফাইলে সংরক্ষন করিতে হইবে।
                    </p>

                    <p>
                        ১৭. প্রযোজ্য ক্ষেত্রে সিটি-পিটি ও মিটারের মূল্য এবং প্রাক্কলন বিলের যাচিত পরিশোধিত মূল কপি এবং সকল সার্টিফিকেটের মূল কপি দাপ্তরিক ফাইলে সংরক্ষন করিতে হইবে।

                    </p>

                    <p>
                        ১৮. হালনাগাদ ট্যারিফ বিধি মোতাবেক ও জামানত বিউবো’র নির্ধারিত হিসাবে জমা প্রদান করিতে হইবে।
                    </p>

                    <p>
                        ১৯. সংযোগ প্রদানের সময় সংশ্লিষ্ট নির্বাহী প্রকৌশলী, এনার্জী অডিটিং ইউনিট বিভা, বিউবো, চট্টগ্রাম সহ মিটার, সিটি, পিটি পরীক্ষা টুইস্ট টাইট সিলিং কার্য্য সম্পাদন করিতে হইবে।

                    </p>

                    <p>
                        ২০. সংশ্লিষ্ট ফিডারের লোড ৫.০ মেঃওঃ এর মধ্যে সীমাবদ্ধ রাখিতে হইবে।

                    </p>

                    <p>
                        ২১. বিউবো’র বিধি-বিধান যথাযথভাবে অনুসরণ করিতে হইবে।
                    </p>

                    <p>
                        ২২. সংযোগ প্রদানের ক্ষেত্রে প্রযোজ্য ক্ষেত্রে চট্টগ্রাম উন্নয়ন কর্তৃপক্ষ / যথাযথ কর্তৃপক্ষ হইতে অক্যুপেন্সি সার্টিফিকেটের প্রাপ্তির বিষয়টি নিশ্চিত হয়ে সংযোগ প্রদান করিতে হইবে।

                    </p>

                    <p>
                        ২৩. সংযোগ প্রদানের পূর্বে সংশ্লিষ্ট বিভাগকে নিন্মবর্ণিত শর্তাবলী উল্লেখপূর্বক গ্রাহকের সাথে ৩০০/০০ টাকার নন-জুডিসিয়াল স্ট্যাম্পে একটি চুক্তিপত্র স্বাক্ষর করিতে হইবে এবং তা নোটারী পাবলিক দ্বারা সত্যায়িত হইতে হইবে।
                    </p>

                    <p>
                        ক) গ্রাহক বিদ্যুৎ আইন, বিউবো এর ট্যারিফ বিধি এবং সময়ে সময়ে জারীকৃত অন্যান্য নির্দেশাবলী মেনে চলতে বাধ্য থাকা।<br>
                        খ) গ্রাহকের ব্যবহার অনুমোদিত লোডের মধ্যে সীমাবদ্ধ থাকিতে হইবে। বিষয়টি নির্বাহী প্রকৌশলী নিশ্চিত করিবেন।<br>
                        গ) স্থাপিত মিটারের অপঃরাব ঊহবৎমু (শডয) এবং জবধপঃরাব ঊহবৎমু (শঠঅজয) রিডিং এর ভিত্তিতে চঋঈ চার্জ এর বিল প্রদানে বাধ্য থাকা।<br>
                        ঘ) সংযোগ সংক্রান্ত বিউবো তথা সরকারের জারীকৃত বিধি-বিধান যথাযথভাবে অনুসরণ করিতে হইবে।<br>
                        ঙ) গ্রাহক আঙ্গিনায় বিউবো স্থাপিত যন্ত্রপাতি নিারপত্তা গ্রাহক কর্তৃক নিশ্চিত করা। যন্ত্রপাতির কোন অনিষ্ট অথবা খোয়া গেলে তার ক্ষতিপূরণ প্রদান করা।<br>
                        চ) আবেদিত আঙ্গিনায় সংযোগ প্রদানে সরকারী কোন সংস্থা / আদালতের কোন বিধি নিষেধ থাকিলে উহা প্রতিপালন করিতে হইবে।<br>
                        ছ) বৈদ্যুতিক সংযোগ প্রদানের সময় সরকারের হাল নাগাদ বিধি-বিধান অনুসরণ করিতে হইবে।<br>
                        জ) বিউবো এর প্রয়োজনে পিক আওয়ার বিধি নিষেধ এবং লোড শেডিং মেনে চলতে বাধ্য থাকা। লোড শেডিং এবং বিদ্যুৎ বিভ্রাটজনিত কারনে কোন ক্ষতিপূরণ দাবী না করা।<br>
                        ঝ) গ্রাহক কর্তৃক গ্রাহক প্রান্তে পাওয়ার ফ্যাক্টর কমপক্ষে ০.৯৫ (ল্যাগ) অবশ্যই বজায় রাখা।<br>
                        ঞ) বিউবোর অনুমোদন ব্যতিত গ্রাহক উপকেন্দ্রের কোন পরিবর্তন বা পরিবর্ধন না করা।<br>
                        ট) গ্রাহক আঙ্গিনায় মিটারিং এর জন্য বিউবো এর চাহিদা মোতাবেক একটি স্বতন্ত্র কক্ষ বিনা ভাড়ায় প্রদান করা।<br>
                        ঠ) একই আঙ্গিনায় অন্য কোন সংযোগের বকেয়া থাকলে সংযোগ প্রদানের পূর্বে সকল বকেয়া অবশ্যই পরিশোধ করিতে হইবে।<br>
                        ড) যদি একক ফিডারের মাধ্যমে সংযোগ প্রদান সম্ভব হয় তাহলে বিউবো’র উপকেন্দ্রে স্থাপিত মিটার অনুসারে গ্রাহক বিল প্রদানে বাধ্য থাকিবেন।<br>
                    </p>
                    <!-- page3 ends  -->


                    <!-- page4 start  -->
                    <p>
                        ২৪. গনপ্রজাতন্ত্রী বাংলাদেশ সরকার, বিদ্যুৎ, জ্বালানী ও খনিজ সম্পদ মন্ত্রনালয়, বিদ্যুৎ বিভাগ, সমন্বয় শাখা-২ এর স্মারক নং-২৭.০৫২.০৩১.০০.০০১.২০১০-৮৪৭, তারিখ-০৭/১১/২০১০ইং স্মারক নং-২৭.০৫২.০৩১.০০.০০.০২৭.২০১০-৪৪৭, তারিথ-১৯/০৭/২০১২ইং স্মারক নং-২৭.০০.০০০০.০৫২.৩১.০১১.২০১৩-৩২২, তারিখ-০১/০৭/২০১৪ইং স্মারক নং-২৭.০০.০০০০.০৫২.৩১.০০৭.১৩.২৪২, তারিখ-০৮/০৬/২০১৫ইং স্মারক নং-২৭.০০.০০০০.০৫২.৩১.০২৭.২০১১.৩৩০, তারিখ-০৪/০৮/২০১৫ইং স্মারক নং- ২৭.০০.০০০০.০৫২.৩১.০২৭.২০১১.৩৫২, তারিখ-২৩/০৮/২০১৫ইং ও স্মারক নং-২৭.০০.০০০০.৯৩.৩৩.০১৩.১২-৩২৮, তারিখ-১৯/১০/২০১৭ইং এর শর্তাবলী অনুযায়ী প্রয়োজনীয় পরিমান সোলার প্যানেল স্থাপন করিতে হইবে। সংশ্লিষ্ট নির্বাহী প্রকৌশলী, এনার্জি অডিটিং ইউনিট বিভাগ সোলার সিস্টেম স্থাপনের বিষয়টি নিশ্চিত হয়ে মিটারিং ইউনিট বরাদ্দের জন্য সুপারিশ করিবেন এবং সংশ্লিষ্ট দপ্তর ও এনার্জি অডিটিং ইউনিট বিভাগের নির্বাহী প্রকৌশলী স্থাপিত সোলার সিস্টেমের কার্যকারিতার বিষয়ে নিশ্চিত হয়ে সংযোগ প্রদান করিবেন।
                    </p>

                    <p>
                        ২৫. উপরোক্ত শর্তে লোড অনুমোদন প্রদানের বিষয়টি নির্বাহী প্রকৌশলী গ্রাহককে পত্র মারফত অবহিত করিবেন।
                    </p>

                    <p>
                        ২৬. সংশ্লিষ্ট বিভাগ গ্রাহককে উপরে বর্ণিত সকল কাজগুলির সম্পাদন নিশ্চিত হয়ে সংযোগ প্রদান করিবেন এবং অত্র দপ্তরকে লিখিতভাবে অবহিত করিবেন।
                        সদয় অনুমোদনের জন্য পেশ করা হল।
                    </p>

                    <div class="sign clearfix">

                        <div class="sign1" style="float: left;">

                            <p>
                                <h4 style="display: inline-block;">সহকারী প্রধান প্রকৌশলী </h4><br>
                                বিতরন দক্ষিনাঞ্চল, <br>
                                বিউবো, চট্টগ্রাম।

                            </p>

                        </div>

                        <div class="sign2" style="float: right;">
                            <p>
                                <h4 style="display: inline-block;">প্রধান প্রকৌশলী মহোদয় </h4><br>
                                বিতরন দক্ষিনাঞ্চল, <br>
                                বিউবো, চট্টগ্রাম।
                            </p>

                        </div>






                    </div>


                    <p>
                        নির্বাহী প্রকৌশলী <br>
                        বিক্রয় ও বিতরণ বিভাগ<br>
                        বিউবো, চট্টগ্রাম।


                    </p>

                    <!-- page4 end  -->






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

        </div>
    </section>
    <!-- report ends  -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</body>

</html>