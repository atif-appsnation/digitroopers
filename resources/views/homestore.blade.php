@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
	<section class="breadcrumb-area banner-hom">
		<div class="text-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 v-center">
						<!-- <div class="bread-inner">
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="case-study.html">Case Study</a></li>
									<li><a href="#">Home Store</a></li>
								</ul>
							</div>
							<div class="bread-title">
								<h2>Home Store</h2>
						    </div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Breadcrumb Area-->
	<!--Start Case Study About-->
	<section class="case-study py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="image-block upset">
					    <img src="{{asset('images/hom-slider/1st.webp')}}" alt="case study" class="img-fluid no-shadow" />
					</div>
				</div>
				<div class="col-lg-6 block-1 v-center">
					<div class="common-heading inner-heading text-l pl25">
					    <span>About The Project</span>
						<h2>On-Demand - Ecommerce Website</h2>
						<p>Homstore.pk - they wanted an e-commerce website for  their business so that they could start selling their product online, they asked us to make a proper e-commerce website for them, they demanded that the website should be:</p> 
						<ul class="list">
						    <li>User-Friendly</li>
						    <li>Mobile-Friendly</li>
						    <li>Fully Optimized</li>
						    <li>Proper Address Detail Addition</li>
						    <li>B2C & much more</li>
						</ul>

					</div>
					<div class="project-platform mt60 pl25">
						<div class="project-platform-used -shadow">
							<a href="#"><img src="{{asset('images/icons/android.svg')}}" alt="android"></a>
						</div>
						<div class="project-platform-used -shadow">
							<a href="#"><img src="{{asset('images/icons/apple.svg')}}" alt="apple"></a>
						</div>
						<div class="project-platform-used -shadow">
							<a href="#"><img src="{{asset('images/icons/windows.svg')}}" alt="windows"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Case Study About-->
	<section class="case-study py-5 bg-gradient6 deep-dark">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="common-heading">
					    <span>Website Features</span>
						<h2 class="mb30">As per the client's need, Digitroopers has developed.</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<ul class="list-style-">
						<li>View items available for sale.</li>
						<li>Receive an immediate discount when ordering more.</li>
						<li>Provide instant shipping date and time.</li>
						<li>User’s dashboard.</li>
						<li>Customer satisfaction survey system during checkout.</li>
						<li>Web Design and Layout.</li>
						<li>Responsive Design.</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul class="list-style-">
						<li>Call to Action.</li>
						<li>FAQs Section.</li>
						<li>Contact Information.</li>
						<li>Fully Optimized.</li>
						<li>Mobile-Friendly.</li>
						<li>User-Friendly.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--Start Project Challenges-->
	<section class="challanges py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-6">
					<h2 class="mt20 mb20">Challenges</h2>
					<p>After meeting with the owner of  HomStore & discussing everything with him, we were excited to help them achieve the next level. Their down-to-earth approach, along with their pre-existing popularity as one of the best cooking oil sellers, made it obvious to us that their refreshing, helpful culture should be represented in their new branding.</p>
					<p>We quickly got to work on Research & Discovery and laying the foundation of a branding and marketing strategy that would carry the project through. Little did we know how much their presence and capability would grow in the next two years.</p>
					<p>With some familiarity among the local community, Third Day didn’t want to navigate too far from its original logo concept. So we worked with them on logo design to create a clean, bright logo that would help establish a strong brand and lend itself well for use in digital and physical mediums.</p>
				</div>
				<div class="col-lg-6 col-sm-6">
					<div class="project-view m-mt30">
					    <img src="{{asset('images/hom-slider/2nd.webp')}}" alt="case study" class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Project Challenges-->
	<!--Start Solutions-->
	<section class="case-study py-5 bg-gradient5 deep-dark">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="common-heading inner-heading">
					    <span>Solutions</span>
						<h2>How We Work</h2>
						<p>In our process we always focus on quality, testing and want to deliver good software on time. We use the best software development practices in everything we do!</p>
					</div>
				</div>
			</div>
			<div class="row">
			    <div class="col-lg-12">
					<div class="card-nx row">
						<div class="col-12 col-sm-12 col-md-3 mt30">
							<div class="icon-card-"> <img src="{{asset('images/icons/logo-and-branding.svg')}}" alt="case study" class="img-fluid">
								<h4>UI/UX Design</h4> </div>
						</div>
						<div class="col-12 col-sm-12 col-md-3 mt30">
							<div class="icon-card-"> <img src="{{asset('images/icons/branding.svg')}}" alt="case study" class="img-fluid">
								<h4>Front-end Dev</h4> </div>
						</div>
						<div class="col-12 col-sm-12 col-md-3 mt30">
							<div class="icon-card-"> <img src="{{asset('images/icons/back.svg')}}" alt="case study" class="img-fluid">
								<h4>Back-end Dev</h4> </div>
						</div>
						<div class="col-12 col-sm-12 col-md-3 mt30">
							<div class="icon-card-"> <img src="{{asset('images/icons/seo.svg')}}" alt="case study" class="img-fluid">
								<h4>SEO Optimization</h4> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Solutions-->
	<div class="case-study py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="project-screens owl-carousel">
						<div class="screen-splits"> <img src={{asset('images/hom-slider/1.webp')}} alt="case study" class="img-fluid" /></div>
						<div class="screen-splits"> <img src={{asset('images/hom-slider/2.webp')}} alt="case study" class="img-fluid" /></div>
						<div class="screen-splits"> <img src={{asset('images/hom-slider/3.webp')}} alt="case study" class="img-fluid" /></div>
						<div class="screen-splits"> <img src={{asset('images/hom-slider/4.webp')}} alt="case study" class="img-fluid" /></div>
						<div class="screen-splits"> <img src={{asset('images/hom-slider/5.webp')}} alt="case study" class="img-fluid" /></div>
						<div class="screen-splits"> <img src={{asset('images/hom-slider/6.webp')}} alt="case study" class="img-fluid" /></div>
						<div class="screen-splits"> <img src={{asset('images/hom-slider/7.webp')}} alt="case study" class="img-fluid" /></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Start Result-->
	<section class="case-study py-5 deep-dark">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="common-heading">
						<h2 class="mb30">See The Result</h2>
					</div>
				</div>
			</div>
			<div class="row in-stats card-stats">
				<div class="col-12 col-sm-12 col-md-3 mt30">
					<div class="statistics">
						<div class="statnumb"> <span class="counter">20</span><span>%</span>
							<p>ROI Increase</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-3 mt30">
					<div class="statistics">
						<div class="statnumb counter-number"> <span class="counter">40</span><span>%</span>
							<p>Traffic Increase</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-3 mt30">
					<div class="statistics">
						<div class="statnumb counter-number"> <span class="counter">30</span><span>%</span>
							<p>Order Increase</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-3 mt30">
					<div class="statistics">
						<div class="statnumb counter-number"> <span class="counter">60</span><span>%</span>
							<p>Order Increase</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Result-->
	<!--Start reveiws-->
	<section class="reviews-block py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-8">
				<div class="common-heading ptag">
					<span>Reviews</span>
					<h2>Client Testimonials</h2>
					<p class="mb30">Check our customers success stories.</p>
				</div>
			</div>
		</div>
		<div class="row">

			@foreach($testimonial as $k=>$items)
			@if($k < 3) <div class="col-md-4 mt30">
				<div class="reviews-card pr-shadow">
					<div class="row v-center">
						<div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
					</div>
					<div class="review-text">
						<p>{{$items['title']}}</p>
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
	</div>
</section>
	<!--End reviews-->
    @endsection