@extends('app.main')
@section('content')

	<!--Breadcrumb Area-->
	<section class="breadcrumb-area banner-thank">
		<div class="text-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 v-center">
						<!-- <div class="bread-inner">
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Insights</a></li>
								</ul>
							</div>
							<div class="bread-title">
								<h2>Insights</h2> </div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Breadcrumb Area-->
	<!--Start Blog Grid-->
	<section class="blog-page py-5">
		<div class="container">
        <section class="thank-you-section py-5">
    <div class="container">
            <div class="col-sm-12">
                <h1 class="text-center">Thank You</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8 text-center">
                <p class="text-center">We have successfully received your request and Digitroopers will contact you shortly to discuss your requirements. Meanwhile, if you have any questions or concerns, please feel free to give us a call.</p>
                <div class="-cta-btn mt30 text-center">

                    <a href="{{url('/')}}" class="btn-main bg-btn3 lnk">Back to Site
                        <i class="fas fa-chevron-right fa-icon" aria-hidden="true"></i>
                        <span class="circle"></span>
                    </a>
                </div>

                <!-- </div> -->
            </div>
        </div>

        <!--End Sidebar-->
    
    <!-- </div> -->
</section>
		</div>
	</section>
	<!--End Blog Grid-->
@endsection