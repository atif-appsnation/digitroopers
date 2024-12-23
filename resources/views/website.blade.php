@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">
	<div class="container">
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-6 my-auto">
				<div class="bread-titlev2">
					<h5>Empower Your Brand with DigiTroopers</h5>
					<h2>Innovative Web Design & Development</h2>
					<div data-swiper-parallax="500" class="quote-btn">
						<a href="#" class="btn-main bg-btn lnk">Get a Free Quote
							<i class="fas fa-chevron-right fa-icon"></i>
						</a>
					</div>
					<p>+1 (253) 528-4057</p>
				</div>
			</div>
			<!-- form div -->
			<div class="col-sm-12 col-md-12 col-lg-5 d-block mx-auto">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center pb-3">Request For Quote</h3>
						<div class="form-block">
					{!! NoCaptcha::renderJs() !!}

							<form action="{{route('leads')}}" method="post" id="contactForm2" data-toggle="validator" class="shake">
								@csrf
								<div class="row">
									<div class="form-group col-sm-12 col-md-12">
										<input type="text" name="name" id="name" placeholder="Enter name" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12 col-md-12">
										<input type="email" name="email" id="email" placeholder="Enter email" required>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12 col-md-12 col-lg-12">
										<input type="text" name="mobile" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row" hidden>
									<input type="hidden" name="service" value="development">
									<!-- <div class="form-group col-sm-12 col-md-12 col-lg-6">
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
									</div> -->
								</div>
								<div class="row">
									<div class="fform-group col-sm-12 col-md-12">
										<input type="text" name="company" id="company" placeholder="Enter company name (optional)" required data-error="">
									</div>
									</div>
								<div class="row">
									<div class="form-group form-group col-sm-12 col-md-12">
										<input type="text" id="subject" name="subject" placeholder="Enter subject" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<textarea id="message" rows="3" name="message" placeholder="Enter your message" required></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="form-group mb-2 captchaContainer2" id="captchaContainer" style="display: none;">
								{!! NoCaptcha::display() !!}
							</div>
								<button type="submit" name="submit" id="form-submit" class="btn-main bg-btn lnk">Submit <i class="fas fa-chevron-right fa-icon"></i></button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Clients-->
<div class="statistics-wrap bg-gradient1 py-5">
	<div class="container">
		<div class="row t-ctr">
			<div class="col-lg-3 col-sm-6">
				<div class="statistics">
					<div class="statistics-img">
						<img src="images/icons/deal.svg" alt="happy" class="img-fluid">
					</div>
					<div class="statnumb">
						<span class="counter">450</span>
						<p>Happy Clients</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="statistics">
					<div class="statistics-img">
						<img src="images/icons/computers.svg" alt="project" class="img-fluid">
					</div>
					<div class="statnumb counter-number">
						<span class="counter">48</span>
						<span>k</span>
						<p>Projects Done</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="statistics">
					<div class="statistics-img">
						<img src="images/icons/worker.svg" alt="work" class="img-fluid">
					</div>
					<div class="statnumb">
						<span class="counter">95</span><span>k</span>
						<p>Hours Worked</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="statistics mb0">
					<div class="statistics-img">
						<img src="images/icons/customer-service.svg" alt="support" class="img-fluid">
					</div>
					<div class="statnumb">
						<span class="counter">24</span>
						<span>/</span>
						<span class="counter">7</span>
						<p>Support Available</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Hero-->

<!--Start About-->
<section class="service bg-gradient2 py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-3 web-services-1">
				<p>Business Website</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 web-services-1">
				<p>ECommerce Site</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 web-services-1">
				<p>Portfolio Website</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 web-services-1">
				<p>Blog Website</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-3 web-services-2">
				<p>Affiliate Website</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 web-services-2">
				<p>Directory Sites</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 web-services-2">
				<p>Landing Pages</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 web-services-2">
				<p>Custom Website</p>
			</div>
		</div>
		<div class="row py-5">
			<div class="col-lg-8 d-block mx-auto text-center">
				<h3>Explore Our Services</h3>
				<p>DigiTroopers professional web development services are dedicated to the principles of searchability, speed, and simplicity. In response to the evolving demands and the current trends of internet users.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 block-1 my-auto">
				<div class="common-heading text-l pl25">
				    <span>Overview</span>
					<h2>Our Web Development Services</h2>
					<p>We are the best Website Development agency if you are seeking a CMS-based solution for your website. Our &nbsp;Website experts provide you <a href="https://digitroopers.com/seo">SEO optimized</a>, mobile responsive websites that are able to work with WordPress, Joomla, Shopify, Drupal, Squarespace, Wix, Bitrix, Magento, PrestaShop, OpenCart as well as TYPO3. DigiTroopers deliver a seamlessly responsive, data-driven design ensuring that your website attains and maintains high views, click rate &amp; conversions.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image-block upset bg-shape wow fadeIn"> <img src="images/about/web1.webp" alt="image" class="img-fluid" /> </div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Tech-->
