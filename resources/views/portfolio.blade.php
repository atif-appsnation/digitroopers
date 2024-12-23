@extends('app.main')
@section('content')


<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-3">
	<div class="text-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 v-center">
					<!-- <div class="bread-inner">
						<div class="bread-menu">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Portfolio</a></li>
							</ul>
						</div>
						<div class="bread-title">
							<h2>Our Projects</h2>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->
<!--Start Portfolio-->

<section class="portfolio-page py-5">
	<div class="container">
		<div class="row justify-content-left">
			<div class="col-lg-2">
				<div class="common-heading pp">
					<span>Our Work</span>
					<h2>Portfolio</h2>
				</div>
			</div>
			<div class="col-lg-10 v-center">
				<div class="filters">
					<!-- class="filter-menu" -->
					<ul class="filter-menu1 mt-2 mt-md-2 mt-lg-0">
						<!-- <li data-filter="*" class="is-checked">All</li> -->
						<a href="?a=Web">
							<li data-filter=".Web">Website</li>
						</a>
						<a href="?a=UI/UX">
							<li data-filter=".UI/UX">UI/UX</li>
						</a>
						<a href="?a=Logo">
							<li data-filter=".Logo">Logo</li>
						</a>
						<a href="?a=Mobile-App">
							<li data-filter=".Mobile-App" class="mt-2 mt-md-2 mt-lg-0">Mobile App</li>
						</a>
						<a href="?a=Graphic">
							<li data-filter=".Graphic">Graphic</li>
						</a>
						<a href="?a=Animation">
							<li data-filter=".Animation" class="mt-2 mt-md-0">Animation</li>
						</a>
						<a href="?a=3D-Modeling">
							<li data-filter=".3D-Modeling">3D Modeling</li>
						</a>
						<a href="?a=Game">
							<li data-filter=".Game" class="mt-2 mt-md-2 mt-lg-0">Game-Art</li>
						</a>

					</ul>
				</div>
			</div>
		</div>

		<div class="row card-list">
			<div class="col-lg-4 col-md-6 grid-sizer">

			</div>
			@foreach($portfolio as $items)
			@if($items['type']=="Animation")
			<div class="col-sm-12 col-md-4 single-card-item {{$items['type']}}">
				<div class="isotope_item hover-scale">
					<div class="">
						<a href="#">
							<!-- <iframe width="600" height="450" src="{{$items['comments']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
							{!!$items['comments']!!}
						</a>
					</div>
					<div class="item-info">
						<h4><a href="#">{{$items['title']}}</a></h4>
						<p>{{$items['type']}}</p>
					</div>
				</div>
			</div>
			@else

			<div class="col-sm-12 col-md-4 single-card-item {{$items['type']}}">
				<div class="isotope_item hover-scale">
					<div class="item-image">
						<a href="#">

							<img src="{{url('/')}}/uploads/{{$items['image']}}" alt="{{$items['title']}}" class="img-fluid"  />
						</a>
					</div>
					<div class="item-info">
						<h4><a href="#">{{$items['title']}}</a></h4>
						<p>{{$items['type']}}</p>
					</div>
				</div>
			</div>

			@endif
			@endforeach
		</div>
		{!! $portfolio->links("vendor.pagination.bootstrap-4") !!}
	</div>
</section>

<!--End Portfolio-->
@endsection