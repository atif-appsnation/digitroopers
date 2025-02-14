@extends('app.main')
@section('content')
<!--Breadcrumb Area-->
<section class="breadcrumb-areav2" data-background="images/banner/slider.webp">
	<div class="container">
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-6 my-auto">
				<div class="bread-titlev2">
					<h2 class="wow fadeInUp" data-wow-delay=".2s">eCOMMERCE MANAGEMENT SERVICES</h2>
					<h5>PERFORMANCE – FLEXIBILITY – SCALABILITY – SECURITY</h5>
					<div data-swiper-parallax="500" class="quote-btn">
						<a href="#" class="btn-main bg-btn lnk">Get a Free Quote
							<i class="fas fa-chevron-right fa-icon"></i>
						</a>
					</div>
					<p>  +1 (253) 528-4057</p>
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
									<input type="hidden" name="service" value="ecommerce-managment">
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
			<!-- ----- -->
		</div>
	</div>
</section>
<!--Clients-->
<div class="statistics-wrap bg-gradient1 py-5">
	<div class="container">
		<div class="row small t-ctr mt0">
			<div class="col-lg-3 col-sm-6">
				<div class="statistics">
					<div class="statistics-img"> <img src="images/icons/deal.svg" alt="happy" class="img-fluid"> </div>
					<div class="statnumb"> <span class="counter">450</span>
						<p>Happy Clients</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="statistics">
					<div class="statistics-img"> <img src="images/icons/computers.svg" alt="project" class="img-fluid"> </div>
					<div class="statnumb counter-number"> <span class="counter">48</span><span>k</span>
						<p>Projects Done</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="statistics">
					<div class="statistics-img"> <img src="images/icons/worker.svg" alt="work" class="img-fluid"> </div>
					<div class="statnumb"> <span class="counter">95</span><span>k</span>
						<p>Hours Worked</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="statistics mb0">
					<div class="statistics-img"> <img src="images/icons/customer-service.svg" alt="support" class="img-fluid"> </div>
					<div class="statnumb"> <span class="counter">24</span><span>/</span><span class="counter">7</span>
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
			<div class="col-lg-12 block-1">
				<div class="common-heading text-l pl25">
					<h2 class="text-center">eCommerce Management Today</h2>
					<p class="text-center">The eCommerce business industry is booming and consumer interest in making online purchases is unprecedented. Brick and mortar stores that got temporarily closed due to COVID 19 may never open for business again.</p>
					<p class="text-center">As consumers attitudes towards change, their perception about online shopping is shifting from luxury and convenience to it being a necessity. So whether you are dealing in physical products, digital products or are a service based business, you need to take quick advantage of the overwhelming consumer inclination to purchase online before the market gets even more crowded than it already is.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="image-block wow fadeIn">
					<img src="images/service/ecommerce-agency.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->
<!--Start Key points-->
<section class="service bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 my-auto">
				<div class="image-block wow fadeIn">
					<img src="images/service/ecommerce-marketing-agency.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-8 block-1">
				<div class="common-heading text-l pl25">
					<h2>E-COMMERCE IS COMPLEX… YOU’LL NEED A CRACK TEAM</h2>
					<p>As a full-service eCommerce solutions agency <a href="https://digitroopers.com/">DigiTroopers</a> are single-mindedly devoted to maximizing revenue and minimizing operational risks. Creating exceptional and customized experiences is crucial to winning customers and capturing market share.</p>
					<p>When the right combination of products and branding comes together, users are highly likely to stay on-site and once they are in the funnel they are more likely to buy. User experience and revenue go hand in hand. When users find shopping difficult or slow they simply move away and conversion opportunities are lost.</p>
					<p>We provide the complete range of eCommerce Management Services to broaden and protect your customer base and strengthen your presence across all geographies. Rest assured that DigiTroopers are fully equipped to provide the best eCommerce Development Solutions, converting innovative concepts into high-value brands.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Key points-->
<!--Start About-->
<section class="service bg-gradient4 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 block-1">
				<div class="common-heading text-l pl25">
					<h2 class="text-center">THE DIGITROOPERS ECOMMERCE ADVANTAGE</h2>
					<p class="text-center">DigiTroopers are your end-to-end eCommerce partners, able to act as your single point of contact for all tasks related to eCommerce management. Without a professionally developed site, you are placing your bet on a great experience built on weak foundations.</p>
					<p class="text-center">This is a recipe for disaster. We have the technical expertise and experience to optimize, tune-up, and secure your eCommerce portal. We offer year-round and round-the-clock services to match the pace of your target market.</p>
					<p class="text-center">Our dedicated account managers will be by your side, armed with comprehensive knowledge of all major eCommerce shopping cart platforms including Woo Commerce, Shopify, OpenCart, BigCommerce, Square Space, and also Magento to provide your customers with a seamless online shopping experience including payment solutions to facilitate transactions.</p>
					<p class="text-center">Contact Us for details on our value-added <a href="https://digitroopers.com/graphic-design">eCommerce website maintenance</a> packages.</p>
				</div>
			</div>
		</div>
		<div class="-cta-btn mt40 text-center">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: zoomInDown;">
				<p>Hire a <span>Dedicated Ecommerce Developer</span></p> <a href="{{url('/contactus')}}" class="btn-main bg-btn2 lnk">Get a Free Quote <i class="fas fa-chevron-right fa-icon"></i></a>
			</div>
		</div>
	</div>
