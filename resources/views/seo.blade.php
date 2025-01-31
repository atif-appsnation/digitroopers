@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-6 my-auto">
                <div class="bread-titlev2">
                    <h5>Be Found, Be Trusted, Be Prominent</h5>
                    <h2>SEO Services For Organic Growth</h2>
                    <div data-swiper-parallax="500" class="quote-btn">
                        <a href="#" class="btn-main bg-btn lnk">Get a Free Quote
                            <i class="fas fa-chevron-right fa-icon"></i>
                        </a>
                    </div>
                    <p> +1 (253) 528-4057</p>
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
									<input type="hidden" name="service" value="seo">
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
            <div class="col-sm-12 d-block mx-auto">
                <div class="common-heading text-center pl25">
                    <p>Every day billions of queries are fed into search engines like Google and Bing. It is therefore vital to optimize the structure and content of a website to rank on the first page of search engine results ideally right at the very top by SEO Agency. The industry term used to define the activities aimed at ranking a website, increasing organic traffic and establishing an authority in a niche is called Search Engine Optimization. SEO Services is getting increasingly challenging & technical because search engines rely on data science to develop algorithms that improve service to their users in the shape of intent sensitive results.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->

<!--Start About-->
<section class="service bg-gradient3 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="image-block">
                    <img src="images/seo/seo.webp" alt="image" class="img-fluid no-shadow" />
                </div>
            </div>
            <div class="col-lg-8 block-1 my-auto">
                <div class="common-heading text-l pl25">
                    <div class="sctxt">SEO Services</div>
                    <h2>DigiTroopers SEO Services</h2>
                    <p>In an intensely competitive SEO battlefield, it&#8217;s vital that websites reach out effectively to a precisely targeted demographic. DigiTroopers operates as an integrated SEO agency in a multidisciplinary setting, combining design and novel SEO strategies in response to changing search algorithms.</p>
                    <p>In response to location-specific and voice-based queries on search engines DigiTroopers have fine-tuned long-tail keywords and geo-targeting strategies that ensure that your content and offers reach precise high-intent demographics. Our <a href="https://digitroopers.com/web-design-and-development/">SEO optimized websites</a> quickly attain and organically retain an authoritative position.</p>
                    <p><a href="https://digitroopers.com/">DigiTroopers</a> are happy to offer local SEO services to local businesses at local SEO pricing. We offer affordable SEO packages for small businesses which include many of the elements you would expect from any leading SEO consulting services company or managed service provider.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->

<!--Start Service-->
<section class="services bg-gradient4 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="common-heading ptag text-center">
                    <div class="sctxt">Services</div>
                    <h3>Our Seo Agency Have The Best Solutions For Search Engine Optimization</h3>
                </div>
            </div>
        </div>
        <div class="row upset">
            <div class="col-sm-12 col-md-6 col-lg-4 mt30">
                <div class="card h-100">
                    <div class="card-body">
                        <h4>On-Page SEO</h4>
                        <p>Search engines seek out these tags on a website to “understand” the meaning, relevancy, and intent of any content. On-page SEO is all about managing tags and the keywords or information within, enabling search engines to satisfy a user query. This is very important for top ranking.</p>
                        <p>DigiTroopers On-page SEO Services strive to balance between the demands of search engine algorithms and the information that a website user obtains from clicking on a link. We produce impeccable work, shun keyword stuffing, and dedicate ourselves to quality content that boosts page visibility precisely defining relevancy to the subject.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt30">
                <div class="card h-100">
                    <div class="card-body">
                        <h4>Off-Page SEO</h4>
                        <p>Off-Page SEO experts at <a href="https://agency.sortlist.com/agency/digitroopers/profile">DigiTroopers</a> create ranking signals that are passed on to search engines. Algorithms run by these search engines track and analyze these signals to determine how helpful, popular, and authoritative a page or website is when compared to millions of others which may be similar.</p>
                        <p>DigiTroopers Off-Page SEO services include backlink profiling, link building, guest posting, and other growth hacking off-page SEO techniques are the secret weapons of inbound marketing. our team engages social influencers and creates local business listing especially suited to small businesses &amp; start-ups.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mt30">
                <div class="card h-100">
                    <div class="card-body">
                        <h4>Technical SEO</h4>
                        <p>Technical SEO concerns itself with tweaks to the structure, data, and back-end coding of a page or website. A well managed Technical SEO from the start can provide a website with a definitive advantage over the competition in terms of ranking.</p>
                        <p>DigiTroopers SEO marketing services cater to the requirements of Technical SEO from the get-go. Our professional SEO services focus attention on boosting site speed, data caching, utilizing content distribution networks (CDN), reducing media file sizes, and making websites mobile responsive. All these factors put together to provide the greatest upward push to a website or page rank.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="-cta-btn mt40 text-center">
            <div class="free-cta-title v-center">
                <p>Hire a <span>Dedicated Searh Engine Optimizer</span></p>
                <a href="{{url('/contactus')}}" class="btn-main bg-btn2 lnk">Get a Free Quote <i class="fas fa-chevron-right fa-icon"></i></a>
            </div>
        </div>
    </div>
</section>
<!--End Service-->

<!--Start Process-->
<section class="service-block bg-gradient5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="text-l service-desc- pr25">
                    <h3 class="mb20">Local Seo Marketing Company For Local Businesses</h3>
                    <p>Small local businesses are usually lacking in experience, time, or funds to adequately market themselves online. Resource constraints are reality are typically more conspicuous when it comes to marketing budgets. This is basically why start-ups and small businesses are constantly on the lookout for affordable SEO services to boost their online customer outreach. To such businesses and emerging brands, DigiTroopers are happy to offer local SEO services to local businesses at local SEO pricing. In fact, apart from our fixed price SEO packages, we offer <strong><u>affordable SEO packages for small businesses</u>&nbsp;</strong>which include many of the elements you would expect from any leading SEO consulting services company or managed service provider.</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="servie-key-points">
                    <h4>Affordable Seo Services For Your Business</h4>
                    <ul class="key-points mt20">
                        <li>Website Audits</li>
                        <li>Keyword Research</li>
                        <li>On-Page SEO</li>
                        <li>Off-Page SEO</li>
                        <li>Technical SEO</li>
                        <li>Social bookmarking</li>
                        <li>Link Building</li>
                        <li>Back-linking</li>
                        <li>Guest Posting</li>
                        <li>Location-Based SEO</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Process-->

<!--Start Pricing-->
<section class="block-a1 bg-gradient7 py-5">
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
@endsection