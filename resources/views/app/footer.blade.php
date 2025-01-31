<!--Start Footer-->

<!-- Start Contact -->
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
						<a href="tel:+12535284057" class="transition" tabindex="-1">
							<div class="icon-fld-nx v-center">
								<i class="fas fa-phone-alt"></i>
							</div>
							<div class="text-fld-nx v-center">
								<span class="small-text rows">Our contact Number</span>
								<span class="large-text rows"> +1 (253) 528-4057</span>
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
		</div>
	</div>
</section>
<!-- End Contact -->

<footer class="footerdez footerdex dark-footer">
	<div class="container pt-3 pt-md-3 pb-5 pb-md-3">
		<div class="row justify-content-between">
			<div class="col-sm-12 col-lg-4 pt40 pb40">
				<div class="footerdez-a">
					<h2>We would love to hear from you.</h2>
					<p class="mt10">Feel free to reach out if you want to collaborate with us, or simply have a call.</p>
					<div class="contactinfo mt30">
						<a href="mailto:info@digitroopers.com"><span>→</span> info@digitroopers.com</a>
						<a href="tel:+12535284057"><span>→</span> +1 (253) 528-4057</a>
					</div>
					<div class="fttlnks flexend mt-3">
						<h5>Follow Us</h5>
						<div class="ff-social-icons mt30">
							<a href="https://www.facebook.com/DigiTroopers/" target="blank"><i class="fa-brands fa-facebook"></i></a>
							<a href="https://twitter.com/Digi_Troopers/" target="blank"><i class="fa-brands fa-x-twitter"></i></a>
							<a href="https://www.linkedin.com/company/digitroopers/" target="blank"><i class="fa-brands fa-linkedin-in"></i></a>
							<!-- <a href="https://www.instagram.com/DigiTrooperss/" target="blank"><i class="fa-brands fa-instagram"></i></a> -->
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-lg-7">
				<div class="row fttlnks">
					<div class="col-12 col-sm-4 pt40">
						<h5>OUR ADDRESS</h5>
						<h4 class="mb-0">USA</h4>
						<p class="mb-0 pb-0">12316 SE 254th Ct Kent, WA 98030, United States</p>
						<h4 class="mt20 mb-0">Saudi Arabia</h4>
						<p class="mb-0 pb-0">Floor 3, Building 7264, Ibn Al Fourat, Jareer, P.O 12837 Riyadh, Saudi Arabia</p>
						<!-- <h4 class="mt20 mb-0">Pakistan</h4>
						<p class="mb-0 pb-0">Plot # 115-B, P.E.C.H.S Block 2, 75400, Karachi, Pakistan</p> -->
					</div>
					<div class="col-12 col-sm-4 pt40">
						<h5>USEFUL LINKS</h5>
						<ul class="footer-address-list link-hover">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/about-us')}}">About Us</a></li>
							<li><a href="{{url('/portfolio')}}">Portfolio</a></li>
							<li><a href="{{url('/insights')}}">Insights</a></li>
							<li><a href="{{url('/career')}}">Career</a></li>
							<li><a href="{{url('/our-process')}}">Our Process</a></li>
							<li><a href="{{url('/contactus')}}">Contact Us</a></li>
							<li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
							<li><a href="{{url('/terms-and-conditions')}}">Terms & Conditions</a></li>

						</ul>
					</div>
					<div class="col-12 col-sm-4 pt40">
						<h5>Services</h5>
						<ul class="footer-address-list link-hover">
							<li><a href="{{url('/graphic-design')}}">Graphic Design</a></li>
							<li><a href="{{url('/website')}}">Website Development</a></li>
							<li><a href="{{url('/seo')}}">Search Engine Optimization</a></li>
							<li><a href="{{url('/social-media')}}">Social Media Marketing</a></li>
							<li><a href="{{url('/email-marketing')}}">Email Marketing</a></li>
							<li><a href="{{url('/ecommerce')}}">E-Commerce Management</a></li>
							<li><a href="{{url('/paid-marketing')}}">Google Ads & PPC</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-copyrights">
				<p class="py-2">© Copyrights 2024 DigiTroopers. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>
<!--End Footer-->

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/plugin.min.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/tweenmax.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/owl.navigation.js')}}"></script>
<script src="{{asset('js/owl.autoplay.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<!-- <script src="js/preloader.js"></script> -->
<!-- <script src="js/gdprcookies.js"></script> -->

<script>
	$(document).ready(function() {
		$('#headerVideoLink').magnificPopup({
			type: 'inline',
			midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		});
	});
</script>

<!-- Google Tag Manager -->
<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-TFQVC8Q');
</script>
<!-- End Google Tag Manager -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/61727f61f7c0440a591f79b5/1fijk358n';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
</script>
<!--End of Tawk.to Script-->

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        
		if(document.getElementsByClassName('captchaContainer1')[0].style.display == 'none')
		{
			event.preventDefault(); 

		}
        document.getElementsByClassName('captchaContainer1')[0].style.display = 'block';
    });

    document.getElementById('contactForm1').addEventListener('submit', function(event) {
        
		if(document.getElementsByClassName('captchaContainer')[0].style.display == 'none')
		{
			event.preventDefault(); 

		}
        document.getElementsByClassName('captchaContainer')[0].style.display = 'block';
    });

	document.getElementById('contactForm2').addEventListener('submit', function(event) {
        
		if(document.getElementsByClassName('captchaContainer2')[0].style.display == 'none')
		{
			event.preventDefault(); 

		}
        document.getElementsByClassName('captchaContainer2')[0].style.display = 'block';
    });

	document.getElementById('contactForm33').addEventListener('submit', function(event) {
		if(document.getElementsByClassName('captchaContainer3')[0].style.display == 'none')
		{
			event.preventDefault(); 

		}
        document.getElementsByClassName('captchaContainer3')[0].style.display = 'block';
    });
</script>

<script>
    // Automatically close the alert after 5 seconds
    window.setTimeout(function() {
        document.querySelector('.alert').classList.add('fade');
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 150); // Bootstrap animation duration is 150ms
    }, 5000); // 5000 milliseconds = 5 seconds
</script>
</body>

</html>