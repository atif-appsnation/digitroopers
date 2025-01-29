@extends('app.main')
@section('content')
<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">
	<div class="container">
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-6 my-auto">
				<div class="bread-titlev2">
					<h5>Engagement, Automation, Personalization, Growth</h5>
					<h2>Email Marketing Solutions</h2>
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
									<input type="hidden" name="service" value="email-marketing">
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
			<div class="col-lg-4">
				<div class="image-block wow fadeIn">
					<img src="images/services/email-marketing-campaigns.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-8 block-1 my-auto">
				<div class="common-heading text-l pl25">
					<div class="sctxt">Services</div>
					<h2>Email Marketing Services</h2>
					<p><u>Email marketing isn’t</u>&nbsp;an unsolicited direct mass marketing method which may also be called <u>spam</u>.</p>
					<p>This is an important distinction to bear in mind when weighing the utility of its incorporation in a digital marketing strategy.</p>
					<p>Email marketing is an extremely cost-effective <a href="https://digitroopers.com/">digital marketing</a> approach that utilizes a solicited and curated list of Email addresses to develop and maintain close relationships with qualified prospects and customers. The primary goal of an effective email marketing strategy is to connect with and convert prospects into customers, eventually winning them over as loyal patrons. People across all demographics prefer email over other permission-based <a href="https://digitroopers.com/social-media">advertising</a> which is perhaps why Email marketing has the highest ROI relative to other digital marketing methods.</p>
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
					<div class="sctxt">Email Marketing</div>
					<h2>Our Approach To Email Marketing</h2>
					<p>DigiTroopers is an accomplished boutique <a href="https://digitroopers.com/">digital marketing company</a> that you will be discovered to be at par with the best email marketing agency you can find. Bulk email marketing services are no longer useful as they are liable to classified as spam and usually blocked or directed to trash bins. We start with understanding your <a href="https://digitroopers.com/ecommerce">business model</a> and goals to develop an effective Email Marketing Strategy for you. The next step is email list maintenance, where we set about creating a plan of action collect, segment and regularly update a list of subscribers for the informational and marketing content we intend to distribute.</p>
				</div>
			</div>
			<div class="col-lg-4 my-auto">
				<div class="image-block">
					<img src="images/services/email-marketing/email-marketing-approach.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Key points-->

<!--Start Service-->
<section class="service bg-gradient4 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="image-block">
					<img src="images/services/email-marketing/email-marketing-experties.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-8 block-1 my-auto">
				<div class="common-heading pl25">
					<div class="sctxt">Marketing Expertise</div>
					<h2>DigiTroopers Email Marketing Expertise</h2>
					<p>Depending on factors like your revenue and outreach goals as well as budget we create the content and determine the frequency and timing of communication. We are experts in designing and implementing all types of Email Marketing ad Advertising Campaigns from special or one off promotions to running a regular Digital Magazine or Subscription Newsletter on a periodic basis. DigiTroopers are also equipped to create assets like E-Books, White Papers, Guides and Product Catalogues. These are vital elements that entice users to share their contact details with you and allow you to send them relevant information and marketing offers directly into their inboxes.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Service-->
<section class="service bg-gradient5 py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 block-1">
				<div class="common-heading text-center pl25">
					<div class="sctxt">Email Marketing</div>
					<h2 class="text-center">Why Implement Email Marketing</span></h2>
					<p class="text-center">The primary goal of an effective email marketing strategy is to connect with and convert prospects into customers, eventually winning them over as loyal patrons. People across all demographics prefer email over other permission-based advertising which is perhaps why Email marketing has the highest ROI relative to other digital marketing methods used by both B2B and B2C marketers.</p>
				</div>
			</div>
			<div class="-cta-btn mt40 text-center">
				<div class="free-cta-title v-center">
					<p>Hire a <span>Dedicated Email Marketing</span></p> <a href="{{url('/contactus')}}" class="btn-main bg-btn2 lnk">Get a Free Quote <i class="fas fa-chevron-right fa-icon"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Key points-->
<section class="service bg-gradient6 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 block-1">
				<div class="common-heading text-l pl25">
					<div class="sctxt">Email Design</div>
					<h2>DigiTroopers Customized Email Design & Delivery</h2>
					<p>Our Custom Email Designs are going to give you a definitive edge in the market. Customisation, personalization and device optimization is vital because recipients of your message should continue to derive value from your messages and you should be able to get as much value from their patronage in terms of business growth. Whether you need to send automated responses like kickback emails from lead offers, thank you emails after purchase, promote a new product or service offering or even boost current campaigns; our designs can make the difference and make the call-to-action “pop” driving the results your desire and building the relationships you need.</p>
				</div>
			</div>
			<div class="col-lg-4 my-auto">
				<div class="image-block">
					<img src="images/services/email-marketing/customized-email-design.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Key points-->

<!--Start Service-->
<section class="service bg-gradient7 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="image-block">
					<img src="images/services/business-email-marketing.webp" alt="image" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-8 block-1 my-auto">
				<div class="common-heading text-l pl25">
					<div class="sctxt">Email Marketing</div>
					<h2>Email Marketing Performance Management</span></h2>
					<p>We are an ROI-focused email marketing services provider obsessed with taking the guesswork out of optimizing targeted email marketing campaigns. This is why let actual data drive our email marketing decisions. We build accurate buyer profiles based on email subscriber actions and perform A/B testing on segmented recipient lists. Some of the metrics we track, analyse and share with our clients are open rates, CTR, link performance, bounce & unsubscribe rates. Our Email marketing performance reporting is transparent, detailed and easy to understand so that you can stay on top of the email marketing game.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Pricing-->
<section class="block-a1 bg-gradient2 py-5">
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

<!--Start reveiws-->
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