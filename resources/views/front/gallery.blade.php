@extends('front.layouts.default')

@section('content')

	<!-- Start main-content -->
	<div class="main-content">
		<!-- Section: home -->
		<section class="page-title divider layer-overlay overlay-dark-8 section-typo-light" data-tm-bg-img="images/bg/bg11.jpg">
			<div class="container pt-90 pb-90">
				<!-- Section Content -->
				<div class="section-content">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="title text-white">Photo Gallery</h2>
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

		<!-- Our Gallery -->
		<section class="layer-overlay overlay-white-5" data-tm-bg-img="images/bg/bg.png" data-tm-bg-color="#f7f6f5">
			<div class="container-fluid">
				<div class="section-content">
					<div class="row">
						<div class="col-md-12">
							<div class="tm-sc tm-sc-gallery tm-sc-gallery-grid gallery-style1-simple">
								<!-- Isotope Filter -->
								<div class="isotope-layout-filter filter-style-8 text-center" data-link-with="gallery-holder-596627">
									<a href="#" class="active" data-filter="*">All</a>
									<a href="#helping" class="" data-filter=".helping">Helping</a>
									<a href="#water" class="" data-filter=".water">Water</a>
									<a href="#foods" class="" data-filter=".foods">Foods</a>
									<a href="#charity" class="" data-filter=".charity">Charity</a>
								</div>
								<!-- End Isotope Filter -->
								<!-- Isotope Gallery Grid -->
								<div id="gallery-holder-596627" class="isotope-layout grid-4 gutter clearfix lightgallery-lightbox">
									<!-- the loop -->
									<!-- Isotope Item Start -->
									<div class="isotope-item helping water">
										<div class="tm-gallery box-hover-effect">
											<div class="effect-wrapper">
												<div class="thumb gradient-effect">
													<img src="images/gallery/1.jpg" alt=""/>          
												</div>
												<div class="overlay-shade shade-black"></div>
												<div class="text-holder text-holder-bottom-left">
													<div class="title">Pure Water</div>
												</div>
												<div class="icons-holder icons-holder-middle">
													<div class="icons-holder-inner">
														<div class="styled-icons icon-dark icon-circled icon-theme-colored1">
															<a class="lightgallery-trigger styled-icons-item" href="images/gallery/1.jpg" title="Gallery 1" data-exthumbimage="images/gallery/1.jpg" data-src="images/gallery/1.jpg">
																<i class="fa fa-plus"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Isotope Item End -->
									<!-- Isotope Item Start -->
									<div class="isotope-item foods">
										<div class="tm-gallery box-hover-effect">
											<div class="effect-wrapper">
												<div class="thumb gradient-effect">
													<img src="images/gallery/2.jpg" alt=""/>
												</div>
												<div class="overlay-shade shade-black"></div>
												<div class="text-holder text-holder-bottom-left">
													<div class="title">Needed Adoption</div>
												</div>
												<div class="icons-holder icons-holder-middle">
													<div class="icons-holder-inner">
														<div class="styled-icons icon-dark icon-circled icon-theme-colored1">
															<a class="lightgallery-trigger styled-icons-item" href="images/gallery/2.jpg" title="Gallery 2" data-exthumbimage="images/gallery/2.jpg" data-src="images/gallery/2.jpg">
																<i class="fa fa-plus"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Isotope Item End -->
									<!-- Isotope Item Start -->
									<div class="isotope-item charity helping water">
										<div class="tm-gallery box-hover-effect">
											<div class="effect-wrapper">
												<div class="thumb gradient-effect">
													<img src="images/gallery/3.jpg" alt=""/>         
												</div>
												<div class="overlay-shade shade-black"></div>
												<div class="text-holder text-holder-bottom-left">
													<div class="title">Medicine Supply</div>
												</div>
												<div class="icons-holder icons-holder-middle">
													<div class="icons-holder-inner">
														<div class="styled-icons icon-dark icon-circled icon-theme-colored1">
															<a class="lightgallery-trigger styled-icons-item" href="images/gallery/3.jpg" title="Gallery 3" data-exthumbimage="images/gallery/3.jpg" data-src="images/gallery/3.jpg">
																<i class="fa fa-plus"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Isotope Item End -->
									<!-- Isotope Item Start -->
									<div class="isotope-item helping">
										<div class="tm-gallery box-hover-effect">
											<div class="effect-wrapper">
												<div class="thumb gradient-effect">
													<img src="images/gallery/4.jpg" alt=""/>          
												</div>
												<div class="overlay-shade shade-black"></div>
												<div class="text-holder text-holder-bottom-left">
													<div class="title">Education For All</div>
												</div>
												<div class="icons-holder icons-holder-middle">
													<div class="icons-holder-inner">
														<div class="styled-icons icon-dark icon-circled icon-theme-colored1">
															<a class="lightgallery-trigger styled-icons-item" href="images/gallery/4.jpg" title="Gallery 4" data-exthumbimage="images/gallery/4.jpg" data-src="images/gallery/4.jpg">
																<i class="fa fa-plus"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Isotope Item End -->
									<!-- Isotope Item Start -->
									<div class="isotope-item charity foods">
										<div class="tm-gallery box-hover-effect">
											<div class="effect-wrapper">
												<div class="thumb gradient-effect">
													<img src="images/gallery/5.jpg" alt=""/>          
												</div>
												<div class="overlay-shade shade-black"></div>
												<div class="text-holder text-holder-bottom-left">
													<div class="title">Provide Food</div>
												</div>
												<div class="icons-holder icons-holder-middle">
													<div class="icons-holder-inner">
														<div class="styled-icons icon-dark icon-circled icon-theme-colored1">
															<a class="lightgallery-trigger styled-icons-item" href="images/gallery/5.jpg" title="Gallery 5" data-exthumbimage="images/gallery/5.jpg" data-src="images/gallery/5.jpg">
																<i class="fa fa-plus"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Isotope Item End -->
									<!-- Isotope Item Start -->
									<div class="isotope-item foods helping">
										<div class="tm-gallery box-hover-effect">
											<div class="effect-wrapper">
												<div class="thumb gradient-effect">
													<img src="images/gallery/6.jpg" alt=""/>          
												</div>
												<div class="overlay-shade shade-black"></div>
												<div class="text-holder text-holder-bottom-left">
													<div class="title">Shelter For Homeless</div>
												</div>
												<div class="icons-holder icons-holder-middle">
													<div class="icons-holder-inner">
														<div class="styled-icons icon-dark icon-circled icon-theme-colored1">
															<a class="lightgallery-trigger styled-icons-item" href="images/gallery/6.jpg" title="Gallery 6" data-exthumbimage="images/gallery/6.jpg" data-src="images/gallery/6.jpg">
																<i class="fa fa-plus"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Isotope Item End -->
									<!-- Isotope Item Start -->
									<div class="isotope-item helping water">
										<div class="tm-gallery box-hover-effect">
											<div class="effect-wrapper">
												<div class="thumb gradient-effect">
													<img src="images/gallery/7.jpg" alt=""/>         
												</div>
												<div class="overlay-shade shade-black"></div>
												<div class="text-holder text-holder-bottom-left">
													<div class="title">Helping Hand</div>
												</div>
												<div class="icons-holder icons-holder-middle">
													<div class="icons-holder-inner">
														<div class="styled-icons icon-dark icon-circled icon-theme-colored1">
															<a class="lightgallery-trigger styled-icons-item" href="images/gallery/7.jpg" title="Gallery 7" data-exthumbimage="images/gallery/7.jpg" data-src="images/gallery/7.jpg">
																<i class="fa fa-plus"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Isotope Item End -->
									<!-- Isotope Item Start -->
									<div class="isotope-item foods">
										<div class="tm-gallery box-hover-effect">
											<div class="effect-wrapper">
												<div class="thumb gradient-effect">
													<img src="images/gallery/8.jpg" alt=""/>         
												</div>
												<div class="overlay-shade shade-black"></div>
												<div class="text-holder text-holder-bottom-left">
													<div class="title">Stop Abouse</div>
												</div>
												<div class="icons-holder icons-holder-middle">
													<div class="icons-holder-inner">
														<div class="styled-icons icon-dark icon-circled icon-theme-colored1">
															<a class="lightgallery-trigger styled-icons-item" href="images/gallery/8.jpg" title="Gallery 8" data-exthumbimage="images/gallery/8.jpg" data-src="images/gallery/8.jpg">
																<i class="fa fa-plus"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Isotope Item End -->
									<!-- end of the loop -->
								</div>
								<!-- End Isotope Gallery Grid -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- end main-content -->

@endsection