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
                            <h2>2 Easy Ways To Solve "Add Expire Headers" in WordPress Website</h2>
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
                    <h1>2 Easy Ways To Solve "Add Expire Headers" in WordPress Website</h1>
                    <div class="row mt20 mb20">
                        <div class="col-md-8 col-9">
                            <div class="media">
                                <div class="user-image bdr-radius"><img src="images/user-thumb/profile.webp" alt="profile" class="img-fluid" /></div>
                                <div class="media-body user-info">
                                    <h5>SEO</h5>
                                    <p>Aug 5, 2020</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-3">
                            <div class="postwatch"><i class="far fa-eye"></i> 120</div>
                        </div>
                    </div>
                </div>
                <div class="banner-image"><img src="images/blog/add-expire-headers-in-wordpress-website.webp" alt="blog images" class="img-fluid" /></div>
            </div>
        </div>
        <div class="row" id="main-content">
            <div class="col-lg-9">
                <div class="blog-content mt30">
                    <p>Most people don’t understand what are “Expire Headers” and how they help in website speed. Other people are not able to add this feature in WordPress.</p>
                    <div class="image-set mt20 mb20"><img src="images/blog/picture1.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                    <p>Let’s try to make it easy to understand for anyone and everyone.</p>
                    <p>We need to understand a bit about how browsers help to improve user experience on a <a href="https://digitroopers.com/web-design-and-development/">website</a>.</p>
                    <p>All browser applications use a cache to store certain media or resources such as CSS files.</p>
                    <p>This caching action, decreases page loading time, translating into a delightful user experience.</p>
                    <p>An important thing to note is that these files are ones that are not changed frequently. A web browser will store these files in the cache. When the page is requested again, the files will be loaded through the browser cache instead of the webserver.</p>
                    <p>A browser’s cache cannot hold on to a website’s files like images, CSS, Javascript, etc.) forever. These files need to be discarded from the cache after some time. Then fresh data is requested from the webserver.</p>
                    <p>This is WHERE “Expire Headers” will help you make a faster loading web page.</p>
                    <p>Got it so far?</p>
                    <p>Let&#8217;s get into a bit more detail and discover HOW the magic happens.</p>
                    <p>It&#8217;s quite simple. All is you need to do, is to set the correct rules in a particular file stored on the webserver. These rules set the date to discard old copies and get fresh copies from the webserver.</p>

                    <h2 class="mt20 mb20">HOW WILL BROWSER CACHE EFFECT LOAD SPEED OF A WEBSITE?</h2>
                    <p>When a user clicks on a link in the browser, an HTTP request goes to the web server browser to allow file download. The browser then stores the files in the cache for a specified period.</p>
                    <p>The browser will serve the files immediately instead of requesting the webserver.</p>
                    <p>Let us take a look at an example that will help you understand how browser caching can be leveraged for better page speed.</p>
                    <p>GTMetrix is a specialized website performance analysis tool. The best <a href="https://digitroopers.com/">digital marketing</a> companies use it to track website metrics. A typical report from a website analysis performed on GTMetrix would look like this</p>
                    <div class="image-set mt20 mb20"><img src="images/blog/Picture2.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                    <p>On the screenshot you see, the third recommendation is “Leverage browser caching”. Digital marketing experts know that this requires the addition of “Expire Headers”.</p>

                    <h2 class="mt20 mb20">HOW TO ADD EXPIRE HEADERS?</h2>
                    <p>There are two ways in which Expires Headers can be added to leverage a browser’s caching ability.</p>
                    <p>We can choose to add Expires Headers manually or by using an appropriate plugin. Let’s find out how to do this using both methods.</p>

                    <h3 class="mt20 mb20">HOW TO ADD EXPIRE HEADERS?</h3>
                    <p>The solution presented here will show you how to add Expire Headers on Apache and NGINX servers in 4 easy steps.</p>
                    <p>STEP 1 – Log in to C-Panel on your hosting account.</p>
                    <p>STEP 2 – Locate the File Manager icon as highlighted below. Click on it.</p>
                    <div class="image-set mt20 mb20"><img src="images/blog/cpanel-1.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                    <p>After clicking on the File Manager icon you should be in the files and folder structure of your website.</p>
                    <p>STEP 3 – Now locate the folder “public_html” (highlighted by the red box & arrow) with a blue globe icon on its side. Go ahead and click on that.</p>
                    <div class="image-set mt20 mb20"><img src="images/blog/cpanel-2.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                    <p>STEP 4 – The public_html folder stores the “.htaccess” file. Navigate your pointer to the “.htaccess” file and RIGHT CLICK on it. When you are presented with a menu, choose EDIT.</p>
                    <div class="image-set mt20 mb20"><img src="images/blog/cpanel-3.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                    <h4>Now comes the easiest part.</h4>
                    <p>Just copy and paste the lines of code displayed below.</p>
                    <p><strong>&lt;IfModule mod_expires.c&gt;</strong></p>
                    <p>ExpiresActive On</p>
                    <p><strong># Images</strong></p>
                    <p>ExpiresByType image/jpeg &#8220;access plus 1 year&#8221;</p>
                    <p>ExpiresByType image/gif &#8220;access plus 1 year&#8221;</p>
                    <p>ExpiresByType image/png &#8220;access plus 1 year&#8221;</p>
                    <p>ExpiresByType image/webp &#8220;access plus 1 year&#8221;</p>
                    <p>ExpiresByType image/svg+xml &#8220;access plus 1 year&#8221;</p>
                    <p>ExpiresByType image/x-icon &#8220;access plus 1 year&#8221;</p>
                    <p><strong># Video</strong></p>
                    <p>ExpiresByType video/mp4 &#8220;access plus 1 year&#8221;</p>
                    <p>ExpiresByType video/mpeg &#8220;access plus 1 year&#8221;</p>
                    <p><strong># CSS, JavaScript</strong></p>
                    <p>ExpiresByType text/css &#8220;access plus 1 month&#8221;</p>
                    <p>ExpiresByType text/javascript &#8220;access plus 1 month&#8221;</p>
                    <p>ExpiresByType application/javascript &#8220;access plus 1 month&#8221;</p>
                    <p><strong># Others</strong></p>
                    <p>ExpiresByType application/pdf &#8220;access plus 1 month&#8221;</p>
                    <p>ExpiresByType application/x-shockwave-flash &#8220;access plus 1 month&#8221;</p>
                    <p><strong>&lt;/IfModule&gt;</strong></p>

                    <h3 class="mt20 mb20">2. ADDING EXPIRE HEADERS IN WORDPRESS BY USING PLUGIN</h3>
                    <p>If you are not comfortable with editing any files then Adding Expire Headers from .htaccess is not be advisable. Any type of mistake in editing can render the website inaccessible.</p>
                    <p>Luckily plugins are available for WordPress users to solve this issue. Some of the highly recommended plugins are:</p>
                    <h4>ADD EXPIRE HEADERS PLUGIN</h4>
                    <div class="image-set mt20 mb20"><img src="images/blog/add-expires-headers-plugin.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                    <p><strong>It will:</strong></p>
                    <p>Reduce page load time by caching browser</p>
                    <p>Improve user experience</p>
                    <p>Decrease the total data size of the page</p>
                    <p>It has both free and pro features.</p>

                    <h3 class="mt20 mb20">W3 TOTAL CACHE</h3>
                    <div class="image-set mt20 mb20"><img src="images/blog/w3-total-cache.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                    <p>When it comes to browser caching <a href="https://wordpress.org/plugins/w3-total-cache/">W3 TOTAL CACHE</a> plugin is an excellent plugin available. It solves many web page cache problems. It also offers file compression as well as website security, and traffic management. It does a lot more including allowing a user to minify JavaScript, and the best thing of all is that it is a free plugin. Let’s hope it stays that way!</p>

                    <h3 class="mt20 mb20">WP ROCKET</h3>
                    <div class="image-set mt20 mb20"><img src="images/blog/wp-rocket.webp" alt="blog images" class="img-fluid d-block mx-auto" /></div>
                    <p><a href="https://www.gplplus.com/wp-rocket/?gclid=CjwKCAjwsan5BRAOEiwALzomXxQXmgAZonqPis6oryODgDYrOBrQaqxjQR0DrJ9Mw_R_r7VnMl8JvRoCj7cQAvD_BwE">WP Rocket</a> is also a great plugin. That is if would like to go with a premium and can afford it.</p>
                    <p>Starting at 49$ per year it offers a lot. From caching and gzip to compression, lazy loading expires headers and a whole lot more. You don’t need to access any files or add, delete or edit a single line of code. This plugin will do everything for you and keep your website in tip-top shape.</p>
                    <p>That’s it!</p>
                    <p>Bookmark this page and come back to it if you need a refresher.</p>
                </div>
                <!-- <div class="row">
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
                            <h4><a href="#">Stock Market App Development - Time, Cost, Features</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt30 mb30">
                        <div class="post-navigation text-left text-md-right"> <span><a href="#">Next Post</a></span>
                            <h4><a href="#">How digital transformation has changed the world.</a></h4>
                        </div>
                    </div>
                </div> -->

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
                                    <input type="text" placeholder="Name" name="#" />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" name="#" />
                                </div>
                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Website" name="#" />
                                </div>
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