<div class="techonology-used- bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 text-center">
				<img src="images/service/loading.webp" alt="image" class="icons mb-3" />
				<h4>Speed Optimized</h4>
				<p>Our Web Design will always be Speed optimized that will easily interact with users with a minimum Bounce rate.</p>
			</div>
			<div class="col-lg-4 text-center">
				<img src="images/service/label.webp" alt="image" class="icons mb-3" />
				<h4>SEO Friendly</h4>
				<p>We always approach SEO friendly Website Designs that can easily rank on Search Engines and make leads.</p>
			</div>
			<div class="col-lg-4 text-center">
				<img src="images/service/thumbs-up.webp" alt="image" class="icons mb-3" />
				<h4>User Friendly</h4>
				<p>Our Web Design will be responsive for all devices and user-friendly for making User interaction easy.</p>
			</div>
		</div>
	</div>
</div>
<!--End Tech-->

<!--Start Service-->
<section class="service-block bg-gradient4 py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="common-heading ptag text-center">
					<h2>Plan Your Next Website With Us</h2>
				</div>
			</div>
		</div>
		<div class="row upset">
			<div class="col-sm-12 col-md-6 col-lg-6 mt30 wow fadeInUp" data-wow-delay=".2s">
				<div class="s-block wd-block">
					<h4>CMS based Websites</h4>
					<p>CMS based web development is industry terminology for organizing the CMS and its technical considerations leading to custom website development.</p>
					<div class="s-card-icon mx-auto d-block web-image-div">
						<img src="images/service/business-website.webp" alt="service" class="img-fluid web-development-img" />
					</div>
					<p>We are the best Website Development agency if you are seeking a CMS based solution for you website. Our &nbsp;Website Development experts in&nbsp;<a href="https://digitroopers.com/seo-service/">SEO optimized</a>, mobile responsive websites are able to work with&nbsp;WordPress, Joomla, Shopify, Drupal, Squarespace, Wix, Bitrix, Magento, PrestaShop, OpenCart as well as TYPO3. DigiTroopers deliver a seamlessly responsive, data driven design ensuring that your website attains and maintains high views, click rate &amp; conversions.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6 mt30 wow fadeInUp" data-wow-delay=".4s">
				<div class="s-block wd-block">
					<h4>Custom Website</h4>
					<p>A website has to be primed for search engines, cybersecurity, loading speed, consistency, and flow. Custom Website for automation, unique site features & functionality.</p>
					<div class="s-card-icon mx-auto d-block web-image-div">
						<img src="images/service/blogging-websites.webp" alt="service" class="img-fluid web-development-img" />
					</div>
					<p>Our web development professionals makes you a titan in your niche. Our web development principles and data-informed analytics guide us towards customizing your website offering to the exact needs of your customers, to provide them with a delightful user experience when interacting with your site. DigiTroopers expert front-end and back-end developers are able to produce spectacular, multi-platform websites using HTML, CSS & Javascript as well PHP, Laravel, Python & .NET.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6">
				<h3>We also offer WEBSITE SUPPORT & MAINTENANCE SERVICES</h3>
				<p>DigiTroopers takes as much pride in genuine customer care as in quality of output and technical prowess. We have dedicated resources to provide fully managed ongoing support in operating and maintaining websites. We pre-empt future issues and detect current ones, based on performance data analytics. Our experience allows us to be flexible to your changing needs and we ensure that our service provides you a long-term competitive advantage.</p>
			</div>
			<div class="col-lg-6">
				<img src="images/service/website-development-services.webp" alt="service" class="img-fluid" />
			</div>
		</div>
		<div class="-cta-btn mt40 text-center">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s">
				<p>Hire a <span>Dedicated Web Developer</span></p> <a href="{{url('/contactus')}}" class="btn-main bg-btn2 lnk">Get a Free Quote <i class="fas fa-chevron-right fa-icon"></i></a>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Pricing-->
