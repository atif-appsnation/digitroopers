@extends('app.main')
@section('content')
<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-6 my-auto">
                <div class="bread-titlev2">
                    <h5>Get Engaged, Get Influenced, Get Business</h5>
                    <h2>Social Media Marketing that Works</h2>
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
									<input type="hidden" name="service" value="social-media">
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
        <div class="row t-ctr mt0">
            <div class="col-lg-3 col-sm-6">
                <div class="statistics">
                    <div class="statistics-img"> <img src="images/icons/deal.svg" alt="happy" class="img-fluid">
                    </div>
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
                    <div class="statistics-img"> <img src="images/icons/worker.svg" alt="work" class="img-fluid">
                    </div>
                    <div class="statnumb"> <span class="counter">95</span><span>k</span>
                        <p>Hours Worked</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="statistics mb0">
                    <div class="statistics-img"> <img src="images/icons/customer-service.svg" alt="support" class="img-fluid">
                    </div>
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
            <div class="col-lg-4 my-auto">
                <div class="image-block wow fadeIn">
                    <img src="images/service/social-media-advertising-services.webp" alt="image" class="img-fluid no-shadow" />
                </div>
            </div>
            <div class="col-lg-8 block-1">
                <div class="common-heading text-l pl25">
                    <span>Overview</span>
                    <h2>A Social Media Marketing Agency which is zeroed on Social dominance through</h2>
                    <h3><span style="color: #ff0000;">Active Engagement &amp; Influential Content</span></h3>
                    <p>If you are a start-up with a goal to establish your digital footprint or a fledgling brand geared to take your customer relations to the next level your search for a reliable social media marketing consultant or a full-service social media marketing agency ends here. DigiTroopers is a data-driven <a href="https://digitroopers.com/">social media marketing agency</a> providing strategy and execution for digital marketing on all social media platforms. We are able to blend exceptional creativity and data-informed logic to create phenomenal social media campaigns that deliver measurable results for our clients.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->
<!--Start Key points-->
<section class="service bg-gradient3 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <div class="service-desc- text-center">
                    <h3 class="mb20">HOW WE WORK?</h3>
                    <p>With millions of active users social media platforms are a treasure trove potential leads and customers. DigiTroopers advanced social media marketing strategy can help you cut through the competition and reach your desired revenue and ROI targets whether your business model is B2B, B2C or C2C.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Key points-->
<!--Start Service-->
<section class="service-block bg-gradient4 py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">
                    <span>Service</span>
                    <h2>Our Services</h2>
                    <p class="mb30">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
                </div>
            </div>
        </div>
        <div class="row upset link-hover">
            <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block smm-block wide-sblock">
                    <div class="s-block-content-large text-center">
                        <h4>SOCIAL MEDIA STRATEGY</h4>
                        <p>Meticulous planning is at the root of spectacular Social Media Marketing results. The key elements of social media marketing strategy include developing a deep understanding of the target audience. Customer segmentation based on demographics and psychographics comes into play here. DigiTroopers conduct a deep dive into your market in the backdrop of your vision and mission to craft a feasible strategy to meet your business objectives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
                <div class="s-block smm-block wide-sblock">
                    <div class="s-block-content-large text-center">
                        <h4>SOCIAL MEDIA PLANNING</h4>
                        <p>DigiTroopers social media experts design both your visual identity & business persona across a meticulously selected range social media channels. We are experts at using a content centric, multi-channel approach to inbound marketing. Our objectives are to help brands gain recognition, visibility, pull in new qualified leads in the sales funnel, convert existing leads, curb customer attrition, and nurture your loyal customers into brand evangelists boosting revenue and sales opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                <div class="s-block smm-block wide-sblock">
                    <div class="s-block-content-large text-center">
                        <h4>SOCIAL MEDIA ANALYTICS</h4>
                        <p>Although our hard-hitting, visually captivating content maximizes engagement and outreach, all our moves are guided solely by performance data and analytics and social media marketing insights. Using the latest techniques, like social listening, DigiTroopers regularly monitor social media performance metrics like engagements, conversions, and reputation against industry benchmarks in order to make informed decisions and quick remedial actions on customer retention, sales, and marketing strategy.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
                <div class="s-block     smm-block wide-sblock">
                    <div class="s-block-content-large text-center">
                        <h4>SOCIAL MEDIA MANAGEMENT</h4>
                        <p>DigiTroopers social media experts manage your social accounts so that you can concentrate on your core business operations. Quality content is at the heart of social media appeal. So whether it is posting regular updates or directly engaging with leads and existing customers, we devise a communication approach that is effective for your target audience. DigiTroopers also expands your outreach and strategic partnerships by engaging with influencers helping you earn valuable social media mentions. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="-cta-btn mt40 text-center">
            <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s">
                <p>Hire a <span>Dedicated Social Media Marketing</span></p> <a href="{{url('/contactus')}}" class="btn-main bg-btn2 lnk">Get a Free Quote <i class="fas fa-chevron-right fa-icon"></i></a>
            </div>
        </div>
    </div>
</section>
<!--End Service-->
<!--Start Why Choose-->
<section class="service bg-gradient5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 block-1">
                <div class="common-heading text-l pl25">
                    <span>Overview</span>
                    <h2>SOCIAL MEDIA ADVERTISING SERVICES</h2>
                    <p>DigiTroopers are determined to be the most affordable social media marketing outfits with <a href="https://digitroopers.com/paid-marketing">Google Ads</a> from among all other social media marketing companies in the market. In order to maximize Return on Ad Spend (ROAS), our social media marketing service pricing is flexible to your needs. Our packages suit all <a href="http://www.marketingteacher.com/marketing-budget/#:~:text=A%20marketing%20budget%20is%20an,cost%20of%20office%20space%20etc.&amp;text=This%20is%20called%20advertising%20or%20marketing%20communications%20research.">marketing budgets</a> and with the help of our in-house graphic designers, copywriters, and ad management experts we ensure that your social advertising campaigns are managed through data-driven decisions providing the highest return on your investment.</p>
                </div>
            </div>
            <div class="col-lg-4 my-auto">
                <div class="image-block wow fadeIn">
                    <img src="images/service/social-media-marketing.webp" alt="image" class="img-fluid no-shadow" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Why Choose-->

<!--Start Pricing-->
<section class="block-a1 bg-gradient7 py-5">
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
<section class="featured-project bg-gradient1 py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <div class="common-heading ptag">
                    <span>Our Projects</span>
                    <h2>Some of Our Works</h2>
                    <p class="mb0">We think big and have hands in all leading technology platforms to provide you
                        wide array of
                        services.</p>
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
                        <a href="#"><img src="images/portfolio/image-1.webp" alt="portfolio" class="img-fluid" />
                        </a>
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
                        <a href="#"><img src="images/portfolio/image-2.webp" alt="portfolio" class="img-fluid" />
                        </a>
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
                        <a href="#"><img src="images/portfolio/image-3.webp" alt="portfolio" class="img-fluid" />
                        </a>
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
                        <a href="#"><img src="images/portfolio/image-4.webp" alt="portfolio" class="img-fluid" />
                        </a>
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
                        <a href="#"><img src="images/portfolio/image-5.webp" alt="portfolio" class="img-fluid" />
                        </a>
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
                        <a href="#"><img src="images/portfolio/image-6.webp" alt="portfolio" class="img-fluid" />
                        </a>
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
                <a href="{{url('/portfolio')}}" class="btn-main bg-btn lnk">View More
                    Projects
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