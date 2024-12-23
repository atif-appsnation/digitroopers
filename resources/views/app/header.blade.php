<!DOCTYPE html>
<html lang="en" class="no-js">

<head>


	@foreach($metatitle as $item)
	<title>{{ $item['title'] }}</title>
	@endforeach
	@foreach($metatag as $item)

	{!! htmlspecialchars_decode($item['tags']) !!}
	@endforeach

	<!--<title>Digital Marketing Services with Guaranteed Results | DigiTroopers</title>-->
	<!--<meta name="description" content="Digital Marketing Agency who offers Digital Marketing Services like Web Development, Graphic Designing, Social Media Marketing, SEO and Google Ads Services.">-->
	<!--<meta name="keywords" content="Graphic Designing Companies, SEO Marketing, SMM Service, Email Campaign Service, Ecommerce Website Management, PPC Marketing Company">-->
	<!--<meta name="author" content="digitroopers">-->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="{{asset('images/favicon.webp')}}" rel="icon">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/plugin.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/swiper.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/all.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/manrope.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('css/darkmode.css')}}" rel="stylesheet">
	<link href="{{asset('css/gdpr-cookie.css')}}" rel="stylesheet">
	<link href="{{asset('css/magnific-popup.min.css')}}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">

	<!-- Meta Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '596119242764284');
		fbq('track', 'PageView');
	</script>
	<noscript>
		<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=596119242764284&ev=PageView&noscript=1" />
	</noscript>
	<!-- End Meta Pixel Code -->

