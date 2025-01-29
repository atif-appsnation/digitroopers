@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">
	<div class="container">
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-6 my-auto">
				<div class="bread-titlev2">
					<h5>Get Clicks, Capture Leads, Win Sales</h5>
					<h2>Targeted Google Ads & PPC Campaigns to Grow Your Business</h2>
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
									<input type="hidden" name="service" value="paid-marketing">
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
		<div class="row small t-ctr mt0">
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
						<span class="counter">95</span>
						<span>k</span>
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
			<div class="col-lg-12 block-1">
				<div class="common-heading text-center pl25">
					<div class="sctxt">Paid Marketing</div>
					<h2 class="text-center">Paid Marketing Company That Provides All Solutions For Google Leads</h2>
					<p class="text-center">DigiTroopers is a premier Google Ads Management Agency geared towards providing, search engine marketing & PPC management to get your business the impressions, traffic and leads it needs to outperform the competition. So if you were on the market for a PPC specialist or Google AdWords campaign management services provider your search ends here. Our PPC services are rendered by experts with years of experience in providing Google AdWords PPC management and Google Lead Services to several brands in diverse industries. Just let us now and we will take up your digital advertising goals as our own.</p>
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
			<div class="col-lg-8 block-1">
				<div class="common-heading text-l pl25">
					<div class="sctxt">Lead Generation</div>
					<h2>Lead Generation Campaigns</h2>
					<p>Meticulous planning of lead generation campaigns requires a deep understanding of specific buyers’ persona within a target audience coupled with meticulous keyword research. Only then can unique and compelling Ads can be designed to meet your goals. You can trust <a href="https://agency.sortlist.com/agency/digitroopers/profile">DigiTroopers</a> to to take on the challenge of targeting high quality traffic, generate hot leads for your <a href="https://digitroopers.com/ecommerce">business</a> and watch your conversions explode.</p>
				</div>
			</div>
			<div class="col-lg-4 my-auto">
				<div class="image-block wow fadeIn">
					<img src="images/services/google-partner.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Key points-->

<!--Start Service-->
<section class="services bg-gradient4 py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-6">
				<div class="common-heading ptag">
					<div class="sctxt">Services</div>
					<h2>Our Services</h2>
					<p class="mb30">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
				</div>
			</div>
		</div>
		<div class="row upset link-hover">
			<div class="col-sm-12 col-md-6 col-lg-4 mt30">
				<div class="card h-100">
					<div class="card-body">
						<h4>Search Ads</h4>
						<p>Be prominent on SERPs whenever products or services similar to yours are searched</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt30">
				<div class="card h-100">
					<div class="card-body">
						<h4>Display Ads</h4>
						<p>Appear in front of your potential customers when they are intently considering a purchase.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt30">
				<div class="card h-100">
					<div class="card-body">
						<h4>App Ads</h4>
						<p>Call specific actions from users and get them to install your App.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt30">
				<div class="card h-100">
					<div class="card-body">
						<h4>Re-Marketing</h4>
						<p>Reconnect with existing customers or user’s who are liable to but still haven’t purchased.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt30">
				<div class="card h-100">
					<div class="card-body">
						<h4>Shopping Ads</h4>
						<p>High intent users considering a product purchase are ripe for shopping ads</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt30">
				<div class="card h-100">
					<div class="card-body">
						<h4>Rewarded Ads</h4>
						<p>Provide an opportunity for users to watch a video or engage with a Playable ad in exchange for a “reward” within your app/website</p>
					</div>
				</div>
			</div>
		</div>
		<div class="-cta-btn mt40 text-center">
			<div class="free-cta-title v-center">
				<p>Hire a <span>Dedicated PPC Management</span></p>
				<a href="{{url('/contactus')}}" class="btn-main bg-btn2 lnk">Get A Quote<i class="fas fa-chevron-right fa-icon"></i></a>
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
					<div class="sctxt">Pricing</div>
					<h2>Pricing Table</h2>
				</div>
			</div>
		</div>
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
					<div class="sctxt">Projects</div>
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

<!--Start Reveiws-->
<section class="reviews-block bg-gradient2 py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <div class="sctxt">Testimonials</div>
                    <h2>Client Speaks</h2>
                    <p class="mb30">Check our customers success stories.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($testimonial as $k=>$items)
            @if($k < 3)
            <div class="col-md-4 mt30 testimonial">
                <div class="card reviews-card h-100">
                    <div class="card-body">
                        <div class="row v-center">
                            <div class="col">
                                <span class="revbx-lr">
                                    <i class="fas fa-quote-left"></i>
                                </span>
                            </div>
                        </div>
                        <div class="review-text">
                            <p class="text1">{{$items['title']}}</p>
                            <button class="btn btn-link toggle-btn px-0">View More</button>
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
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!--End Reviews-->

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