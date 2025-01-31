@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-6">
	<div class="text-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 v-center">
					<!-- <div class="bread-inner">
						<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
						<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
							<h2>Contact</h2>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start Enquire Form-->
<section class="contact-page py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 v-center">
				<img src="images/contact-us/contact-us.webp" alt="Contact" class="img-fluid">
			</div>
			<div class="col-lg-6 v-center">
				<div class="contact-details">
					<div class="contact-card wow fadeIn" data-wow-delay=".2s">
						<div class="info-card v-center">
							<span>
								<i class="fas fa-phone-alt"></i> 
								Phone:
							</span>
							<div class="info-body">
								<p>Assistance hours: Monday – Friday, 9 am to 5 pm</p> 
								<a href="tel:+12535284057"> +1 (253) 528-4057</a>
							</div>
						</div>
					</div>
					<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
						<div class="info-card v-center">
							<span>
								<i class="fas fa-envelope"></i> Email:
							</span>
							<div class="info-body">
								<p>Our support team will get back to in 24-h during standard business hours.</p>
								<a href="mailto:info@digitroopers.com">info@digitroopers.com</a>
							</div>
						</div>
					</div>
					<div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
						<div class="info-card v-center">
							<a href="https://www.facebook.com/DigiTroopers/" target="_blank">
								<span><i class="fa-brands fa-facebook"></i> Facebook</span>
							</a>
						</div>
						<div class="info-card v-center">
							<a href="https://twitter.com/Digi_Troopers/" target="_blank">
								<span><i class="fa-brands fa-x-twitter"></i> Twitter</span>
							</a>
						</div>
						<div class="info-card v-center">
							<a href="https://www.instagram.com/DigiTrooperss/" target="_blank">
								<span><i class="fa-brands fa-linkedin-in"></i> Instagram</span>
							</a>
						</div>
						<div class="info-card v-center">
							<a href="https://www.linkedin.com/company/digitroopers/" target="_blank">
								<span><i class="fa-brands fa-instagram"></i> LinkedIn</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Enquire Form-->

<!--Start Location-->
<section class="contact-location py-5 bglight">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading text-center">
					<span>Our Locations</span>
					<h2>Our Offices</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center upset shape-numm">
			<div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
				<div class="office-card">
					<div class="skyline-img"> <img src="images/location/usa.webp" alt="New York" class="img-fluid" /> </div>
					<div class="office-text">
						<h4>USA</h4>
						<p>12316 SE 254th Ct Kent, WA 98030, United States</p>
						<a href="https://goo.gl/maps/3mWEcHKTQgBkhed5A" target="blank" class="btn-outline">View on Map
							<i class="fas fa-chevron-right fa-icon"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".6s">
				<div class="office-card mb0">
					<div class="skyline-img"> <img src="images/location/location3.webp" alt="rome" class="img-fluid" /> </div>
					<div class="office-text">
						<h4>Saudia Arabia</h4>
						<p>Floor 3, Building 7264, Ibn Al Fourat, Jareer, P.O 12837 Riyadh, Saudi Arabia</p>
						<a href="https://goo.gl/maps/vjT354qaTv9V7hQz8" target="blank" class="btn-outline">View on Map
							<i class="fas fa-chevron-right fa-icon"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".4s">
				<div class="office-card">
					<div class="skyline-img"> <img src="images/location/karachi.webp" alt="sydney" class="img-fluid" /> </div>
					<div class="office-text">
						<h4>Pakistan</h4>
						<p>Plot # 115-B, P.E.C.H.S Block 2, 75400, Karachi, Pakistan</p>
						<a href="https://g.page/futurealiti?share" target="blank" class="btn-outline">View on Map
						    <i class="fas fa-chevron-right fa-icon"></i>
						 </a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>
<!--End Location-->
@endsection