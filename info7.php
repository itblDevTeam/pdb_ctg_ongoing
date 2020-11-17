<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .note {
            text-align: center;
            height: 135px;
            background: -webkit-linear-gradient(left, #0072ff, #8811c5);
            color: #fff;
            font-weight: bold;
            line-height: 80px;
        }

        .form-content {
            padding: 5%;
            border: 1px solid #ced4da;
            margin-bottom: 2%;
        }

        .form-control {
            border-radius: 1.5rem !important;
            border: 1px solid #1b4f72 !important;
        }

        .btnSubmit {
            border: none;
            border-radius: 1.5rem;
            padding: 1%;
            width: 20%;
            cursor: pointer;
            background: #0062cc;
            color: #fff;
        }
    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>


    <div class="container register-form">
        <div class="form">
            <div class="note">
                <!-- <p>This is a simpleRegister Form made using Boostrap.</p> -->

                <legend>
                    <center class='mt-4'>



                        <h2><b>বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ড</b></h2>
                        <h6>বিক্রয় ও বিতরণ বিভাগ- স্টেডিয়াম, বিউবো, চট্টগ্রাম ।</h6>
                        <h6>
নূতন মধ্যচাপ (১১ কেভি) সংযোগ গ্রহণ/ লোড বর্ধিতকরণের সম্মতিপত্র</h6>
                        <h6>প্রদানের নিমিত্তে দরখাস্তের সহিত প্রাপ্ত দলিলপত্রের তথ্য বিবরণী ।</h6>





                    </center>
                </legend>
            </div>


            <!-- <form action="" method="POST">

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><h6>১ যে নামে গ্রাহক হইবে :</h6></label>
                                <input type="text" class="form-control" placeholder="Your Name *" value="" />
                            </div>
                            <div class="form-group">
                            <label for=""><h6>৩২ গ্রাহকের সাব-স্টেশন পিডিবি নিজস্ব মিটারিং প্যানেল বসানো নিমিত্তে বিনা ভাড়ায় একটি কক্ষের ব্যবস্থা করা হয়েছে কিন? :</h6></label>
                                <input type="text" class="form-control" placeholder="Phone Number *" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for=""><h6>৩২ গ্রাহকের সাব-স্টেশন পিডিবি নিজস্ব মিটারিং প্যানেল বসানো নিমিত্তে বিনা ভাড়ায় একটি কক্ষের ব্যবস্থা করা হয়েছে কিন? :</h6></label>
                                <input type="text" class="form-control" placeholder="Your Password *" value="" />
                            </div>
                            <div class="form-group">
                            <label for=""><h6>৩২ গ্রাহকের সাব-স্টেশন পিডিবি নিজস্ব মিটারিং প্যানেল বসানো নিমিত্তে বিনা ভাড়ায় একটি কক্ষের ব্যবস্থা করা হয়েছে কিন? :</h6></label>
                                <input type="text" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btnSubmit">Submit</button>
                </div>

            </form> -->


            <form action="" method="POST">

                <div class="form-content" style="background-color : #EDEDED";>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="grahok_naam">
                                    <h6> যে নামে গ্রাহক হইবে :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="grahok_naam" placeholder="Required *" id="grahok_naam" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="maliker_naam">
                                    <h6 >মালিক/প্রতিষ্ঠানের নাম :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="maliker_naam" placeholder="Required *" id="maliker_naam" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="notun_current">
                                    <h6>যে স্থানে নতুন বিদ্যুৎ সংযোগ দেওয়া হইবে :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="notun_current" placeholder="Required *" id="notun_current" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="grahoker_jogajog_thikana">
                                    <h6>গ্রাহকের যোগাযোগের ঠিকানা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="grahoker_jogajog_thikana" placeholder="Required *" id="grahoker_jogajog_thikana" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jomir_malikana">
                                    <h6>জমির মালিকানার আইনসিদ্ধ দলিলপত্র (সংযোজিত) :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="jomir_malikana" placeholder="Required *" id="jomir_malikana" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="karkhana_nirmane_onumati">
                                    <h6>কারখানা/স্থাপনা স্থাপনের নিমিত্তে কর্তৃপক্ষের অনুমতি পত্র :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="karkhana_nirmane_onumati" placeholder="Required *" id="karkhana_nirmane_onumati" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="karkhana_sthanerjonno_onumati">
                                    <h6>কারখানা/স্থাপনে স্থান অনুমোদনের নিমিত্তে যথাযথ কর্তৃপক্ষের অনুমতি পত্র:</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="karkhana_sthanerjonno_onumati" placeholder="Required *" id="karkhana_sthanerjonno_onumati" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="rastaghater_noksha">
                                    <h6>কারখানা/গ্রাহকের সাব-স্টেশন এলাকার রাস্তাঘাট ও বিদ্যুৎ লাইনের অবস্থান সহ একটি নকসা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="rastaghater_noksha" placeholder="Required *" id="rastaghater_noksha" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jontropatibosanor_noksha">
                                    <h6>কারখানার যন্ত্রপাতি বসানোর একটি পরিকল্পনা নকসা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="jontropatibosanor_noksha" placeholder="Required *" id="jontropatibosanor_noksha" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="substationer_porikolpona">
                                    <h6>গ্রাহকের সাব-স্টেশনের একটি পরিকল্পনা নকসা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="substationer_porikolpona" placeholder="Required *" id="substationer_porikolpona" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="currenter_aklime_noksha">
                                    <h6>গ্রাহকের সাব-স্টেশনের একটি বৈদ্যুতিক ১ লাইন নকসা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="currenter_aklime_noksha" placeholder="Required *" id="currenter_aklime_noksha" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="current_loader_talika">
                                    <h6>কারখানার যন্ত্রপাতির বৈদ্যুতিক লোড সহ একটি বিস্তারিত  তালিকা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="current_loader_talika" placeholder="Required *" id="current_loader_talika" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="motorer_specification">
                                    <h6>বৈদ্যুতিক সরঞ্জাম/মোটরের এর বিস্তারিত স্পেসিফিকেশন :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="motorer_specification" placeholder="Required *" id="motorer_specification" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="genaretorer_specification">
                                    <h6>জেনারেটরের বিস্তারিত স্পেসিফিকেশন ও কন্ট্রোল ডায়াগ্রাম ( সংযোজিত) :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="genaretorer_specification" placeholder="Required *" id="genaretorer_specification" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="grahoker_connected_load">
                                    <h6>গ্রাহকের  মোট কানেকটেড লোড :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="grahoker_connected_load" placeholder="Required *" id="grahoker_connected_load" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="grahoker_demand">
                                    <h6>গ্রাহকের সর্বাধিক ডিমান্ড :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="grahoker_demand" placeholder="Required *" id="grahoker_demand" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="grahoker_sonjog_line">
                                    <h6>গ্রাহকের সংযোগ লাইন :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="grahoker_sonjog_line" placeholder="Required *" id="grahoker_sonjog_line" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="currenter_tikadarer_naam">
                                    <h6>বৈদ্যুতিক ঠিকাদারের নাম রেজিস্ট্রেশন নং লাইসেন্স নং এবং শ্রেণী :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="currenter_tikadarer_naam" placeholder="Required *" id="currenter_tikadarer_naam" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="switchgear_specification">
                                    <h6>১১কেভি সুইচগিয়ার এর স্পেসিফিকেশন এবং প্রটেকশন ও মিটারিং স্কীমের ওয়্যারিং ডায়াগ্রাম :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="switchgear_specification" placeholder="Required *" id="switchgear_specification" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="cercuitbekar_achekina">
                                    <h6>১১কেভি সুইচগিয়ারে ৪০০ এস্পস অয়েল/ এয়ার ভ্যাকুয়াম সার্কিট ব্রেকার আছে কিনা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="cercuitbekar_achekina" placeholder="Required *" id="cercuitbekar_achekina" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="disktype_protectiverile_achekina">
                                    <h6>১১কেভি সুইচগিয়ার এ আইডিএমটি ওভার কারেন্ট ও আর্থফল্ট ইন্ডাকশন ডিসকটাইপ প্রটেকটিভ রিলে আছে কিনা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="disktype_protectiverile_achekina" placeholder="Required *" id="disktype_protectiverile_achekina" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="batterycharger_achekina">
                                    <h6>১১কেভি সুইচগিয়ারের ডিসি  ট্রিপিং এর জন্য ১১০ ভোল্টের ডিসি ব্যাটারি চার্জার ও ব্যাটারি আছে কিনা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="batterycharger_achekina" placeholder="Required *" id="batterycharger_achekina" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="transformarer_specification">
                                    <h6>ট্রান্সফরমারের স্পেসিফিকেশন ১১/০.৪ কেভি, ১৫০ কেভিএ :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="transformarer_specification" placeholder="Required *" id="transformarer_specification" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="switchgear_specification">
                                    <h6>এলিট সুইচগিয়ারের স্পেসিফিকেশন ও সার্কিট ডায়াগ্রাম :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="switchgear_specification" placeholder="Required *" id="switchgear_specification" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="powerfactor_specification">
                                    <h6>পাওয়ার ফ্যাক্টর ইমপ্রুভমেন্ট প্লান্ট এর স্পেসিফিকেশন ও সার্কিট ডায়াগ্রাম :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="powerfactor_specification" placeholder="Required *" id="powerfactor_specification" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="prostutkaroker_testcertificate">
                                    <h6>প্রস্তুতকারকের টেস্ট সার্টিফিকেট ট্রান্সফর্মার এইচটি/ এলিট সুইচ গিয়ার, পিএফআই প্লান্ট ইত্যাদি :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="prostutkaroker_testcertificate" placeholder="Required *" id="prostutkaroker_testcertificate" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="thikadarer_test_result">
                                    <h6> বৈদ্যুতিক ঠিকাদার প্রদত্ত টেস্ট রেজাল্ট/ইনস্টলেশন সার্টিফিকেট :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="thikadarer_test_result" placeholder="Required *" id="thikadarer_test_result" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="currenter_certificate">
                                    <h6>বাংলাদেশ সরকারের বৈদ্যুতিক উপদেষ্টা ও বৈদ্যুতিক পরিদর্শকের সার্টিফিকেট সংযোজিত :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="currenter_certificate" placeholder="Required *" id="currenter_certificate" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="currentliner_noksha">
                                    <h6>১১কেভি বিদ্যুৎ বিতরণ লাইনের একটি লাইন নকশা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="currentliner_noksha" placeholder="Required *" id="currentliner_noksha" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="grahoker_jaowaasha">
                                    <h6>গ্রাহকের সাব-স্টেশনে যাওয়া আসার ব্যবস্থা যথেষ্ট কিনা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="grahoker_jaowaasha" placeholder="Required *" id="grahoker_jaowaasha" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pdbkajer_sujog">
                                    <h6>গ্রাহকের সাব-স্টেশন ভবিষ্যতে পিডিবির সম্প্রসারণ কাজের সুযোগ আছে কিনা :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="pdbkajer_sujog" placeholder="Required *" id="pdbkajer_sujog" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="bina_varay_babostha">
                                    <h6>গ্রাহকের সাব-স্টেশন পিডিবি নিজস্ব মিটারিং প্যানেল বসানো নিমিত্তে বিনা ভাড়ায় একটি কক্ষের ব্যবস্থা করা হয়েছে কিনা? :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="bina_varay_babostha" placeholder="Required *" id="bina_varay_babostha" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="karkhananah_chalano">
                                    <h6>পিক লোড আওয়ারে কারখানা না চালানোর ব্যাপারে গ্রাহকের অঙ্গীকারপত্র নেওয়া হয়েছে কিনা? :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="karkhananah_chalano" placeholder="Required *" id="karkhananah_chalano" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="tottho_biboron">
                                    <h6>৩৩ কেভি সাবস্টেশন এর তথ্য বিবরণ
                                         ক) সাব স্টেশনের নাম
                                         খ) সাবস্টেশনের ক্ষমতা
                                         গ)সাবস্টেশনের সর্বোচ্চ লোড :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="tottho_biboron" placeholder="Required *" id="tottho_biboron" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="11kevirtottho_biboron">
                                    <h6>১১কেভি ফিডরে তথ্য বিবরণী
                                        ক)ফিডারের নাম
                                        খ) ব্রেকারের ক্ষমতজ্ঞ 
                                        গ)সিটীর অনুপাত 
                                        ঘ)ক্যাবলের সাইজ ও দৈর্ঘ্য 
                                        ঙ)তারের সাইজ দৈর্ঘ্য
                                        চ )সর্বোচ্চ লোড  :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="11kevirtottho_biboron" placeholder="Required *" id="11kevirtottho_biboron" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="">
                                    <h6>গ্রাহকের তথ্য বিবরণী :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="11kevirtottho_biboron" placeholder="Required *" id="11kevirtottho_biboron" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="voltage_drop">
                                    <h6>সিস্টেম লোড এবং সংযোগ প্রান্তের ভোল্টেজ ড্রপ :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="voltage_drop" placeholder="Required *" id="voltage_drop" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="voltage_level">
                                    <h6> ভোল্টেজ লেভেল এবং ১১কেভি সংযোগ ক্যাবল সাইজ :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="voltage_level" placeholder="Required *" id="voltage_level" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="seshevoltage_drop">
                                    <h6>লাইনের শেষ প্রান্তে ভোল্টেজ ড্রপ :</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="seshevoltage_drop" placeholder="Required *" id="seshevoltage_drop" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="impruvmentplanter_upojogita">
                                    <h6>পাওয়ার ফ্যাক্টর ইমপ্রুভমেন্ট প্লান্টের  উপযোগিতা:</h6>
                                </label>
                                <input type="text" class="form-control" value="" name="impruvmentplanter_upojogita" placeholder="Required *" id="impruvmentplanter_upojogita" />
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btnSubmit">Submit</button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>