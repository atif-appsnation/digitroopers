@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-6 my-auto">
                <div class="bread-titlev2">
                    <h5>From Concept to Creation</h5>
                    <h2>Let Your Brand Shine with Creative Designs</h2>
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
									<input type="hidden" name="service" value="designing">
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
        <div class="row t-ctr">
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
            <div class="col-lg-5 my-auto">
                <div class="single-image bg-shape-dez mt0 wow fadeIn">
                    <img src="images/services/graphic-design-services.webp" alt="image" class="img-fluid no-shadow" />
                </div>
            </div>
            <div class="col-lg-7 block-1 m-mt50">
                <div class="common-heading text-l pl25">
                    <div class="sctxt">Overview</div>
                    <h2>Graphic Design Services</h2>
                    <p>Good visuals catch the eye, capture interest, and are easily remembered. In fact, they are your best bet on impressing a potential customer at first glance and then holding their attention till the point that your message gets through.</p>
                    <p>Throughout history, attractive artwork has always captured a much wider public attention and stimulated a compelling desire to explore further, than the written word.</p>
                    <p>More often than not, a few aesthetically placed strokes and the ideal combination of colors can create more social buzz and convert more leads into revenue, than pages upon pages of written content.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->

<!--Start Key Points-->
<section class="service bg-gradient3 py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-7">
                <div class="text-l service-desc- pr25">
                    <div class="sctxt">Design</div>
                    <h3 class="mb20">Top Branding and Creative Design</h3>
                    <p>In the increasingly competitive world of online sales and digital marketing success hinges on presentation. In order to be a spectacular success, your brand needs to shine like a star on every web-enabled platform where prospects are looking for the products and services. This is why access to <a href="https://www.sortlist.com/agency/digitroopers" target="_blank"><u>professional graphic design services</u>&nbsp;</a>is now more critical than ever before.</p>
                    <p>At <a href="https://digitroopers.com/">DigiTroopers</a> our creative team has been rigorously trained through years of experience on the latest artwork producing tools at leading <u>graphic design companies</u>. They are quick to convert your ideas into distinct, share-worthy, and meaningful art form that commands attention retains interest.</p>
                    <p>Our top-ranked graphic designers provide indomitable support to our front line forces leading the charge in web design, branding, e-commerce, content creation, social media marketing as well as search engine marketing. Whether its a simple logo or a detailed corporate identity kit, DigiTroopers’ creative graphic designers will convert your dream into a digital asset you can utilize to invade the market and stun your competition.</p>
                    <p>If you’re scouting the web for a <u>top branding agency</u> or a <u>creative design agency</u>, then look no further. Let DigiTroopers manage the artistic fireworks! We promise to illuminate the sky with your brand. To find out more about our creative capabilities, graphic design services pricing or any special packages we offer.</p>
                </div>
            </div>
            <div class="col-lg-5 my-auto">
                <div class="single-image wow fadeIn"> <img src="images/services/brandign.webp" alt="image" class="img-fluid no-shadow" /> </div>
            </div>
        </div>
    </div>
</section>
<!--End Key Points-->

<!--Start Services-->
<section class="services-block bg-gradient4 py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Start Services-->

<!--Start Process-->
<section class="process-block bg-gradient4 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-heading ptag">
                    <div class="sctxt">Process</div>
                    <h2>Our Creative Process</h2>
                    <p>As a proven best practice followed by any professional graphic design services agency, <a href="https://digitroopers.com/">DigiTroopers</a> always start with a formal creative briefing that defines your brand story, positioning, aspirations and business goals. Basically our graphic designers try to convert the concept in your mind into a workable creative outline on paper.</p>
                    <p>This is followed by our creative team getting to work on technical and thematic outlines for the development of artistic assets. We present a couple of draft ideas from which you can pick and choose to your liking. At this point we finalise the visual communication elements and develop the final set of options for you.</p>
                    <p>As a final step after you have selected and again got the chance to fine tune the design, we produce high quality graphics ready for use anywhere as your propriety digital artwork.</p>
                    <p>Also, if you are not completely delighted with our final output we request our designers to give the utmost to satisfy your goals for the project and if you still believe its not good to go… no worries! DigiTroopers give you 100% money back guarantee so that you know we value your trust and honor the privilege of your patronage.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Start Process-->