</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFQVC8Q" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


	<!-- Custom mouse start-->
	<div class="mouse-cursor cursor"></div>
	<div class="mouse-cursor cursor-follow"></div>
	<!-- Custom mouse end-->


	<!-- Start Side Menu -->
	<div class="side-menu -medium -right -space --center">
		<ul class="sm-list ">
			<li class="sm-item">
				<a href="" class="white black">
					<span class="sm-icon">
						<i class="fas fa-comment"></i>
					</span>
					<span class="sm-label">Chat with us</span>
				</a>
			</li>
			<li class="sm-item">
				<a href="tel:+12535284057" class="white black">
					<span class="sm-icon">
						<i class="fas fa-phone-alt"></i>
					</span>
					<span class="sm-label">+1 (253) 528-4057</span>
				</a>
			</li>
			<li class="sm-item">
				<a href="{{url('/contactus')}}" class="white black">
					<span class="sm-icon">
						<i class="fas fa-paper-plane"></i>
					</span>
					<span class="sm-label">Get a Quote</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- End Side Menu -->

	<!--Start Header -->
	<header class="nav-bg-b main-header navfix fixed-top menu-white">
		<div class="container-fluid m-pad">
			<div class="menu-header">
				<div class="dsk-logo">
					<a class="nav-brand" href="{{url('/')}}">
						<img src="{{asset('images/digitroopers-white-logo.webp')}}" alt="Logo" class="mega-white-logo" />
						<img src="{{asset('images/digitroopers-logo.webp')}}" alt="Logo" class="mega-darks-logo" />
					</a>
				</div>
				<div class="custom-nav" role="navigation">
					<ul class="nav-list">
						<li class="sbmenu">
							<a href="{{url('/')}}" class="menu-links first-menu">Home</a>
						</li>
						<li class="sbmenu">
							<a href="{{url('/about-us')}}" class="menu-links">About Us</a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="row">
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">About Us</h5>
												<div class="menu-item-description">A full-cycle software and mobile app development company with a world-class team of innovators.</div>
											</div>
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">Explore</h5>
												<ul>
													<li>
														<a href="{{url('/our-process')}}">
															<div class="menu-item-title">Our Process</div>
															<div class="menu-item-description">Our Agile Process</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/clients')}}">
															<div class="menu-item-title">Clients</div>
															<div class="menu-item-description">Our Global Clients</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">&nbsp;</h5>
												<ul>
													<!-- <li>
														<a href="{{url('/testimonial')}}">
															<div class="menu-item-title">Testimonials</div>
															<div class="menu-item-description">What our clients have to say</div>
														</a>
													</li> -->
													<li class="">
														<a href="{{url('/career')}}">
															<div class="menu-item-title">Careers</div>
															<div class="menu-item-description">Build your careers with us</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-3 megamenu group-dark">
												<div class="row my-auto">
													<div class="col-md-6">
														<div class="companydetailmenu">
															<h4>12+</h4>
															<h5>Years</h5>
														</div>
													</div>
													<div class="col-md-6">
														<div class="companydetailmenu">
															<h4>200+</h4>
															<h5>Employees</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="sbmenu">
							<a href="#" class="menu-links">Services</a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="row">
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">Our Services</h5>
												<div class="menu-item-description">Leveraging cutting-edge technologies to build industry-leading digital products.</div>
											</div>
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">Services</h5>
												<ul>
													<li>
														<a href="{{url('/graphic-design')}}">
															<div class="menu-item-title">Designing</div>
															<div class="menu-item-description">Logo, Digital-Banner, Web(UI/UX), Business Card</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/website')}}">
															<div class="menu-item-title">Web Development</div>
															<div class="menu-item-description">Front-End, Back-End and Full-Stack</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/social-media')}}">
															<div class="menu-item-title">Social Media Marketing</div>
															<div class="menu-item-description">Social Networking, Blogging/Community Building</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/seo')}}">
															<div class="menu-item-title">SEO Management</div>
															<div class="menu-item-description">On-Page, Off-Page, Technical</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-3 megamenu">
												<h5 class="megamenu-heading">&nbsp;</h5>
												<ul>
													<li>
														<a href="{{url('/email-marketing')}}">
															<div class="menu-item-title">Email Marketing</div>
															<div class="menu-item-description">Setup Email and Community Management</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/paid-marketing')}}">
															<div class="menu-item-title">PPC Management Services</div>
															<div class="menu-item-description">Search Ads, Display Ads, Video Ads and Shopping Ads</div>
														</a>
													</li>
													<li class="pt-4">
														<a href="{{url('/ecommerce')}}">
															<div class="menu-item-title">E-Commerce Project Management</div>
															<div class="menu-item-description">B2B, B2C, C2C and C2B</div>
														</a>
													</li>
												</ul>
											</div>
											<div class="col-md-3 megamenu dark-group">
												<h5 class="megamenu-heading">How We Work</h5>
												<ul>
													<li>
														<a>
															<div class="menu-item-title">Idea Analysis</div>
															<div class="menu-item-description">Exploring project ideas</div>
														</a>
													</li>
													<li class="pt-4">
														<a>
															<div class="menu-item-title">Wireframing and Architectural Planning</div>
															<div class="menu-item-description">Project wireframe and planning</div>
														</a>
													</li>
													<li class="pt-4">
														<a>
															<div class="menu-item-title">User Interface Design</div>
															<div class="menu-item-description">Intuitive and engaging designs</div>
														</a>
													</li>
													<li class="pt-4">
														<a>
															<div class="menu-item-title">Functional Model Development</div>
															<div class="menu-item-description">Functional development process</div>
														</a>
													</li>
													<li class="pt-4">
														<a>
															<div class="menu-item-title">Quality Assurance</div>
															<div class="menu-item-description">Incremental testing and QA</div>
														</a>
													</li>
													<li class="pt-4">
														<a>
															<div class="menu-item-title">Deployment</div>
															<div class="menu-item-description">Full-function product delivery</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="sbmenu rpdropdown">
							<a href="{{url('/portfolio')}}" class="menu-links first-menu">Portfolio</a>
						</li>
						<li class="sbmenu rpdropdown">
							<a href="{{url('/package')}}" class="menu-links first-menu">Packages</a>
						</li>
						<li class="sbmenu">
							<a href="https://blog.digitroopers.com/" class="menu-links first-menu">Insights</a>
						</li>
						<li class="sbmenu">
							<a href="{{url('/contactus')}}" class="menu-links first-menu">Contact Us</a>
						</li>
						<li> <a href="#" class="menu-links right-bddr">&nbsp;</a>
							<!--menu right border-->
						<li class="contact-show"> <a href="#" class="btn-round- trngl btn-br bg-btn1"><i class="fas fa-phone-alt"></i></a>
							<div class="contact-inquiry">
								<div class="contact-info-">
									<div class="contct-heading">Contact Us</div>
									<!-- <div class="inquiry-card-nn hrbg">
										<div class="title-inq-c">FOR HR DEPARTMENT</div>
										<ul>
											<li class="mb0"><img src="images/flags/us.svg" alt="us office" class="flags-size"> <a href="tel:1111111111">+1 (949) 981-0151</a></li>
										</ul>
									</div> -->
									<div class="inquiry-card-nn">
										<!-- <div class="title-inq-c">FOR SALES DEPARTMENT</div> -->
										<ul>
											<li><a href="tel:tel:+12535284057"><img src="{{asset('images/flags/us.webp')}}" alt="USA office" class="flags-size"> +1 (253) 528-4057 </a></li>
											<!-- <li><a href="tel:+19499810151"><img src="{{asset('images/flags/us.webp')}}" alt="USA office" class="flags-size"> +1 (949) 981-0151</a></li> -->
											<li><a href="tel:+966507438993"><img src="{{asset('images/flags/sa.webp')}}" alt="Saudi Arabia office" class="flags-size"> +966 507438993 </a> </li>
											<!-- <li><a href="tel:+92309221104"><img src="{{asset('images/flags/pk.webp')}}" alt="Pakistan office" class="flags-size"> +92 (309) 222-1104 </a></li> -->
											<li><i class="fas fa-envelope"></i><a href="mailto:iinfo@digitroopers.com">info@digitroopers.com</a></li>
											<li><i class="fas fa-envelope"></i><a href="mailto:sales@digitroopers.com">sales@digitroopers.com</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a data-toggle="modal" data-target="#myModal" class="btn-br btn-main bg-btn lnk" style="color:white">Request A Quote </a>
						</li>
					</ul>
				</div>
				<div class="mobile-menu2">
					<ul class="mob-nav2">
						<li>
							<a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1" data-toggle="modal" data-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a>
						</li>
						<li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
					</ul>
				</div>
			</div>

			<!--Start Mobile Menu-->
			<nav id="main-nav">
				<ul class="first-nav">
					<li>
						<a href="{{url('/')}}">Home</a>
					</li>
					<li>
						<a href="{{url('/aboutus')}}">About Us</a>
					</li>
					<li>
						<a href="#">Services</a>
						<ul>
							<li>
								<a href="{{url('/graphic-design')}}">Graphic Design</a>
							</li>
							<li>
								<a href="{{url('/website')}}">Website Development</a>
							</li>
							<li>
								<a href="{{url('/seo')}}">Search Engine Optimization</a>
							</li>
							<li>
								<a href="{{url('/social-media')}}">Social Media Marketing</a>
							</li>
							<li>
								<a href="{{url('/email-marketing')}}">Email Marketing</a>
							</li>
							<li>
								<a href="{{url('/ecommerce')}}">E-Commerce Management</a>
							</li>
							<li>
								<a href="{{url('/paid-marketing')}}">Google Ads & PPC</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{url('/portfolio')}}">Portfolio</a>
					</li>
					<li>
						<a href="{{url('/insights')}}">Insights</a>
					</li>
					<li>
						<a href="{{url('/career')}}">Career</a>
					</li>
					<li>
						<a href="{{url('/ourprocess')}}">Our Process</a>
					</li>
					<!-- <li>
						<a href="{{url('/testimonial')}}">Testimonial</a>
					</li> -->
					<li>
						<a href="{{url('/clients')}}">Clients</a>
					</li>
					<li>
						<a href="{{url('/contactus')}}">Contact Us</a>
					</li>
				</ul>
				<ul class="bottom-nav">
					<li class="prb">
						<a href="tel:+923432003860">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
								<path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
                                c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
                                c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
                                C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
							</svg>
						</a>
					</li>
					<li class="prb">
						<a href="mailto:info@digitroopers.com">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
								<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
								<path d="M0 0h24v24H0z" fill="none" />
							</svg>
						</a>
					</li>
				</ul>
			</nav>
			<!--End Mobile Menu-->
		</div>
	</header>
	<!--End Header -->

	<!--Start Mobile Contact-->
	<div class="popup-modal1">
		<div class="modal" id="menu-popup">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<div class="common-heading">
							<h4 class="mt0 mb0">Get A Quote</h4>
						</div>
						<button type="button" class="closes" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-block fdgn2 mt10 mb10">
					{!! NoCaptcha::renderJs() !!}

							<form action="{{route('leads')}}" method="post" id="contactForm33" data-toggle="validator" class="shake">
								@csrf
								<div class="row">
									<div class="form-group col-sm-12">
										<input type="text" name="name" id="name" placeholder="Enter name" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<input type="email" name="email" id="email" placeholder="Enter email" required>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<input type="text" name="mobile" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<select name="service" id="Dtype" required>
											<option value="">Select Service</option>
											<option value="designing">Designing</option>
											<option value="development">Development</option>
											<option value="social-media">Social Media</option>
											<option value="seo">SEO</option>
											<option value="email-marketing">Email Marketing</option>
											<option value="paind-marketing">Paid Marketing</option>
											<option value="ecommerce-managment">E-Commerce Management</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<input type="text" id="company" name="company" placeholder="Enter company name (optional)" required data-error="">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<input type="text" id="subject" name="subject" placeholder="Enter subject" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<textarea id="message" rows="5" name="message" placeholder="Enter your message" required></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="form-group col-sm-12 captchaContainer3" id="captchaContainer">
								{!! NoCaptcha::display() !!}
							</div>
								<div class="modal-footer">
									<button type="submit" id="form-submit" name="submit" class="btn lnk btn-main bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Mobile Contact-->

	<!--Start Quote contact-->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog modal-lg">

			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Get A Quote</h4>
					<button type="button" class="close" data-dismiss="modal">×</button>
				</div>

				<div class="modal-body">
					<div class="form-block">
					{!! NoCaptcha::renderJs() !!}
						<form action="{{route('leads')}}" method="post" id="contactForm1" data-toggle="validator" class="shake">
							@csrf
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" id="name" name="name" placeholder="Enter name" required data-error="Please fill Out">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-6">
									<input type="email" id="email" name="email" placeholder="Enter email" required>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-6">
									<select name="service" id="Dtype" required>
										<option value="">Select Service</option>
										<option value="designing">Designing</option>
										<option value="development">Development</option>
										<option value="social-media">Social Media</option>
										<option value="seo">SEO</option>
										<option value="email-marketing">Email Marketing</option>
										<option value="paid-marketing">Paid Marketing</option>
										<option value="ecommerce-managment">E-Commerce Management</option>
									</select>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="company" id="company" placeholder="Enter company name (optional)" required data-error="">
								</div>
								<div class="form-group col-sm-6">
									<input type="text" id="subject" name="subject" placeholder="Enter subject" required data-error="Please fill Out">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="form-group">
								<textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group mb-2 captchaContainer" id="captchaContainer" style="display: none;">
								{!! NoCaptcha::display() !!}
							</div>
							<div class="modal-footer">
								<button type="submit" name="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	@if($message=Session::get('success'))
	<div class="alert alert-success alert-block" id="">

		<strong>{{$message}}</strong>
	</div>
	@endif

	<!--End Quote contact-->