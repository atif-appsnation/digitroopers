@extends('app.main')
@section('content')
	<!--Breadcrumb Area-->
	<section class="breadcrumb-area banner-2">
		<div class="text-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 v-center">
						<!-- <div class="bread-inner">
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="insights.html">Insights</a></li>
								</ul>
							</div>
							<div class="bread-title">
								<h2>A Short History of Jquery</h2>
                            </div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Breadcrumb Area-->
	<!--Start Blog Details-->
	<section class="blog-page py-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="blog-header">
						<h1>A Short History of Jquery</h1>
						<div class="row mt20 mb20">
							<div class="col-md-8 col-9">
								<div class="media">
									<div class="user-image bdr-radius"><img src="images/user-thumb/profile.webp" alt="profile" class="img-fluid" /></div>
									<div class="media-body user-info">
										<h5>On Page SEO</h5>
										<p>Aug 09, 2020</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-3">
								<div class="postwatch"><i class="far fa-eye"></i> 120</div>
							</div>
						</div>
					</div>
					<div class="banner-image"><img src="images/blog/a-short-history-of-jquery.webp" alt="blog images" class="img-fluid" /></div>
				</div>
			</div>
			<div class="row" id="main-content">
				<div class="col-lg-9">
					<div class="blog-content mt30">
                        <h2 class="mt20 mb20">What is GOOGLE MY BUSINESS</h2>
						<p>Let’s go back and review the history of <a href="https://digitroopers.com/web-design-and-development/">front-end development</a>. Many years ago if front-end developers had to do font tags and color attributes they had to set tags.</p>
                        <p>HTML files were saturated, and if the goal was to change the style of 100 pages, it was manually done for each page. This scenario played out as the worst nightmare for web developers. Then along came CSS. It allowed managing web pages style from one place. A similar sort played out for JavaScript.</p>
                        <p>JavaScript became popular by following in the footsteps of CSS. It was very easy to use and provided a much better user experience.</p>
                        <p>By mid-2000s several pieces of silver code from JavaScript library had been released. Some of those are MOTOOLS, PROTOTYPE, DOJO, jQuery among many others.</p>
                        <p><a href="https://jquery.com/">JQuery</a> became the top choice of developers for site interactivity and user experience.</p>
                        <div class="image-set mt20 mb20"><img src="images/blog/html-css-jquery.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                        <p>HTML  Relies on structure</p>
                        <p>CSS   Used for site appearance and styling</p>
                        <p>JQuery   Controls the behavior of interactivity</p>
                        
						<h2 class="mt20 mb20">WHAT IS JQUERY?</h2>
                        <div class="image-set mt20 mb20"><img src="images/blog/jquery.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                        <p>Yes, you read it right. Write less, do more. JQuery is a fast, small, and feature-rich JavaScript library. It’s no surprise that even today jQuery is the most popular lightweight library on the web. It uses the functionality of JavaScript to make it easy for a web developer to do necessary tasks. These tasks may include:</p>
						<ul class="list">
							<li>Manipulating web pages.</li>
							<li>Responding to user events.</li>
							<li>Getting data from web servers.</li>
							<li>Building animations and special effects.</li>
						</ul>
						<p>JQuery builds on top of the functionality that a browser gives us via JavaScript DOM API. It simplifies HTML DOM (Document Object Module) tree traversal. With jQuery traversing, you can start from any element and move up, down, and sideways in the DOM tree. In short, it will perform a function in far fewer lines of code than earlier possible.</p>
						<p>We will try to understand by using some examples:</p>
						<p>Let’s suppose you wanted to resize all the images on your web page or wanted to add some animation. You could choose to write several lines of code. Or you could write a single line of code and let jQuery do all the heavy lifting for you. jQuery simply means less coding to achieve the same results. Not only that jQuery will also take care of any cross-browser bugs, to make life easier.</p>

						<h2 class="mt20 mb20">DIFFERENCE BETWEEN jQUERY AND JAVASCRIPT</h2>
						<p>Javascript is a programming language. While jQuery is a set collection of functions written using Javascript.</p>

                        <h2 class="mt20 mb20">WHAT IS JQUERY USED FOR AND WHY?</h2>
						<p>jQuery provides a set of functions written in Javascript. The effort has already been put in once. There is no need to re-write these functions. With <a href="https://jquery.com/">jQuery</a>, you just use them where you want to. No need to re-invent the wheel. There are tons of libraries out there you can use for your convenience.</p>
                        <p>jQuery has several benefits over raw JavaScript.</p>
                        <p>JQuery is cross-browser applicable.</p>
                        <p>Its a lot easier to use than raw Javascript with less coding.</p>
                        <p>It is extensible (mechanism available to extend the programming language).</p>
                        <p>It&#8217;s simple and has rich AJAX support.</p>
                        <p>jQuery comes with excellent documentation.</p>
                        <p>It has a large developer community and offers many plugins.</p>
                        <div class="image-set mt20 mb20"><img src="images/blog/Picture4-1.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                        <div class="image-set mt20 mb20"><img src="images/blog/Picture6-1.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                        <div class="image-set mt20 mb20"><img src="images/blog/Picture5-1.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>

						<h2 class="mt20 mb20">WHAT IS THE MEANING OF $ IN JQUERY</h2>
						<p>Here you can find out symbols and their meaning.</p>
                        <h6>Points to Remember</h6>
                        <p>Ready ( ) function ensures that the DOM is fully loaded</p>
                        <p>$ It is short for jQuery</p>
                        <p>All three of the following syntaxes are equal to each other:</p>
                        <ul class="list">
                            <li>$(document) . ready (handler)</li>
                            <li>$( ). Ready (handler) this is not recommended</li>
                            <li>$(handler)</li>
                        </ul>
						
                        <h2 class="mt20 mb20">HOW TO GET JQUERY ON A WEBSITE</h2>
						<h5 class="mt20 mb20">Here are two ways to add jQuery to your website:</h5>
						<ul class="list">
                            <li>Download the jQuery library from its site <a href="https://jquery.com/">www.jquery.com.</a></li>
                            <li>Include jQuery from Google CDN (Content Delivery Network)</li>
                        </ul>

                        <h5 class="mt20 mb20">There are 2 versions available for downloading jQuery.</h5>
                        <ul class="list">
                            <li>Production version &#8211; Used for the live website. The code is minified and compressed.</li>
                            <li>Development version &#8211; Used for development and testing. Code is readable and uncompressed</li>
                        </ul>

                        <p>You can download both versions from the jQuery website. The jQuery library is a single javascript file. you can reference it with HTML &lt;scrip&gt;</p>
                        <p><strong>Note : &lt;script&gt; tag should be inside the tag &lt;head&gt;</strong></p>
                        <p><strong>&lt;head&gt;</strong><br />
                        <strong>&lt;script src=&#8221;jquery-3.5.1.min.js&#8221;&gt;&lt;/script&gt;</strong><br />
                        <strong>&lt;/head&gt;</strong></p>
                        <p>But if you don’t want to download and host jQuery, you can include it from a CDN (Content Delivery Network). Google hosts jQuery, which goes by the name of jQuery Google CDN.</p>
                        <p>Google CDN is the most reliable, fast, and globally available content delivery network. jQuery hosted on Google CDN is a great choice. This is because Google works directly with all key stakeholders involved. It updates libraries to the most current version with ease and convenience. Google recommends that libraries are loaded from CDN via HTTPS. This is applicable even if your website uses only HTTP.</p>
                        <p>&lt;head&gt;<br />
                        &lt;script src=&#8221;<a href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><u>https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js</u></a>&#8220;&gt;</p>
                        <p>&lt;/script&gt;<br />
                        &lt;/head&gt;</p>
                        <p>Copy and paste the HTML snippet for the library (shown above) for your web page.</p>