<!--Start Resource-->
<section class="resource-block bg-gradient4 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-heading ptag">
                    <div class="sctxt">Agency Resource</div>
                    <h2>Our Creative Design Agency Resources</h2>
                    <p>There’s no limit to what you can get designed by DigiTroopers Graphic Design Experts. Colors, strokes, shapes, font, and words will define your business. For marketing campaigns on social media, proper visual communication with a creative combination of illustrations and text is vital to deliver effective compositions.</p>
                    <p>Get the perfect graphics to ensure that your message and brand identity is deeply embedded in the minds of your target audience. Whether its a snappy logo or some stunning social media ads, our supremely talented designers can make it happen to your complete satisfaction. DigiTroopers takes pride in its team of creative designers, delivering the best graphic design services.</p>
                    <p>In line with DigiTroopers vision to be the creative design agency of choice for start-up and small business, its design services start at a low price with options to suit any budget.</p>
                    <p>Find the design services that need from below and get in touch with us today! We keep ourselves updated with the latest software, creative tools, and graphic design trends to be able to serve the market with outstanding graphic and multimedia assets that leave a lasting impression.</p>
                    <p>They can help you take that idea or concept and put it in front of people in an attractive way, communicating effectively and giving the result that you are looking to.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12">
                <h4 class="text-center">GRAPHIC DESIGN SERVICES</h4>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="graphic-design-services">
                    <h5>Brand Identity & Corporate Visuals</h5>
                    <ul class="key-points mt10 mb10">
                        <li>Logo Design</li>
                        <li>Business Card Design</li>
                        <li>Stationery Design</li>
                        <li>Letterhead Design </li>
                        <li>Envelope Design</li>
                        <li>Name Card Design</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="graphic-design-services">
                    <h5>Art & Illustration</h5>
                    <ul class="key-points mt10 mb10">
                        <li>Illustration Design</li>
                        <li>Book Cover Design</li>
                        <li>e-Book Cover Design</li>
                        <li>CD Cover Design</li>
                        <li>Art Design</li>
                        <li>Mascot Design</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="graphic-design-services">
                    <h5>Graphic Design</h5>
                    <ul class="key-points mt10 mb10">
                        <li>Infographic Design</li>
                        <li>3D Design</li>
                        <li>Photoshop Design</li>
                        <li>Vector Design</li>
                        <li>Infographics</li>
                        <li>Ad Design</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="graphic-design-services">
                    <h5>Print Design</h5>
                    <ul class="key-points mt10 mb10">
                        <li>Flyer Design</li>
                        <li>Brochure Design</li>
                        <li>Poster Design</li>
                        <li>Postcard Design</li>
                        <li>Invitation Design</li>
                        <li>Greeting Card Design</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="graphic-design-services">
                    <h5>Web Design</h5>
                    <ul class="key-points mt10 mb10">
                        <li>Web & Mobile UI/UX Design</li>
                        <li>WordPress Design</li>
                        <li>Landing Page Design</li>
                        <li>BigCommerce Design</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="graphic-design-services">
                    <h5>Social Media Designs</h5>
                    <ul class="key-points mt10">
                        <li>Banner Ad Design</li>
                        <li>Newsletter Design</li>
                        <li>Email Design</li>
                        <li>Facebook Design</li>
                        <li>Twitter Design</li>
                        <li>YouTube Design</li>
                        <li>LinkedIn Design</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="-cta-btn mt40 text-center">
            <div class="free-cta-title v-center wow">
                <p>Hire a <span>Dedicated Graphic Designer</span></p>
                <a href="{{url('/contactus')}}" class="btn-main bg-btn2 lnk">Get a Free Quote <i class="fas fa-chevron-right fa-icon"></i></a>
            </div>
        </div>
    </div>
</section>
<!--End Resource-->

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
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 wow">
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
            <div class="col-lg-12 maga-btn mt30">
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

<!--Start Contact-->
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