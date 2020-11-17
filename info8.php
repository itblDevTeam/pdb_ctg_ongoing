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

		.sub {
			width: 100% !important;
			margin-left: 5px;
			margin-top: 6px;
		}

		.text {
			margin-top: 4px;
		}
	</style>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

	<!-- form_strat  -->

	<div class="container register-form">
		<div class="form">
			<!-- header_start  -->

			<div class="note">
				<!-- <p>This is a simpleRegister Form made using Boostrap.</p> -->

				<legend>
					<center class='mt-4'>



						<h2><b>বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ড</b></h2>
						<h6>বিক্রয় ও বিতরণ বিভাগ- স্টেডিয়াম, বিউবো, চট্টগ্রাম ।</h6>
						<h6>নূতন মধ্যচাপ (১১ কেভি) সংযোগ গ্রহণ/ লোড বর্ধিতকরণের সম্মতিপত্র</h6>
						<h6>প্রদানের নিমিত্তে দরখাস্তের সহিত প্রাপ্ত দলিলপত্রের তথ্য বিবরণী ।</h6>





					</center>
				</legend>
			</div>
			<!-- header_start  -->


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

			<!-- main_form start -->


			<form action="" method="POST">

				<div class="form-content" style="background-color : #EDEDED" ;>
					<div class="row">

						<!-- 1. grahok_naam start   -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="grahok_naam">
									<h6> যে নামে গ্রাহক হইবে :</h6>
								</label>
								<input type="text" class="form-control" value="" name="grahok_naam" placeholder="Required *" id="grahok_naam" />
							</div>
						</div>
						<!-- 1. grahok_naam end   -->

						<!-- 2. maliker_naam start -->

						<div class="col-md-6">
							<div class="form-group">
								<label for="maliker_naam">
									<h6>মালিক/প্রতিষ্ঠানের নাম :</h6>
								</label>
								<input type="text" class="form-control" value="" name="maliker_naam" placeholder="Required *" id="maliker_naam" />
							</div>
						</div>

						<!-- 2. maliker_naam end -->


					</div>


					<div class="row">

						<!-- 3. notun_current start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="notun_current">
									<h6>যে স্থানে নতুন বিদ্যুৎ সংযোগ দেওয়া হইবে :</h6>
								</label>
								<input type="text" class="form-control" value="" name="notun_current" placeholder="Required *" id="notun_current" />
							</div>

						</div>

						<!-- 3. notun_current end  -->


						<!-- 4. grahoker_jogajog_thikana start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="grahoker_jogajog_thikana">
									<h6>গ্রাহকের যোগাযোগের ঠিকানা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="grahoker_jogajog_thikana" placeholder="Required *" id="grahoker_jogajog_thikana" />
							</div>
						</div>

						<!-- 4. grahoker_jogajog_thikana end  -->

					</div>


					<div class="row">

						<!-- 5. jomir_malikana start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="jomir_malikana">
									<h6>জমির মালিকানার আইনসিদ্ধ দলিলপত্র (সংযোজিত) :</h6>
								</label>
								<input type="text" class="form-control" value="" name="jomir_malikana" placeholder="Required *" id="jomir_malikana" />
							</div>

						</div>

						<!-- 5. jomir_malikana end  -->

						<!-- 6. karkhana_nirmane_onumati start  -->
						<div class="col-md-6">

							<div class="form-group">
								<label for="karkhana_nirmane_onumati">
									<h6>কারখানা/স্থাপনা স্থাপনের নিমিত্তে কর্তৃপক্ষের অনুমতি পত্র :</h6>
								</label>
								<input type="text" class="form-control" value="" name="karkhana_nirmane_onumati" placeholder="Required *" id="karkhana_nirmane_onumati" />
							</div>
						</div>

						<!-- 6. karkhana_nirmane_onumati end  -->

					</div>


					<div class="row">

						<!-- 7. karkhana_sthanerjonno_onumati start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="karkhana_sthanerjonno_onumati">
									<h6>কারখানা/স্থাপনে স্থান অনুমোদনের নিমিত্তে যথাযথ কর্তৃপক্ষের অনুমতি পত্র:</h6>
								</label>
								<input type="text" class="form-control" value="" name="karkhana_sthanerjonno_onumati" placeholder="Required *" id="karkhana_sthanerjonno_onumati" />
							</div>

						</div>

						<!-- 7. karkhana_sthanerjonno_onumati end  -->

						<!-- 8. rastaghater_noksha start  -->
						<div class="col-md-6">

							<div class="form-group">
								<label for="rastaghater_noksha">
									<h6>কারখানা/গ্রাহকের সাব-স্টেশন এলাকার রাস্তাঘাট ও বিদ্যুৎ লাইনের অবস্থান সহ একটি নকসা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="rastaghater_noksha" placeholder="Required *" id="rastaghater_noksha" />
							</div>
						</div>

						<!-- 8. rastaghater_noksha end  -->

					</div>


					<div class="row">

						<!-- 9. jontropatibosanor_noksha start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="jontropatibosanor_noksha">
									<h6>কারখানার যন্ত্রপাতি বসানোর একটি পরিকল্পনা নকসা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="jontropatibosanor_noksha" placeholder="Required *" id="jontropatibosanor_noksha" />
							</div>

						</div>

						<!-- 9. jontropatibosanor_noksha end  -->

						<!-- 10. substationer_porikolpona start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="substationer_porikolpona">
									<h6>গ্রাহকের সাব-স্টেশনের একটি পরিকল্পনা নকসা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="substationer_porikolpona" placeholder="Required *" id="substationer_porikolpona" />
							</div>
						</div>

						<!-- 10. substationer_porikolpona end  -->

					</div>


					<div class="row">

						<!-- 11. currenter_akline_noksha start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="currenter_akline_noksha">
									<h6>গ্রাহকের সাব-স্টেশনের একটি বৈদ্যুতিক ১ লাইন নকসা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="currenter_akline_noksha" placeholder="Required *" id="currenter_akline_noksha" />
							</div>

						</div>

						<!-- 11. currenter_akline_noksha end  -->

						<!-- 12. current_loader_talika start  -->
						<div class="col-md-6">

							<div class="form-group">
								<label for="current_loader_talika">
									<h6>কারখানার যন্ত্রপাতির বৈদ্যুতিক লোড সহ একটি বিস্তারিত তালিকা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="current_loader_talika" placeholder="Required *" id="current_loader_talika" />
							</div>
						</div>

						<!-- 12. current_loader_talika end  -->

					</div>


					<div class="row">

						<!-- 13. motorer_specification start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="motorer_specification">
									<h6>বৈদ্যুতিক সরঞ্জাম/মোটরের এর বিস্তারিত স্পেসিফিকেশন :</h6>
								</label>
								<input type="text" class="form-control mt-3" value="" name="motorer_specification" placeholder="Required *" id="motorer_specification" />
							</div>

						</div>

						<!-- 13. motorer_specification end  -->

						<!-- 14. genaretorer_specification start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="genaretorer_specification">
									<h6>জেনারেটরের বিস্তারিত স্পেসিফিকেশন ও কন্ট্রোল ডায়াগ্রাম ( সংযোজিত) :</h6>
								</label>
								<input type="text" class="form-control" value="" name="genaretorer_specification" placeholder="Required *" id="genaretorer_specification" />
							</div>
						</div>

						<!-- 14. genaretorer_specification end  -->

					</div>


					<div class="row">

						<!-- 15. grahoker_connected_load start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="grahoker_connected_load">
									<h6>গ্রাহকের মোট কানেকটেড লোড :</h6>
								</label>
								<input type="text" class="form-control" value="" name="grahoker_connected_load" placeholder="Required *" id="grahoker_connected_load" />
							</div>

						</div>

						<!-- 15. grahoker_connected_load end  -->

						<!-- 16. grahoker_demand start  -->
						<div class="col-md-6">

							<div class="form-group">
								<label for="grahoker_demand">
									<h6>গ্রাহকের সর্বাধিক ডিমান্ড :</h6>
								</label>
								<input type="text" class="form-control" value="" name="grahoker_demand" placeholder="Required *" id="grahoker_demand" />
							</div>
						</div>

						<!-- 16. grahoker_demand end  -->

					</div>


					<div class="row">

						<!-- 17. grahoker_sonjog_line start   -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="grahoker_sonjog_line">
									<h6>গ্রাহকের সংযোগ লাইন :</h6>
								</label>
								<input type="text" class="form-control" value="" name="grahoker_sonjog_line" placeholder="Required *" id="grahoker_sonjog_line" />
							</div>

						</div>

						<!-- 17. grahoker_sonjog_line end   -->

						<!-- 18. currenter_tikadarer_naam start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="currenter_tikadarer_naam">
									<h6>বৈদ্যুতিক ঠিকাদারের নাম, রেজিস্ট্রেশন নং, লাইসেন্স নং এবং শ্রেণী :</h6>
								</label>
								<input type="text" class="form-control" value="" name="currenter_tikadarer_naam" placeholder="Required *" id="currenter_tikadarer_naam" />
							</div>
						</div>

						<!-- 18. currenter_tikadarer_naam end  -->

					</div>


					<div class="row">

						<!-- 19. switchgear_specification start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="switchgear_specification">
									<h6>১১কেভি সুইচগিয়ার এর স্পেসিফিকেশন এবং প্রটেকশন ও মিটারিং স্কীমের ওয়্যারিং ডায়াগ্রাম :</h6>
								</label>
								<input type="text" class="form-control" value="" name="switchgear_specification" placeholder="Required *" id="switchgear_specification" />
							</div>

						</div>

						<!-- 19. switchgear_specification end  -->

						<!-- 20. cercuitbekar_achekina start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="cercuitbekar_achekina">
									<h6>১১কেভি সুইচগিয়ারে ৪০০ এস্পস অয়েল/ এয়ার ভ্যাকুয়াম সার্কিট ব্রেকার আছে কিনা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="cercuitbekar_achekina" placeholder="Required *" id="cercuitbekar_achekina" />
							</div>
						</div>

						<!-- 20. cercuitbekar_achekina end  -->

					</div>


					<div class="row">

						<!-- 21. disktype_protectiverile_achekina start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="disktype_protectiverile_achekina">
									<h6>১১কেভি সুইচগিয়ার এ আইডিএমটি ওভার কারেন্ট ও আর্থফল্ট ইন্ডাকশন ডিসকটাইপ প্রটেকটিভ রিলে আছে কিনা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="disktype_protectiverile_achekina" placeholder="Required *" id="disktype_protectiverile_achekina" />
							</div>

						</div>

						<!-- 21. disktype_protectiverile_achekina end  -->

						<!-- 22. batterycharger_achekina start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="batterycharger_achekina">
									<h6>১১কেভি সুইচগিয়ারের ডিসি ট্রিপিং এর জন্য ১১০ ভোল্টের ডিসি ব্যাটারি চার্জার ও ব্যাটারি আছে কিনা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="batterycharger_achekina" placeholder="Required *" id="batterycharger_achekina" />
							</div>
						</div>

						<!-- 22. batterycharger_achekina end  -->

					</div>


					<div class="row">

						<!-- 23. transformarer_specification start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="transformarer_specification">
									<h6>ট্রান্সফরমারের স্পেসিফিকেশন ১১/০.৪ কেভি, ১৫০ কেভিএ :</h6>
								</label>
								<input type="text" class="form-control" value="" name="transformarer_specification" placeholder="Required *" id="transformarer_specification" />
							</div>

						</div>

						<!-- 23. transformarer_specification end  -->

						<!-- 24. switchgear_specification start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="switchgear_specification">
									<h6>এলিট সুইচগিয়ারের স্পেসিফিকেশন ও সার্কিট ডায়াগ্রাম :</h6>
								</label>
								<input type="text" class="form-control" value="" name="switchgear_specification" placeholder="Required *" id="switchgear_specification" />
							</div>
						</div>

						<!-- 24. switchgear_specification end  -->

					</div>
					<div class="row">

						<!-- 25. powerfactor_specification start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="powerfactor_specification">
									<h6>পাওয়ার ফ্যাক্টর ইমপ্রুভমেন্ট প্লান্ট এর স্পেসিফিকেশন ও সার্কিট ডায়াগ্রাম :</h6>
								</label>
								<input type="text" class="form-control" value="" name="powerfactor_specification" placeholder="Required *" id="powerfactor_specification" />
							</div>

						</div>

						<!-- 25. powerfactor_specification end  -->

						<!-- 26. prostutkaroker_testcertificate start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="prostutkaroker_testcertificate">
									<h6>প্রস্তুতকারকের টেস্ট সার্টিফিকেট ট্রান্সফর্মার এইচটি/ এলিট সুইচ গিয়ার, পিএফআই প্লান্ট ইত্যাদি :</h6>
								</label>
								<input type="text" class="form-control" value="" name="prostutkaroker_testcertificate" placeholder="Required *" id="prostutkaroker_testcertificate" />
							</div>
						</div>

						<!-- 26. prostutkaroker_testcertificate end  -->

					</div>


					<div class="row">

						<!-- 27. thikadarer_test_result start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="thikadarer_test_result">
									<h6> বৈদ্যুতিক ঠিকাদার প্রদত্ত টেস্ট রেজাল্ট/ইনস্টলেশন সার্টিফিকেট :</h6>
								</label>
								<input type="text" class="form-control  mt-3" value="" name="thikadarer_test_result" placeholder="Required *" id="thikadarer_test_result" />
							</div>

						</div>

						<!-- 27. thikadarer_test_result end  -->

						<!-- 28. currenter_certificate start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="currenter_certificate">
									<h6>বাংলাদেশ সরকারের বৈদ্যুতিক উপদেষ্টা ও বৈদ্যুতিক পরিদর্শকের সার্টিফিকেট সংযোজিত :</h6>
								</label>
								<input type="text" class="form-control" value="" name="currenter_certificate" placeholder="Required *" id="currenter_certificate" />
							</div>
						</div>

						<!-- 28. currenter_certificate end  -->

					</div>


					<div class="row">

						<!-- 29.currentliner_noksha start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="currentliner_noksha">
									<h6>১১কেভি বিদ্যুৎ বিতরণ লাইনের একটি লাইন নকশা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="currentliner_noksha" placeholder="Required *" id="currentliner_noksha" />
							</div>

						</div>

						<!-- 29. currentliner_noksha end  -->

						<!-- 30. grahoker_jaowaasha start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="grahoker_jaowaasha">
									<h6>গ্রাহকের সাব-স্টেশনে যাওয়া আসার ব্যবস্থা যথেষ্ট কিনা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="grahoker_jaowaasha" placeholder="Required *" id="grahoker_jaowaasha" />
							</div>
						</div>

						<!-- 30. grahoker_jaowaasha end  -->

					</div>


					<div class="row">

						<!-- 31. pdbkajer_sujog start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="pdbkajer_sujog">
									<h6>গ্রাহকের সাব-স্টেশন ভবিষ্যতে পিডিবির সম্প্রসারণ কাজের সুযোগ আছে কিনা :</h6>
								</label>
								<input type="text" class="form-control" value="" name="pdbkajer_sujog" placeholder="Required *" id="pdbkajer_sujog" />
							</div>

						</div>

						<!-- 31. pdbkajer_sujog end  -->

						<!-- 32. bina_varay_babostha start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="bina_varay_babostha">
									<h6>গ্রাহকের সাব-স্টেশন পিডিবি নিজস্ব মিটারিং প্যানেল বসানো নিমিত্তে বিনা ভাড়ায় একটি কক্ষের ব্যবস্থা করা হয়েছে কিনা? :</h6>
								</label>
								<input type="text" class="form-control" value="" name="bina_varay_babostha" placeholder="Required *" id="bina_varay_babostha" />
							</div>
						</div>

						<!-- 32. bina_varay_babostha end  -->

					</div>


					<div class="row">

						<!-- 33. karkhananah_chalano start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="karkhananah_chalano">
									<h6>পিক লোড আওয়ারে কারখানা না চালানোর ব্যাপারে গ্রাহকের অঙ্গীকারপত্র নেওয়া হয়েছে কিনা? :</h6>
								</label>
								<input type="text" class="form-control" value="" name="karkhananah_chalano" placeholder="Required *" id="karkhananah_chalano" />
							</div>

						</div>

						<!-- 33. karkhananah_chalano end  -->

						<!-- 34. tottho_biboron start  -->


						<div class="col-md-6">

							<div class="form-group ">

								<label for="tottho_biboron">
									<h6>৩৩ কেভি সাবস্টেশন এর তথ্য বিবরণ :</h6>
								</label>

								<div class="card " style="width: 100%;">
									<div class="card-header">
										<div class="form-inline">
											<label for="substationer_naam" class="text">সাব স্টেশনের নাম : </label>
											<input type="text" class="form-control sub" value="" name="substationer_naam" placeholder="Required *" id="substationer_naam" />

											<label for="substationer_khomota" class="text">সাবস্টেশনের ক্ষমতা : </label>
											<input type="text" class="form-control sub" value="" name="substationer_khomota" placeholder="Required *" id="substationer_khomota" />

											<label for="substationer_load" class="text">সাবস্টেশনের সর্বোচ্চ লোড : </label>
											<input type="text" class="form-control sub" value="" name="substationer_load" placeholder="Required *" id="substationer_load" />

										</div>
									</div>
								</div>
								<!-- <div class="card">
                                    
                                    <div class="card-header">
                                        <label for="tottho_biboron">
                                            <h6>সাব স্টেশনের নাম :</h6>

                                        </label>
                                        <input type="text" class="form-control " value="" name="tottho_biboron" placeholder="Required *" id="tottho_biboron" />

                                    </div>
                                </div> -->
								<!-- <h6>৩৩ কেভি সাবস্টেশন এর তথ্য বিবরণ
                                         ক) সাব স্টেশনের নাম
                                         খ) সাবস্টেশনের ক্ষমতা
                                         গ)সাবস্টেশনের সর্বোচ্চ লোড :</h6> -->

								<!-- <input type="text" class="form-control" value="" name="tottho_biboron" placeholder="Required *" id="tottho_biboron" /> -->
							</div>
						</div>

						<!-- 34. tottho_biboron end  -->
					</div>


					<div class="row">

						<!-- 35. 11kevirtottho_biboron start  -->

						<div class="col-md-6">
							<div class="form-group">
								<label for="11kevirtottho_biboron">
									<h6>১১কেভি ফিডারে তথ্য বিবরণী :</h6>
								</label>

								<div class="card " style="width: 100%;">
									<div class="card-header">
										<div class="form-inline">
											<label for="fidarer_naam" class="text">ফিডারের নাম : </label>
											<input type="text" class="form-control sub" value="" name="fidarer_naam" placeholder="Required *" id="fidarer_naam" />

											<label for="brakarer_khomota" class="text">ব্রেকারের ক্ষমতা : </label>
											<input type="text" class="form-control sub" value="" name="brakarer_khomota" placeholder="Required *" id="brakarer_khomota" />

											<label for="citir_onupat" class="text">সিটীর অনুপাত : </label>
											<input type="text" class="form-control sub" value="" name="citir_onupat" placeholder="Required *" id="citir_onupat" />

											<label for="cable_size" class="text">ক্যাবলের সাইজ ও দৈর্ঘ্য : </label>
											<input type="text" class="form-control sub" value="" name="cable_size" placeholder="Required *" id="cable_size" />

											<label for="tarer_size" class="text">তারের সাইজ দৈর্ঘ্য : </label>
											<input type="text" class="form-control sub" value="" name="tarer_size" placeholder="Required *" id="tarer_size" />

											<label for="sorbadhik_load" class="text">সর্বোচ্চ লোড : </label>
											<input type="text" class="form-control sub" value="" name="sorbadhik_load" placeholder="Required *" id="sorbadhik_load" />

										</div>
									</div>
								</div>


								<!-- <label for="11kevirtottho_biboron">
                                    <h6>১১কেভি ফিডরে তথ্য বিবরণী
                                        ক)ফিডারের নাম
                                        খ) ব্রেকারের ক্ষমতজ্ঞ
                                        গ)সিটীর অনুপাত
                                        ঘ)ক্যাবলের সাইজ ও দৈর্ঘ্য
                                        ঙ)তারের সাইজ দৈর্ঘ্য
                                        চ )সর্বোচ্চ লোড :</h6>
                                </label> -->

							</div>

						</div>

						<!-- 35. 11kevirtottho_biboron end  -->

						<!-- 36. tottho_biboroni start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="tottho_biboroni">
									<h6>গ্রাহকের তথ্য বিবরণী :</h6>
								</label>

								<div class="card " style="width: 100%;">
									<div class="card-header">
										<div class="form-inline">
											<label for="connected_load" class="text">গ্রাহকের কানেকটেড লোড : </label>
											<input type="text" class="form-control sub" value="" name="connected_load" placeholder="Required *" id="connected_load" />

											<label for="transformerer_power" class="text">ট্রান্সফরমারের ক্ষমতা : </label>
											<input type="text" class="form-control sub" value="" name="transformerer_power" placeholder="Required *" id="transformerer_power" />

											<label for="lbs_power" class="text">এলবিএস-এর ক্ষমতা : </label>
											<input type="text" class="form-control sub" value="" name="lbs_power" placeholder="Required *" id="lbs_power" />

											<label for="citir_onupat" class="text">সিটির অনুপাত : </label>
											<input type="text" class="form-control sub" value="" name="citir_onupat" placeholder="Required *" id="citir_onupat" />

											<label for="cable_size" class="text">ক্যাবল সাইজ : </label>
											<input type="text" class="form-control sub" value="" name="cable_size" placeholder="Required *" id="cable_size" />

											<label for="pfier_power" class="text">পি.এফ.আই প্লান্টের ক্ষমতা : </label>
											<input type="text" class="form-control sub" value="" name="pfier_power" placeholder="Required *" id="pfier_power" />

										</div>
									</div>
								</div>



							</div>
						</div>

						<!-- 36. tottho_biboroni end  -->
					</div>


					<div class="row">

						<!-- 37. voltage_drop start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="voltage_drop">
									<h6>সিস্টেম লোড এবং সংযোগ প্রান্তের ভোল্টেজ ড্রপ :</h6>
								</label>
								<input type="text" class="form-control" value="" name="voltage_drop" placeholder="Required *" id="voltage_drop" />
							</div>

						</div>

						<!-- 37. voltage_drop end  -->

						<!-- 38. voltage_level start  -->
						<div class="col-md-6">

							<div class="form-group">
								<label for="voltage_level">
									<h6> ভোল্টেজ লেভেল এবং ১১কেভি সংযোগ ক্যাবল সাইজ :</h6>
								</label>
								<input type="text" class="form-control" value="" name="voltage_level" placeholder="Required *" id="voltage_level" />
							</div>
						</div>

						<!-- 38. voltage_level end  -->

					</div>


					<div class="row">

						<!-- 39. seshevoltage_drop start  -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="seshevoltage_drop">
									<h6>লাইনের শেষ প্রান্তের ভোল্টেজ ড্রপ :</h6>
								</label>
								<input type="text" class="form-control" value="" name="seshevoltage_drop" placeholder="Required *" id="seshevoltage_drop" />
							</div>

						</div>

						<!-- 39. seshevoltage_drop end  -->

						<!-- 40. impruvmentplanter_upojogita start  -->

						<div class="col-md-6">

							<div class="form-group">
								<label for="impruvmentplanter_upojogita">
									<h6>পাওয়ার ফ্যাক্টর ইমপ্রুভমেন্ট প্লান্টের উপযোগিতা:</h6>
								</label>
								<input type="text" class="form-control" value="" name="impruvmentplanter_upojogita" placeholder="Required *" id="impruvmentplanter_upojogita" />
							</div>
						</div>

						<!-- 40. impruvmentplanter_upojogita end  -->

					</div>

					<!-- button start  -->
					<button type="button" class="btnSubmit" name="submit" value="submit">Submit</button>

					<!-- button end  -->
				</div>

			</form>

			<!-- main_form end -->

		</div>
	</div>
	<!-- form_end  -->
</body>

</html>