</section>
<!--End About-->
<!--Start Key points-->
<section class="service bg-gradient2 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="text-l">
					<h3 class="mb20">E-COMMERCE PRODUCT INFORMATION & CATALOGUE MANAGEMENT SERVICES</h3>
					<p>DigiTroopers provide Product Categorization, Product Data Entry Services, Description Writing, Product updates, and upload services including imaging editing & tagging. Catalogs provide a user-friendly, responsive virtual store-front to conveniently showcase your products or services.</p>
					<p>Our eCommerce Catalogue Management Services enable the presentation of appropriate product information for marketplaces like Amazon, eBay as well as Facebook Shops, WhatsApp Business, and Google Merchant Center.</p>
					<p>With DigiTroopers you can be sure that you are poised to scale your business to new heights. We provide economical, fast, and professional online catalog processing services for your e-commerce business enables you to improve revenue as well as profitability by cutting costs. This is particularly valuable for better small business management.</p>
				</div>
			</div>
			<div class="col-lg-5 block-1 my-auto">
				<div class="servie-key-points">
					<h4>ORDER MANAGEMENT SERVICES</h4>
					<ul class="key-points mt20">
						<li>Order Taking</li>
						<li>Payment Processing</li>
						<li>Order Tracking & Reporting</li>
						<li>Return & Refund Order Management</li>
						<li>Inventory Monitoring & Reporting</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Key points-->
<!--Start About-->
<section class="service bg-gradient6 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 block-1">
				<div class="common-heading text-l pl25">
					<h2>ECOMMERCE BUSINESS PERFORMANCE MANAGEMENT</h2>
					<p>We provide accurate data, complete transparency and full access to monitor back-end eCommerce management operations. including online store development, online order fulfilment, service management solutions, E-commerce inventory control, E-commerce marketing solutions, B2B eCommerce solutions, eCommerce Management services not only help to increase a company’s sales but also help to enhance business performance.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="image-block wow fadeIn">
					<img src="images/service/ecommerce-management.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->
<!--Start About-->
<section class="service bg-gradient7 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 block-1">
				<div class="common-heading text-l pl25">
					<h2 class="text-center">ECOMMERCE MARKETING AND ADVERTISING SERVICES</h2>
					<p class="text-center">As your <a href="https://digitroopers.com/">boutique&nbsp;eCommerce marketing agency</a> of the first choice, DigiTroopers not only aims to delight your brand’s customers with a memorable experience but also make sure that your digital offering is visible and attracting interest. We also offer<a href="https://digitroopers.com/social-media-marketing-services/"> SMM</a>, SEM, PPC, and on-page and off-page SEO services tailored for eCommerce websites and landing pages to drive top-of-funnel traffic to your online offer.</p>
					<p class="text-center">As an eCommerce agency, we will offer your customers well-crafted content supported by the top-notch integrated digital marketing strategies. Our compelling, ROAS focussed marketing and CTA centered advertising campaigns, will build your brand and strengthen your positioning, bringing invaluable traffic, and attracting repeat purchase.</p>
					<p>DigiTroopers also offers Affiliate Marketing, Email Marketing, and re-marketing services. <a href="https://digitroopers.com/contact-us/">Contact us</a> to learn more about how we amplify your web clout.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Pricing-->
<section class="block-a1 bg-gradient2 py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading ptag">
					<span>Pricing</span>
					<h2>Pricing Table</h2>
					<!-- <p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
				</div>
			</div>
		</div>
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
<section class="featured-project bg-gradient3 py-5">
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
			<!-- <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s">
				<div class="isotope_item hover-scale">
					<div class="item-image">
						<a href="#"><img src="images/portfolio/image-1.webp" alt="portfolio" class="img-fluid" /> </a>
					</div>
					<div class="item-info">
						<h4><a href="#">Creative </a></h4>
						<p>ios, design</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 wow fadeInUp" data-wow-delay=".4s">
				<div class="isotope_item hover-scale">
					<div class="item-image">
						<a href="#"><img src="images/portfolio/image-2.webp" alt="portfolio" class="img-fluid" /> </a>
					</div>
					<div class="item-info">
						<h4><a href="#">Brochure Design</a></h4>
						<p>Graphic, Print</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
				<div class="isotope_item hover-scale">
					<div class="item-image">
						<a href="#"><img src="images/portfolio/image-3.webp" alt="portfolio" class="img-fluid" /> </a>
					</div>
					<div class="item-info">
						<h4><a href="#">Ecommerce Development</a></h4>
						<p>Web application</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 wow fadeInUp" data-wow-delay=".8s">
				<div class="isotope_item hover-scale">
					<div class="item-image">
						<a href="#"><img src="images/portfolio/image-4.webp" alt="portfolio" class="img-fluid" /> </a>
					</div>
					<div class="item-info">
						<h4><a href="#">Icon Pack</a></h4>
						<p>Android & iOs, Design</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 wow fadeInUp" data-wow-delay="1s">
				<div class="isotope_item hover-scale">
					<div class="item-image">
						<a href="#"><img src="images/portfolio/image-5.webp" alt="portfolio" class="img-fluid" /> </a>
					</div>
					<div class="item-info">
						<h4><a href="#">Smart Watch</a></h4>
						<p>UI/UX Design</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 wow fadeInUp" data-wow-delay="1.2s">
				<div class="isotope_item hover-scale">
					<div class="item-image">
						<a href="#"><img src="images/portfolio/image-6.webp" alt="portfolio" class="img-fluid" /> </a>
					</div>
					<div class="item-info">
						<h4><a href="#">Brochure Design</a></h4>
						<p>Graphic, Print</p>
					</div>
				</div>
			</div> -->
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
			@if($k < 3) <div class="col-md-4 mt30 testimonial">
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
						<a href="mailto:info@digitroopers.com" tabindex="-1">
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
								<span class="large-text rows">  +1 (253) 528-4057</span>
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