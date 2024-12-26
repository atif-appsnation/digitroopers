@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-ourclient">
	<div class="text-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 v-center">
					<!-- <div class="bread-inner">
						<div class="bread-menu">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Clients</a></li>
							</ul>
						</div>
						<div class="bread-title">
							<h2>Our Clients</h2>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->
<!--Start About-->
<section class="about-sec classic-bg1 py-5">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-12">
				<div class="sctxt">Clients</div>
				<div class="common-heading mt-3">
					<span>We Are Creative Agency</span>
					<h1 class="mb30">Clients We Work For</h1>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="col-lg-12">
				<div class="clients-logos text-center col-12">
					<div class="row text-center clearfix">
						@foreach($clients as $items)
						<div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 mb-4">
							<div class="brand-logo">
								<img src="uploads/{{$items['image']}}" alt="{{$items['alt']}}" class="img-fluid">
							</div>
						</div>
						@endforeach

						<!-- <li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/bridge.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/habbit.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/habib.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/hom.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/home-store.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/jamaly.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/knorr.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/nj.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/pakistan.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/searle.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/telenor.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/triangle-marketing.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/unilever.png" alt="clients" class="img-fluid">
								</div>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-6">
								<div class="brand-logo">
									<img src="images/client/websoft.png" alt="clients" class="img-fluid">
								</div>
							</li> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->
@endsection