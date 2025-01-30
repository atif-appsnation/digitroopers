@extends('app.main')
@section('content')
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-packages">
	<div class="text-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 v-center">
					<!-- <div class="bread-inner">
						<div class="bread-title">
							<h2>Pricing Plan</h2>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->
<!--Start Pricing-->
<section class="block-a1 py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading ptag">
					<span>Pricing</span>
					<h2>Pricing Table</h2>
				</div>
			</div>
		</div>
		<!-- Nav pills -->
		<ul class="nav nav-pills justify-content-center">
			<li class="nav-item">
				<a class="nav-link active" data-bs-toggle="pill" href="#design">Design</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#web-development">Web Development</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#social-media">Social Media</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#seo">SEO</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#email-marketing">Email Marketing</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#paid-marketing">Paid Marketing</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#ecommerce">E-Commerce Management</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#logo-design">Logo Design</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#animation">Animation</a>
			</li>
			<!--<li class="nav-item">-->
			<!--	<a class="nav-link" data-bs-toggle="pill" href="#game-development">Game Development</a>-->
			<!--</li>-->
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#ecommerce-web">E-Commerce Web</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane container active" id="design">
				<div class="row justify-content-center">
					@foreach($pricingdesign as $k=>$items)
					@if($k==1)

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											{!! $items['description'] !!}
											<!-- <li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li> -->
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										<!-- <ul>
												<li>Social Media Marketing</li>
												<li>2.100 Keywords</li>
												<li>One Way Link Building</li>
												<li>5 Free Optimization</li>
												<li>3 Press Releases</li>
											</ul> -->
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach


					<!-- <div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Personal</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div> -->
					<!-- <div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">Advance</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div> -->
					<!-- <div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Ultimate</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div> -->
				</div>
			</div>
			<div class="tab-pane container fade" id="web-development">
				<div class="row justify-content-center">

					@foreach($pricingweb as $k=>$items)
					@if($k==1)

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											{!! $items['description'] !!}
											<!-- <li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li> -->
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										<!-- <ul>
												<li>Social Media Marketing</li>
												<li>2.100 Keywords</li>
												<li>One Way Link Building</li>
												<li>5 Free Optimization</li>
												<li>3 Press Releases</li>
											</ul> -->
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach
					<!-- <div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Basic Web Package</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 398</h2>
								<h2>$ 199</h2>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>2 Stock Images</li>
											<li>3 Page Website</li>
											<li>1 jQuery Slider Banner</li>
											<li>Contact/Query Form</li>
											<li>48 to 72 hours TAT</li>
											<li>Complete Deployment</li>
											<li>100% Satisfaction Guarantee</li>
											<li>100% Unique Design Guarantee</li>
											<li>100% Money Back Guarantee *</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">Startup Web Package</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 596</h2>
								<h2>$ 399</h2>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>5 Stock Images</li>
											<li>5 Page Website</li>
											<li>3 Banner Design</li>
											<li>1 jQuery Slider Banner</li>
											<li>FREE Google Friendly Sitemap</li>
											<li>48 to 72 hours TAT</li>
											<li>100% Satisfaction Guarantee</li>
											<li>100% Unique Design Guarantee</li>
											<li>100% Money Back Guarantee *</li>
											<li>Mobile Responsive will be Additional $200 *</li>
											<li>CMS will be Additional $250 *</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Ultimate</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 1,398</h2>
								<h2>$ 699</h2>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>10 Unique Pages Website</li>
											<li>CMS / Admin Panel Support</li>
											<li>8 Stock images</li>
											<li>5 Banner Designs</li>
											<li>1 jQuery Slider Banner</li>
											<li>FREE Google Friendly Sitemap</li>
											<li>48 to 72 hours TAT</li>
											<li>Complete Deployment</li>
											<li>100% Satisfaction Guarantee</li>
											<li>100% Unique Design Guarantee</li>
											<li>100% Money Back Guarantee</li>
											<li>Mobile Responsive will be Additional $200 *</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Elite Website Package</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 2,598</h2>
								<h2>$ 1,299</h2>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Upto 15 Unique Pages Website</li>
											<li>Conceptual and Dynamic Website</li>
											<li>Mobile Responsive</li>
											<li>Online Reservation/Appointment Tool (Optional)</li>
											<li>Online Payment Integration (Optional)</li>
											<li>Custom Forms</li>
											<li>Lead Capturing Forms (Optional)</li>
											<li>Striking Hover Effects</li>
											<li>Newsletter Subscription (Optional)</li>
											<li>Newsfeed Integration</li>
											<li>Social Media Integration</li>
											<li>Search Engine Submission</li>
											<li>5 Stock Images</li>
											<li>3 Unique Banner Design</li>
											<li>1 jQuery Slider Banner</li>
											<li>48 to 72 hours TAT</li>
											<li>Complete Deployment</li>
											<li>100% Satisfaction Guarantee</li>
											<li>100% Unique Design Guarantee</li>
											<li>100% Money Back Guarantee</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">Corporate Website Package</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 3,988</h2>
								<h2>$ 1,999</h2>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>15 to 20 Pages Website</li>
											<li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
											<li>Custom WP (or) Custom PHP Development</li>
											<li>1 jQuery Slider Banner</li>
											<li>Up to 10 Custom Made Banner Designs</li>
											<li>10 Stock Images</li>
											<li>Unlimited Revisions</li>
											<li>Special Hoover Effects</li>
											<li>Content Management System (CMS)</li>
											<li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
											<li>Online Payment Integration (Optional)</li>
											<li>Multi Lingual (Optional)</li>
											<li>Custom Dynamic Forms (Optional)</li>
											<li>Signup Area (For Newsletters, Offers etc.)</li>
											<li>Search Bar</li>
											<li>Live Feeds of Social Networks integration (Optional)</li>
											<li>Mobile Responsive</li>
											<li>FREE 5 Years Domain Name</li>
											<li>Free Google Friendly Sitemap</li>
											<li>Search Engine Submission</li>
											<li>Industry Specified Team of Expert Designers and Developers</li>
											<li>Complete Deployment</li>
											<li>Dedicated Accounts Manager</li>
											<li>100% Ownership Rights</li>
											<li>100% Satisfaction Guarantee</li>
											<li>100% Unique Design Guarantee</li>
											<li>100% Money Back Guarantee *</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Business Website Package</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 4,998</h2>
								<h2>$ 2,499</h2>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>15 Seconds 2D Explainer Video</li>
											<li>Voice - Over &amp; Sound Effects</li>
											<li>Professional Script Writing</li>
											<li>Storyboard</li>
											<li>SEO Meta Tags</li>
											<li>15 to 20 Pages Website</li>
											<li>Custom Made, Interactive, Dynamic &amp; High End Design</li>
											<li>Custom WP (or) Custom PHP Development</li>
											<li>1 jQuery Slider Banner</li>
											<li>Up to 10 Custom Made Banner Designs</li>
											<li>10 Stock Images</li>
											<li>Unlimited Revisions</li>
											<li>Special Hoover Effects</li>
											<li>Content Management System (CMS)</li>
											<li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>
											<li>Online Payment Integration (Optional)</li>
											<li>Multi Lingual (Optional)</li>
											<li>Custom Dynamic Forms (Optional)</li>
											<li>Signup Area (For Newsletters, Offers etc.)</li>
											<li>Search Bar</li>
											<li>Live Feeds of Social Networks integration (Optional)</li>
											<li>Mobile Responsive</li>
											<li>FREE 5 Years Domain Name</li>
											<li>Free Google Friendly Sitemap</li>
											<li>Search Engine Submission</li>
											<li>Industry Specified Team of Expert Designers and Developers</li>
											<li>Complete Deployment</li>
											<li>Dedicated Accounts Manager</li>
											<li>100% Ownership Rights</li>
											<li>100% Satisfaction Guarantee</li>
											<li>100% Unique Design Guarantee</li>
											<li>100% Money Back Guarantee *</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div> -->
				</div>
			</div>
			<div class="tab-pane container fade" id="social-media">
				<div class="row justify-content-center">
					@foreach($pricingsocial as $k=>$items)
					@if($k==1)

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											{!! $items['description'] !!}
											<!-- <li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li> -->
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										<!-- <ul>
												<li>Social Media Marketing</li>
												<li>2.100 Keywords</li>
												<li>One Way Link Building</li>
												<li>5 Free Optimization</li>
												<li>3 Press Releases</li>
											</ul> -->
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach
					<!-- <div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Personal</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">Advance</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Ultimate</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div> -->
				</div>
			</div>
			<div class="tab-pane container fade" id="seo">
				<div class="row justify-content-center">
					@foreach($pricingseo as $k=>$items)
					@if($k==1)


					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											{!! $items['description'] !!}
											<!-- <li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li> -->
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										<!-- <ul>
												<li>Social Media Marketing</li>
												<li>2.100 Keywords</li>
												<li>One Way Link Building</li>
												<li>5 Free Optimization</li>
												<li>3 Press Releases</li>
											</ul> -->
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach
					<!-- <div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Startup Plan</span>
								<span class="titles">Simple Start</span>
								<p class="title-sub">Suitable for newly formed organizations or small incubated startups</p>
								<h2>$ 350</h2>
								<p class="duration">First Month</p>
								<div class="details scrollbar">
									<ul>
										<li><strong><i>Campaign Setup And Optimization</i></strong> </li>
										<li>Website Audit</li>
										<li>Pages Optimized <strong>(10 pages)</strong> </li>
										<li><strong>15</strong> Selected Keywords Targeting </li>
										<li>Keyword Research </li>
										<li>Keyword Grouping </li>
										<li>Keyword Mapping </li>
										<li><strong><i>On-Page Optimization</i></strong> </li>
										<li>SEO Road Map</li>
										<li>Blog Creation</li>
										<li>Webpage Copywriting (<strong>3 pages</strong> , <strong>350 words per page</strong> )</li>
										<li>Title Tag Optimization (<strong>10</strong> titles)</li>
										<li>Meta Description Optimization (<strong>10 meta description</strong> )</li>
										<li>Meta Keyword Optimization (<strong>10 meta keywords</strong> )</li>
										<li>Domain Redirect Optimization (<strong>10 domain redirects</strong> )</li>
										<li>xml Sitemap Optimization</li>
										<li>Robots.txt Check</li>
										<li>URL Rewrites (<strong>10 URL rewrites</strong> )</li>
										<li>Broken Link Report</li>
										<li><strong><i>Rich Snippet Recommendations </i></strong> </li>
										<li>Breadcrumbs</li>
										<li><strong><i>Initial Off-Page SEO</i></strong> </li>
										<li>Social Bookmarking</li>
										<li>Slide Share Marketing</li>
										<li>Forums/FAQ’s</li>
										<li>Link Building</li>
										<li>Directory Submission</li>
										<li>Local Business Listings</li>
									</ul>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<p class="populartag">Popular</p>
								<span class="title mt-1">Scaling Plan</span>
								<span class="titles">Essentials</span>
								<p class="title-sub">For medium-sized stable organizations looking to climb up the corporate ladder.</p>
								<h2>$ 700</h2>
								<p class="duration">First Month</p>
								<div class="details scrollbar">
									<ul>
										<li><strong><i></i></strong> </li>
										<li>Business Analysis</li>
										<li>Consumer Analysis </li>
										<li>Competitor Analysis </li>
										<li><strong>35</strong> Selected Keywords Targeting </li>
										<li><strong>15</strong> Pages Keyword Targeted</li>
										<li><strong><i>Webpage Optimization</i></strong> </li>
										<li>Meta Tags Creation</li>
										<li>Keyword Optimization </li>
										<li>Image Optimization </li>
										<li>Inclusion of anchors</li>
										<li><strong><i>Tracking &amp; Analysis</i></strong> </li>
										<li>Google Analytics Installation</li>
										<li>Google Webmaster Installation </li>
										<li>Call To Action Plan </li>
										<li>Creation of Sitemaps</li>
										<li><strong><i>Reporting</i></strong> </li>
										<li>Monthly Reporting </li>
										<li>Recommendation </li>
										<li>Email Support </li>
										<li>Phone Support</li>
										<li><strong><i>Off Page Optimization</i></strong></li>
										<li>Social Bookmarking</li>
										<li>Slide Share Marketing </li>
										<li>Forums/FAQ’s </li>
										<li>Link Building </li>
										<li>Directory Submission </li>
										<li>Local Business Listings</li>
									</ul>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Venture Plan</span>
								<span class="titles">Business Plus</span>
								<p class="title-sub">For pre-established businesses that aim to maintain their presence and claim the crown.</p>
								<h2>$ 1,200</h2>
								<p class="duration">First Month</p>
								<div class="details scrollbar">
									<ul>
										<li><strong><i>Prior Analysis</i></strong> </li>
										<li>Business Analysis</li>
										<li>Consumer Analysis </li>
										<li>Competitor Analysis </li>
										<li>60+ Selected Keywords Targeting </li>
										<li>30 Pages Keyword Targeted</li>
										<li><strong><i>Webpage Optimization</i></strong> </li>
										<li>Meta Tags Creation</li>
										<li>Keyword Optimization </li>
										<li>Image Optimization </li>
										<li>Inclusion of anchors Tags </li>
										<li>Inclusion of anchors Indexing Modifications</li>
										<li><strong><i>Tracking &amp; Analysis</i></strong> </li>
										<li>Google Places Inclusions</li>
										<li>Google Analytics Installation</li>
										<li>Google Webmaster Installation </li>
										<li>Call To Action Plan </li>
										<li>Creation of Sitemaps</li>
										<li><strong><i>Reporting</i></strong> </li>
										<li>Monthly Reporting </li>
										<li>Recommendation </li>
										<li>Email Support </li>
										<li>Phone Support</li>
										<li><strong><i>Off Page Optimization</i></strong> </li>
										<li>Social Bookmarking</li>
										<li>Slide Share Marketing </li>
										<li>Forums/FAQ’s </li>
										<li>Link Building </li>
										<li>Directory Submission </li>
										<li>Local Business Listings</li>
									</ul>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div> -->
				</div>
			</div>
			<div class="tab-pane container fade" id="email-marketing">
				<div class="row justify-content-center">

				@foreach($pricingemail as $k=>$items)
					@if($k==1)

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
										{!! $items['description'] !!}
											<!-- <li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li> -->
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										<!-- <ul>
												<li>Social Media Marketing</li>
												<li>2.100 Keywords</li>
												<li>One Way Link Building</li>
												<li>5 Free Optimization</li>
												<li>3 Press Releases</li>
											</ul> -->
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach

					<!-- <div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Personal</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">Advance</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Ultimate</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="c{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div> -->
				</div>
			</div>
			<div class="tab-pane container fade" id="paid-marketing">
				<div class="row justify-content-center">
				@foreach($pricingpaid as $k=>$items)
					@if($k==1)

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
										{!! $items['description'] !!}
											<!-- <li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li> -->
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										<!-- <ul>
												<li>Social Media Marketing</li>
												<li>2.100 Keywords</li>
												<li>One Way Link Building</li>
												<li>5 Free Optimization</li>
												<li>3 Press Releases</li>
											</ul> -->
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach
					<!-- <div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Personal</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">Advance</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
									</div>
									</ul>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Ultimate</span>
								<p class="title-sub">Great For Small Business</p>
								<h2><sup>$</sup> 79.99</h2>
								<p class="duration">Monthly Package</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
											<li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li>
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div> -->
				</div>
			</div>
			<div class="tab-pane container fade" id="ecommerce">
				<div class="row justify-content-center">
				@foreach($pricingecommerce as $k=>$items)
					@if($k==1)

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
										{!! $items['description'] !!}
											<!-- <li>Social Media Marketing</li>
											<li>2.100 Keywords</li>
											<li>One Way Link Building</li>
											<li>5 Free Optimization</li>
											<li>3 Press Releases</li> -->
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										<!-- <ul>
												<li>Social Media Marketing</li>
												<li>2.100 Keywords</li>
												<li>One Way Link Building</li>
												<li>5 Free Optimization</li>
												<li>3 Press Releases</li>
											</ul> -->
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach
					<!-- <div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Startup E-Commerce Package</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 1,588</h2>
								<h2>$ 794</h2>
								<div class="details scrollbar">
									<ul>
										<li>Customized Design</li>
										<li>Up-to <strong>100</strong> Products</li>
										<li>Content Management System (CMS)</li>
										<li><strong>Mini</strong> Shopping Cart Integration</li>
										<li>Payment Module Integration</li>
										<li><strong>Easy</strong> Product Search</li>
										<li>Dedicated designer &amp; developer</li>
										<li><strong>Unlimited</strong> Revisions</li>
										<li><strong>100%</strong> Satisfaction Guarantee</li>
										<li><strong>100%</strong> Unique Design Guarantee</li>
										<li><strong>100%</strong> Money Back Guarantee *</li>
									</ul>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<p class="populartag">Popular</p>
								<span class="title mt-1">Professional E-Commerce Package</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 2,788</h2>
								<h2>$ 1,394</h2>
								<div class="details scrollbar">
									<ul>
										<li>Customized Design</li>
										<li>Up-to <strong>500</strong> Products</li>
										<li>Content Management System (CMS)</li>
										<li>Full Shopping Cart Integration</li>
										<li>Payment Module Integration</li>
										<li>Easy Product Search</li>
										<li>Product Reviews</li>
										<li><strong>5</strong> Promotional Banners</li>
										<li>Team of Expert Designers &amp; Developers</li>
										<li>Unlimited Revisions</li>
										<li><strong>100%</strong> Satisfaction Guarantee</li>
										<li><strong>100%</strong> Unique Design Guarantee</li>
										<li><strong>100%</strong> Money Back Guarantee *</li>
									</ul>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">Elite E-Commerce Package</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 4,999</h2>
								<h2>$ 2,499</h2>
								<div class="details scrollbar">
									<ul>
										<li>Unlimited Pages Website with Unique Design</li>
										<li><strong>5</strong> Custom Logo Design</li>
										<li>CMS / Backend Adminstrative System</li>
										<li>Unlimited Products with Unlimited Categories</li>
										<li><strong>FREE</strong> Unlimited Revisions</li>
										<li>Custom Shopping Cart Integration</li>
										<li>Multiple Payment Module Integration</li>
										<li>Multiple Shipping Module Integration</li>
										<li>Product Ratings &amp; Reviews</li>
										<li>Sales &amp; Inventory Management System</li>
										<li>Multiple Currency Support</li>
										<li>Customer Login Area (Sign-Up &amp; Sign-In)</li>
										<li>Mobile Responsive</li>
										<li>Social Media Designs (Facebook, Twitter, Youtube)</li>
										<li>Dedicated Team of Expert Designers &amp; Developers</li>
										<li>Dedicated Project Manager</li>
										<li>News Letter Subscription</li>
										<li><strong>100%</strong> Satisfaction Guarantee</li>
										<li><strong>100%</strong> Money Back Guarantee*</li>
									</ul>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">Business E-Commerce Package</span>
								<p class="title-sub">Suitable for potential super-startups and brand revamps for companies.</p>
								<h2 class="not">$ 7,500</h2>
								<h2>$ 4,999</h2>
								<div class="details scrollbar">
									<ul>
										<li>Complete Custom Design &amp; Development</li>
										<li>Unique, User Friendly, Interactive, Dynamic, High End UI Design</li>
										<li>Unlimited Banner Designs</li>
										<li>Interactive Sliding Banners</li>
										<li>Special Hover Effects</li>
										<li>Customized Contact us Form</li>
										<li>Multiple Filtration Option (Search by Age, Experience, Talent, Industry etc)</li>
										<li>Profile Comparison (As per Category) </li>
										<li>File Converter</li>
										<li>Custom Video Functionality</li>
										<li>Multiple File format Uploading</li>
										<li>User Signup Area ( Talent )</li>
										<li>User Signup Area ( Casting )</li>
										<li>User Signup Area ( Agency )</li>
										<li>Client/User Dashboard Area</li>
										<li>Vendor / Agency Dashboard Area</li>
										<li>Custom Coding and Development</li>
										<li>Content Management System (Custom)</li>
										<li>Online Appointment/Scheduling integration (Optional)</li>
										<li>Online Payment Integration</li>
										<li>Invoicing System</li>
										<li>Automated Email Notifications</li>
										<li>Multi Lingual (Optional)</li>
										<li>Custom Dynamic Forms</li>
										<li>Complete Database Creation</li>
										<li>3rd Party Links integration (Instagram, IMDB etc )</li>
										<li>Signup Automated Email Authentication</li>
										<li>Signup Area (For Newsletters, Offers etc.)</li>
										<li>Search Bar for Easy Search</li>
										<li>Live Feeds of Social Networks integration (Optional)</li>
										<li>Search Engine Submission</li>
										<li>SEO friendly</li>
										<li>Mobile Responsive</li>
										<li>Master Admin Panel</li>
										<li>SSL Certification ( to make the website and it’s informative secured ) </li>
										<li>1 Year Free Hosting</li>
										<li>6 Months of Free Maintenance </li>
										<li>Award Winning Team of Expert Designers and Developers</li>
										<li>Complete Deployment</li>
										<li>Complete W3C Validation</li>
										<li>Dedicated Team of Designers and Developers</li>
									</ul>
								</div>
								<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<div class="tab-pane container fade" id="logo-design">
				<div class="row justify-content-center">
				@foreach($pricinglogo as $k=>$items)
					@if($k==1)

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
										{!! $items['description'] !!}
										
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach
					
				</div>
			</div>
			<div class="tab-pane container fade" id="animation">
				<div class="row justify-content-center">
				@foreach($pricinganimation as $k=>$items)
					@if($k==1)

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
										{!! $items['description'] !!}
										
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach
					
				</div>
			</div>
			<!--<div class="tab-pane container fade" id="game-development">-->
			<!--	<div class="row justify-content-center">-->
			<!--	@foreach($pricinggame as $k=>$items)-->
			<!--		@if($k==1)-->

			<!--		<div class="col-lg-4 col-md-6">-->
			<!--			<div class="pricing-table best-plan mt60 bg-gradient4">-->
			<!--				<div class="inner-table">-->
			<!--					<span class="title">{{$items['packagetype']}}</span>-->
			<!--					<p class="title-sub">{{$items['slogan']}}</p>-->
			<!--					<h2><sup>$</sup> {{$items['price']}}</h2>-->
			<!--					<p class="duration">{{$items['duration']}}</p>-->
			<!--					<div class="details">-->
			<!--						<div class="scrollbar">-->
			<!--							<ul>-->
			<!--							{!! $items['description'] !!}-->
										
			<!--							</ul>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>-->
			<!--			</div>-->
			<!--		</div>-->

			<!--		@else-->
			<!--		<div class="col-lg-4 col-md-6">-->
			<!--			<div class="pricing-table mt60">-->
			<!--				<div class="inner-table">-->
			<!--					<span class="title">{{$items['packagetype']}}</span>-->
			<!--					<p class="title-sub">{{$items['slogan']}}</p>-->
			<!--					<h2><sup>$</sup> {{$items['price']}}</h2>-->
			<!--					<p class="duration">{{$items['duration']}}</p>-->
			<!--					<div class="details">-->
			<!--						<div class="scrollbar">-->

			<!--							{!! $items['description'] !!}-->
										
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--		@endif-->
			<!--		@endforeach-->
					
			<!--	</div>-->
			<!--</div>-->
			<div class="tab-pane container fade" id="ecommerce-web">
				<div class="row justify-content-center">
				@foreach($pricingeweb as $k=>$items)
					@if($k==1)

					<div class="col-lg-4 col-md-6">
						<div class="pricing-table best-plan mt60 bg-gradient4">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">
										<ul>
										{!! $items['description'] !!}
										
										</ul>
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk ">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>

					@else
					<div class="col-lg-4 col-md-6">
						<div class="pricing-table mt60">
							<div class="inner-table">
								<span class="title">{{$items['packagetype']}}</span>
								<p class="title-sub">{{$items['slogan']}}</p>
								<h2><sup>$</sup> {{$items['price']}}</h2>
								<p class="duration">{{$items['duration']}}</p>
								<div class="details">
									<div class="scrollbar">

										{!! $items['description'] !!}
										
									</div>
								</div>
							</div>
							<a href="{{url('/contactus')}}" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> </a>
						</div>
					</div>
					@endif
					@endforeach
					
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Pricing-->
@endsection