<!-- 
						<div class="row">
							<div class="col-lg-8 col-md-8 mt30 mb30">
								<div class="blog-post-tag"> <span>Releted Tags</span> <a href="#">Web Design</a> <a href="#">Marketing</a> <a href="#">SEO</a> </div>
							</div>
							<div class="col-lg-4 col-md-4 mt30 mb30">
								<div class="blog-share-icon text-left text-md-right"> <span>Share: </span> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a> <a href="#"><i class="fab fa-vimeo-v"></i></a> </div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 mt30 mb30">
								<div class="post-navigation text-left "> <span><a href="#">Prev Post</a></span>
									<h4><a href="#">Stock Market App Development - Time, Cost, Features</a></h4> </div>
							</div>
							<div class="col-lg-6 col-md-6 mt30 mb30">
								<div class="post-navigation text-left text-md-right"> <span><a href="#">Next Post</a></span>
									<h4><a href="#">How digital transformation has changed the world.</a></h4> </div>
							</div>
						</div> -->
					</div>
					<!-- <div class="comments-block mt60">
						<h2 class="mb60">Comments:</h2>
						<div class="media">
							<div class="user-image"><img src="images/user-thumb/user3.webp" alt="girl" class="img-fluid" /></div>
							<div class="media-body user-info">
								<h5 class="mb10">Petey Cruiser <small>says:</small><span>November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a></span></h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.</p>
							</div>
						</div>
						<div class="media replied">
							<div class="user-image"><img src="images/user-thumb/user3.webp" alt="girl" class="img-fluid" /></div>
							<div class="media-body user-info">
								<h5 class="mb10">Petey Cruiser <small>says:</small><span>November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a></span></h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.</p>
							</div>
						</div>
						<div class="media">
							<div class="user-image bdr-radius"><img src="images/user-thumb/user3.webp" alt="girl" class="img-fluid" /></div>
							<div class="media-body user-info">
								<h5 class="mb10">Petey Cruiser <small>says:</small><span> May 25, 2020 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a></span></h5>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
							</div>
						</div>
						<div class="form-block form-blog mt60">
							<form action="#" method="post" name="#">
								<div class="fieldsets row">
									<div class="col-md-6">
										<input type="text" placeholder="Name" name="#" /> </div>
									<div class="col-md-6">
										<input type="email" placeholder="Email" name="#" /> </div>
								</div>
								<div class="fieldsets row">
									<div class="col-md-12">
										<input type="text" placeholder="Website" name="#" /> </div>
								</div>
								<div class="fieldsets">
									<textarea placeholder="Write Your Comment" name="#"></textarea>
								</div>
								<div class="fieldsets mt10">
									<button type="submit" name="#" class="btn-main bg-btn lnk">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
								</div>
							</form>
						</div>
					</div> -->
				</div>
				<!--End Blog Details-->
				<!--Start Sidebar-->
				<div class="col-lg-3" id="sidebar">
				<div class="sidebar mt30" id="sidebar__inner">
					<!--Start block for offer/ads-->
					<div class="newsletter">
						<h5>Subscribe for our Newsletter</h5>
						<p>Join our team who get our best digital marketing insights, strategies, and tips delivered straight to your inbox.</p>
						<form action="{{route('newsletter')}}" class="mt-3" method="post">
							@csrf
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name" id="name">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" id="email">
							</div>
							<input type="hidden" name="purpose" value="newsletter">
							<button type="submit" class="btn btn-primary update-btn bg-btn2 d-block mx-auto">Get Updates</button>

						</form>
					</div>

					<!-- <div class="search mt30">
						<h5 class="text-center">———-&nbsp; Search&nbsp; ———-</h5>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Start Typing and hit enter">
							<div class="input-group-append">
								<button class="btn btn-secondary search-button" type="button"> <i class="fa fa-search"></i> </button>
							</div>
						</div>
					</div>
					<div class="post mt30">
						<h5 class="text-center">Post Categories</h5>
						<select name="job" class="custom-select">
							<option selected>Select</option>
							<option value="Graphic Designer">Digital Marketing</option>
							<option value="Content Writer">Google</option>
							<option value="Website Developer">Google Ads or PPC</option>
							<option value="SEO Specialist">On Page SEO</option>
							<option value="Social Media Manager">SEO</option>
						</select>
					</div> -->

					<div class="analyses mt30">
						<h5 class="text-center">GET FREE WEB ANALYSES</h5>
						<form action="{{route('newsletter')}}" class="mt-3" method="post">
							@csrf
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Full Name" id="name" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
							</div>
							<div class="form-group">
								<input type="text" name="website" class="form-control" placeholder="Website URL" id="email">
							</div>
							<input type="hidden" name="purpose" value="website analyse">
							<button type="submit" class="btn btn-primary update-btn bg-btn2 d-block mx-auto">Submit</button>
						</form>
					</div>
					<!--End block for offer/ads-->
				</div>
			</div>
				<!--End Sidebar-->
			</div>
		</div>
	</section>
    @endsection