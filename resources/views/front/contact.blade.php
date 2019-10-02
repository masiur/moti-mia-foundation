@extends('front.layouts.default')

@section('content')

<!-- Start main-content -->
	<div class="main-content">
		<!-- Section: home -->
		<section class="page-title divider layer-overlay overlay-dark-8 section-typo-light" data-tm-bg-img="images/bg/bg8.jpg">
			<div class="container pt-90 pb-90">
				<!-- Section Content -->
				<div class="section-content">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="title">Contact</h2>
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

    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-md-30">
              <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top feature-box bg-white">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-md icon-dark icon-circled mb-15">
                    <i class="icomoon-global"></i>
                  </a>
                </div>
                <div class="icon-text">
                  <h3 class="icon-box-title ">
                    Office Location
                  </h3>
                  <div class="content">
                    <p>121 King Street, Collins Street,&nbsp; 3000 Australia</p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-md-30">
              <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top feature-box bg-white">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-md icon-dark icon-circled mb-15">
                    <i class="icomoon-Phone2"></i>
                  </a>
                </div>
                <div class="icon-text">
                  <h3 class="icon-box-title ">
                    Phone No
                  </h3>
                  <div class="content">
                    <p>1-202-555-0149, 202-555-0149, +1-202-555-0136</p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top feature-box bg-white">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-md icon-dark icon-circled mb-15">
                    <i class="icomoon-Mail"></i>
                  </a>
                </div>
                <div class="icon-text">
                  <h3 class="icon-box-title ">
                    Email Us
                  </h3>
                  <div class="content">
                    <p>you@yourdomain.com, me@yourdomain.com</p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Contact -->
    <section id="contact">
      <div class="container pb-sm-10">
        <div class="row">
          <div class="col-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496.556775569473!2d144.95479118909844!3d-37.81548660764023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1562002563953!5m2!1sen!2sbd" width="600" height="600" allowfullscreen></iframe>
          </div>
          <div class="col-md-7">
            <h3 class="line-bottom mt-sm-30 mb-30">Interested in discussing?</h3>
            <p class="lead">We offer a no cost, no obligation consultation so we can get to know you and your goals.</p>

            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="http://html.kodesolution.live/html/nonprofit/charity/charito/v2/demo/includes/sendmail.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored1 btn-flat" data-loading-text="Please wait...">Send your message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
	</div>
	<!-- end main-content -->

@endsection