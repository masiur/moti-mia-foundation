@extends('front.layouts.default')

@section('content')

	<!-- Start main-content -->
	<div class="main-content">
		<!-- Section: inner-header -->
		<section class="page-title divider layer-overlay overlay-dark-8 section-typo-light" data-tm-bg-img="images/bg/bg11.jpg">
			<div class="container pt-90 pb-90">
				<!-- Section Content -->
				<div class="section-content">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="title text-white">About</h2>
							<nav role="navigation" class="breadcrumb-trail breadcrumbs">
								<div class="breadcrumbs">
									<span class="trail-item trail-begin">
										<a href="#"><span>Home</span></a>
									</span>
									<span><i class="fa fa-angle-right"></i></span>
									<span class="trail-item"><a href="#"><span>Pages</span></a></span>
									<span><i class="fa fa-angle-right"></i></span>
									<span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>About</span></span>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- about -->
		<section>
			<div class="container">
				<div class="section-content">
					<div class="row mb-40">
						<div class="col-lg-6">
							<div class="about-thumb"><img width="564" height="426" src="{{ asset('uploads\contents\photos\about\registration.jpg') }}" alt=""/>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="about-details">
								<h2 class="title mb-20 mt-20">
									<span class="">আমাদের </span>
									<span class="text-theme-colored1">লক্ষ্য</span>
								</h2>
								<h5 class="mb-20 text-black line-height-1-3">দরিদ্র জনগোষ্টির উন্নয়নের লক্ষ্যে সাম্প্রদায়িক বেড়াজাল পেরিয়ে তাদের মৌলিক চাহিদা গুলোর নিশ্চিতকল্পে দেশের যোগ্য নাগরিক হিসাবে গড়ে তোলার উদ্দেশ্যে নিয়ে কাজ শুরু করার জন্য একটি কল্যাণমূলক সংস্থা। ইহা একটি অরাজনৈতিক স্বেচ্ছাসেবী সংস্থা। সমাজসেবার মহান ব্রত সামাজিক ও জাতীয় উন্নয়নে সংস্থার সদস্যবৃন্দ বদ্ধপরিকর।</h5>
								<div class="paragraph">
									<p class="font-size-18">সমাজসেবার মহান ব্রত সামাজিক ও জাতীয় উন্নয়নে সংস্থার সদস্যবৃন্দ বদ্ধপরিকর।</p>
								</div>
								<div class="tm-sc tm-sc-button mt-30">
{{--									<a  href="#" --}}
{{--										target="_self"--}}
{{--										class="btn btn-theme-colored1 btn-round">--}}
{{--									Read More</a>--}}
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-30">
						<div>
							<span class="font-size-25 text-theme-colored1">সংস্থার উদ্দেশ্যঃ</span>
							<ul style="list-style-type: square;">
								<li>ক) সৎ, আদর্শ ও দায়িত্বসম্পন্ন মানুষ গড়ে তুলতে সামাজিক আন্দোলন কার্যক্রম।&nbsp;</li>
								<li>খ) দুর্নীতি প্রতিরোধে সামাজিক আন্দোলন গড়ে তোলা ।&nbsp;</li>
								<li>গ) পরিবেশ দূষণ প্রতিরোধে সামাজিক আন্দোলন গড়ে তোলা।&nbsp;</li>
								<li>ঘ) দারিদ্র বিমোচনে আর্থ-সামাজিক কার্যক্রম গ্রহণ ও বাস্তবায়ন।</li>
								<li>ঙ) নিরক্ষরতা দুরীকরণে শিশু শিক্ষা, গণ-শিক্ষা, বয়স্ক কার্যক্রম গ্রহণ ও বাস্তবায়ন।</li>
								<li>চ) বিভিন্ন বৃত্তিমূলক ও কারিগরি প্রশিক্ষণের মাধ্যমে আত্মকর্মসংস্থানের সুযোগ সৃষ্টি করে বেকারত্ব দূরীকরণ।&nbsp;</li>
								<li>ছ) জনস্বাস্থ্য ও পরিবার পরিকল্পনা মুলক কর্মসুচী গ্রহণ ও বাস্তবায়ন।</li>
								<li>জ) স্বাস্থ্য বিষয়ক (এইচআইভি-এইডস, যক্ষা, হেপাটাইটিস বি, ম্যালেরিয়া, ফাইলেরিয়া ইত্যাদি) বিভিন্ন কর্মসূচী গ্রহণ করা।&nbsp;</li>
								<li>ঝ) লিগ্যাল এইড ও গ্রাম আদালত সম্পর্কে জনগণকে সচেতন করা।&nbsp;</li>
								<li>ঞ) নারী প্রতি সহিংসতা প্রতিরোধে (যৌতুক, নির্যাতন, এসিড নিক্ষেপ, ইভ টিজিং) সামাজিক আন্দোলন গড়ে তোলা।&nbsp;</li>
								<li>ট) সিটিজেন চার্টার সম্পর্কে জনগণকে অবহিত করা।&nbsp;</li>
								<li>ঠ) সামাজিক ও সাংস্কৃতিক কর্মসূচী গ্রহণ করা।&nbsp;</li>
								<li>ড) সামাজিক বনায়ন ও বৃক্ষ রোপন কর্মসুচী গ্রহণ ও বাস্তবায়ন।</li>
								<li>ঢ) সমাজের ভাসমান ছিন্নমূল যাযাবর পরিবার উন্নয়নে সার্বিক সহযোগিতা করা।</li>
								<li>ণ) গরীব মেধাবী ছাত্রছাত্রীদের বৃত্তি দান, কন্যাদায়গ্রস্থদের আর্থিক সাহায্য দান, সমাজের এতিম ও অসহায় শিশু এবং প্রতিবন্ধিদের আশ্রয় কেন্দ্র &nbsp;স্থাপনের মাধ্যমে প্রতিপালন ও পূনর্বাসন করা ।</li>
								<li>ত) সর্ব &nbsp;সাধারনের সুস্বাস্থ্যের &nbsp;জন্য রোগ প্রতিরোধক পরামর্শদান &nbsp;ও দুঃস্থদের বিনা মুল্যে চিকিৎসার ব্যবস্থা করা ।</li>
								<li>থ) যথাযোগ্য মর্যাদায় জাতীয় ও ধর্মীয় দিবস পালন ।</li>
								<li>দ) পাঠাগার, স্কুল, কলেজ, বিশ্ববিদ্যালয় ও হাসপাতাল স্থাপন।</li>
								<li>ধ) লিঙ্গ বৈষম্য দূরীকরণে পদক্ষেপ গ্রহন। &nbsp;</li>
								<li>ন) প্রাকৃতিক দুর্যোগে ত্রাণ ও পুনর্বাসন কর্মসূচী গ্রহণ।&nbsp;</li>
								<li>প) প্রতিবন্ধীদের জন্য সময়োপযোগী কার্যক্রম গ্রহণ ও বাস্তবায়ন। &nbsp;</li>
								<li>ফ) সামাজিক বিবর্তনের সাথে সামঞ্জস্যপূর্ণ বাস্তবভিত্তিক যুগোপযোগী কার্যক্রম গ্রহণ ও বাস্তবায়ন করা ।&nbsp;</li>
								<li>ব) শিশুদের জন্য নির্যাতনমুক্ত ও নিরাপদ পরিবেশ গড়ে তুলতে সামাজিক আন্দোলন গড়ে তোলা ।&nbsp;</li>
								<li>ভ) ভোক্তা ও তথ্য অধিকার আইন সম্পর্কে সামাজিক আন্দোলন গড়ে তোলা।&nbsp;</li>
								<li>ম) ভাষা ও স্বাধীনতাসংগ্রামীদের জীবনী প্রকাশনা করা </li>
							</ul>


						</div>
{{--						<div class="col-sm-4">--}}
{{--							<div class="tm-sc tm-sc-icon-box icon-box icon-top iconbox-centered-in-responsive icon-position-icon-top tm-features-icon-box mb-sm-30">--}}
{{--								<div class="icon-wrapper">--}}
{{--									<a class="icon icon-type-image icon-default"> --}}
{{--									<img src="images/icon/ab4.png" alt="Image"></a>--}}
{{--								</div>--}}
{{--								<div class="icon-text">--}}
{{--									<h5 class="icon-box-title">--}}
{{--										Education Program         --}}
{{--									</h5>--}}
{{--									<div class="content">--}}
{{--										<p>Our aim is to develop positive school cultures on the basis of the rights</p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="clearfix"></div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-sm-4">--}}
{{--							<div class="tm-sc tm-sc-icon-box icon-box icon-top iconbox-centered-in-responsive icon-position-icon-top tm-features-icon-box mb-sm-30">--}}
{{--								<div class="icon-wrapper">--}}
{{--									<a class="icon icon-type-image icon-default"> --}}
{{--									<img src="images/icon/ab2.png" alt="Image"></a>--}}
{{--								</div>--}}
{{--								<div class="icon-text">--}}
{{--									<h5 class="icon-box-title">--}}
{{--										Online Fundraising          --}}
{{--									</h5>--}}
{{--									<div class="content">--}}
{{--										<p>We are dedicated to improving lives and building a future for poor children</p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="clearfix"></div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--						<div class="col-sm-4">--}}
{{--							<div class="tm-sc tm-sc-icon-box icon-box icon-top iconbox-centered-in-responsive icon-position-icon-top tm-features-icon-box">--}}
{{--								<div class="icon-wrapper">--}}
{{--									<a class="icon icon-type-image  icon-default"> --}}
{{--									<img src="images/icon/ab1.png" alt="Image"></a>--}}
{{--								</div>--}}
{{--								<div class="icon-text">--}}
{{--									<h5 class="icon-box-title">--}}
{{--										Save The World          --}}
{{--									</h5>--}}
{{--									<div class="content">--}}
{{--										<p>Our vision is to provide clean environment to developing the world</p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="clearfix"></div>--}}
{{--							</div>--}}
{{--						</div>--}}
					</div>
				</div>
			</div>
		</section>

		<!-- Funfact -->
		<section class="bg-theme-colored1" data-tm-bg-img="images/bg/worldmap.png">
			<div class="container">
				<div class="section-title">
					<div class="row justify-content-md-center">
						<div class="col-md-8">
							<div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center">
								<div class="title-wrapper">
									<h2 class="title text-white">
										<span class="">আমাদের</span>
										<span class="">অগ্রগতি</span>
									</h2>
									<div class="title-seperator-line"></div>
									<div class="paragraph">
										<p class="text-white">We are dedicated to improving lives and building a future for poor children around the world. Here&#8217;s the progress we&#8217;ve made since we started working in 1999.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-sm-4">
							<div class="tm-sc tm-sc-funfact funfact text-center mb-md-50">
								<div class="funfact-icon funfact-thumb">
									<img src="images/icon/piggy-bank.png" alt="Image">
								</div>
								<h2 class="counter">
									<span class="animate-number text-white" data-value="12567" data-animation-duration="1500">0</span><span class="counter-postfix text-white">+</span>
								</h2>
								<h5 class="title text-white">Happy Donors Donated and Counting!</h5>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="tm-sc tm-sc-funfact funfact text-center mb-md-50">
								<div class="funfact-icon funfact-thumb">
									<img src="images/icon/ecology.png" alt="Image">
								</div>
								<h2 class="counter">
									<span class="animate-number text-white" data-value="92" data-animation-duration="1500">0</span><span class="counter-postfix text-white">+</span>
								</h2>
								<h5 class="title text-white">Countries We Work Around the World!</h5>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="tm-sc tm-sc-funfact funfact text-center mb-sm-30">
								<div class="funfact-icon funfact-thumb">
									<img src="images/icon/water.png" alt="Image">
								</div>
								<h2 class="counter text-white font-48">
									<span class="animate-number" data-value="2678" data-animation-duration="1500">0</span><span class="counter-postfix text-white">+</span>
								</h2>
								<h5 class="title text-white">Projects Funded till Today!</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Volunteers -->		
		<section class="bg-silver-light">
			<div class="container pb-80">
				<div class="section-title text-center">
					<div class="row justify-content-md-center">
						<div class="col-md-8">
							<div class="tm-sc tm-sc-section-title section-title">
								<div class="title-wrapper">
									<h2 class="title"><span class="text-theme-colored1">স্বেচ্ছাসেবক এবং দাতাসমূহ</span>
									</h2>
									<div class="paragraph">
										<p>অনেকেই আমাদের এই উদ্যোগে পাশে থেকেছেন...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-md-12">
							<div class="tm-sc tm-sc-staff tm-sc-staff-carousel staff-style5-current-theme owl-dots-light-skin owl-dots-center owl-nav-top">
								<!-- Isotope Gallery Grid -->
								<div class="owl-carousel owl-theme tm-owl-carousel-3col" data-nav="true" data-dots="true" data-autoplay="true" data-loop="true" data-duration="6000" data-margin="30">
									<!-- the loop -->
									<div class="tm-carousel-item">
										<div class="tm-staff staff-items type-staff-items status-publish">
											<div class="staff-inner">
												<div class="box-hover-effect">
													<div class="effect-wrapper">
														<div class="thumb gradient-effect">
															<img width="500" height="500" src="images/team/team_01.jpg" class="img-fullwidth" alt=""/>  
														</div>
														<div class="icons-holder icons-holder-middle">
															<div class="icons-holder-inner">
																<ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="staff-content">
														<h4 class="name"><a href="#">Mary Clinton</a></h4>
														<div class="speciality">Project Manager</div>
														<div class="staff-btn">
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tm-carousel-item">
										<div class="tm-staff staff-items type-staff-items status-publish">
											<div class="staff-inner">
												<div class="box-hover-effect">
													<div class="effect-wrapper">
														<div class="thumb gradient-effect">
															<img width="500" height="500" src="images/team/team_02.jpg" class="img-fullwidth" alt=""/>  
														</div>
														<div class="icons-holder icons-holder-middle">
															<div class="icons-holder-inner">
																<ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="staff-content">
														<h4 class="name"><a href="#">Mark Foster</a></h4>
														<div class="speciality">Relationship Officer</div>
														<div class="staff-btn">
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tm-carousel-item">
										<div class="tm-staff staff-items type-staff-items status-publish">
											<div class="staff-inner">
												<div class="box-hover-effect">
													<div class="effect-wrapper">
														<div class="thumb gradient-effect">
															<img width="500" height="500" src="images/team/team_03.jpg" class="img-fullwidth" alt=""/>  
														</div>
														<div class="icons-holder icons-holder-middle">
															<div class="icons-holder-inner">
																<ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-skype"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="staff-content">
														<h4 class="name"><a href="#">Miguel Mares</a></h4>
														<div class="speciality">Field Supervisor</div>
														<div class="staff-btn">
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tm-carousel-item">
										<div class="tm-staff staff-items type-staff-items status-publish">
											<div class="staff-inner">
												<div class="box-hover-effect">
													<div class="effect-wrapper">
														<div class="thumb gradient-effect">
															<img width="500" height="500" src="images/team/team_04.jpg" class="img-fullwidth" alt=""/>  
														</div>
														<div class="icons-holder icons-holder-middle">
															<div class="icons-holder-inner">
																<ul class="styled-icons icon-dark icon-theme-colored1 icon-circled icon-sm">
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
																	<li><a class="styled-icons-item" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="staff-content">
														<h4 class="name"><a href="#">Ashley Spence</a></h4>
														<div class="speciality">Field Cordeaenator</div>
														<div class="staff-btn">
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- end of the loop -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Client -->
{{--		<section class="">--}}
{{--			<div class="container pb-70">--}}
{{--				<div class="section-title">--}}
{{--					<div class="row justify-content-md-center">--}}
{{--						<div class="col-sm-8">--}}
{{--							<div class="tm-sc tm-sc-section-title section-title section-title-style1 text-center">--}}
{{--								<div class="title-wrapper">--}}
{{--									<h2 class="title">--}}
{{--										<span class="">Trusted</span>--}}
{{--										<span class="text-theme-colored1">Partners</span>--}}
{{--										<span class="">Worldwide</span>--}}
{{--									</h2>--}}
{{--									<div class="title-seperator-line"></div>--}}
{{--									<div class="paragraph">--}}
{{--										<p>We are very greatful and feel honoured to our all partners for being with us</p>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--				<div class="section-content">--}}
{{--					<div class="row">--}}
{{--						<div class="col-sm-12">--}}
{{--							<div class="tm-sc tm-sc-clients tm-sc-clients-carousel owl-dots-light-skin owl-dots-center  clients-animation-grayscale">--}}
{{--								<div class="owl-carousel owl-theme tm-owl-carousel-5col" data-autoplay="true" data-loop="true" data-duration="6000" data-margin="30">--}}
{{--									<!-- the loop -->--}}
{{--									<div class="item">--}}
{{--										<a target="_blank" href="#">--}}
{{--										<img src='images/clients/client1.png' alt='image'/></a>--}}
{{--									</div>--}}
{{--									<div class="item">--}}
{{--										<a target="_blank" href="#">--}}
{{--										<img src='images/clients/client2.png' alt='image'/></a>--}}
{{--									</div>--}}
{{--									<div class="item">--}}
{{--										<a target="_blank" href="#">--}}
{{--										<img src='images/clients/client3.png' alt='image'/></a>--}}
{{--									</div>--}}
{{--									<div class="item">--}}
{{--										<a target="_blank" href="#">--}}
{{--										<img src='images/clients/client4.png' alt='image'/></a>--}}
{{--									</div>--}}
{{--									<div class="item">--}}
{{--										<a target="_blank" href="#">--}}
{{--										<img src='images/clients/client5.png' alt='image'/></a>--}}
{{--									</div>--}}
{{--									<div class="item">--}}
{{--										<a target="_blank" href="#">--}}
{{--										<img src='images/clients/client6.png' alt='image'/></a>--}}
{{--									</div>--}}
{{--									<!-- end of the loop -->--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</section>--}}
	</div>
	<!-- end main-cgit stontent -->

@endsection