<section class="block-a1 bg-gradient6 py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading ptag">
					<span>Pricing</span>
					<h2>Pricing Table</h2>
				</div>
			</div>
		</div>
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
</section>
<!--End Pricing-->

<!--Stat Projects-->
<section class="featured-project bg-gradient7 py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-6">
				<div class="common-heading ptag">
					<span>Our Projects</span>
					<h2>Some of Our Works</h2>
					<p class="mb0">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
				</div>
			</div>
		</div>
		<div class="row">

			@foreach($portfolio_prime as $items)
			<div class="col-12 col-sm-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".2s">
				<div class="isotope_item hover-scale">
					<div class="item-image">
						<a href="#"><img src="uploads/{{$items['image']}}" alt="portfolio" class="img-fluid" /> </a>
					</div>
					<div class="item-info">
						<h4><a href="#">{{$items['title']}} </a></h4>
						<p>{{$items['type']}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-lg-12 maga-btn mt60">
				<a href="{{url('/portfolio')}}" class="btn-main bg-btn lnk">View More Projects
					<i class="fas fa-chevron-right fa-icon"></i>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End Projects-->

<!--Start reveiws-->
<section class="reviews-block bg-gradient2 py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading ptag">
					<span>Service Testimonials</span>
					<h2>Client Speaks</h2>
					<p class="mb30">Check our customers success stories.</p>
				</div>
			</div>
		</div>
		<div class="row">

			@foreach($testimonial as $k=>$items)
			@if($k < 3)
			<div class="col-md-4 mt30 testimonial">
				<div class="reviews-card pr-shadow">
					<div class="row v-center">
						<div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
						<!-- <div class="col"> <span class="revbx-rl"><img src="uploads/{{$items['image']}}" alt="review service logo"></span> </div> -->
					</div>
					<div class="review-text">
						<p class="text1">{{$items['title']}}</p>
					</div>
					<div class="-client-details-">

						<div class="reviewer-text">
							<h4>{{$items['name']}}</h4>
							<p>{{$items['location']}}</p>
							<div class="star-rate">
								<ul>
									<li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a>
									</li>
									<li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a>
									</li>
									<li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a>
									</li>
									<li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a>
									</li>
									<li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		</div>
		@endif
		@endforeach
	</div>
</section>
<!--End reviews-->
<!--Start contact-->
<section class="contact--block bg-gradient1 py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="common-heading text-l text-wt">
					<h2 class="mb0">Interested in working with us?</h2>
					<p>LET’S TALK AND GET STARTED</p>
				</div>
				<div class="contact-fields">
					<div class="connect-block mt40">
						<a href="mailto:info@abcd.com" tabindex="-1">
							<div class="icon-fld-nx v-center">
								<i class="fas fa-envelope"></i>
							</div>
							<div class="text-fld-nx v-center">
								<span class="small-text rows">mail to us</span>
								<span class="large-text rows">info@digitroopers.com</span>
							</div>
						</a>
					</div>
					<div class="connect-block mt30">
						<a href="tel:12345679" class="transition" tabindex="-1">
							<div class="icon-fld-nx v-center">
								<i class="fas fa-phone-alt"></i>
							</div>
							<div class="text-fld-nx v-center">
								<span class="small-text rows">Our contact Number</span>
								<span class="large-text rows">+1 (253) 528-4057</span>
							</div>
						</a>
					</div>
					<div class="text-fieds- mt40">
						<h4>& What's you will get :</h4>
						<ul class="list-style- mt10">
							<li>Excellent Customer Support</li>
							<li>Project Consulting by Experts</li>
							<li>On-Time Project Delivery</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- form -->
			<div class="col-lg-6">
				<div class="contact-form-card-pr contact-block-btm">
					<div class="form-block">
					{!! NoCaptcha::renderJs() !!}

						<form action="{{route('leads')}}" method="post" id="contactForm" data-toggle="validator" class="shake">
							@csrf
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="name" id="name" placeholder="Enter name" required data-error="Please fill Out">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-6">
									<input type="email" name="email" id="email" placeholder="Enter email" required>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="mobile" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
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
										<option value="paind-marketing">Paid Marketing</option>
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
									<input type="text" name="subject" id="subject" placeholder="Enter subject" required data-error="Please fill Out">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="form-group">
								<textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group mb-2 captchaContainer1" id="captchaContainer" style="display: none;">
								{!! NoCaptcha::display() !!}
							</div>
							<button type="submit" name="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i></button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
			<!--xxxxxxxx-->
		</div>
	</div>
</section>
<!--End contact-->
@endsection