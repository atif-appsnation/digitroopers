@extends('app.main')
@section('content')
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-testimonial">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <!-- <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Client Reviews</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Client Reviews</h2>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb-->
<!--Start reveiws-->
<section class="reviews-block pad-tb">
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
            @if($k < 3) 
            <div class="col-md-4 mt30 testimonial">
                <div class="reviews-card pr-shadow">
                    <div class="row v-center">
                        <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                        <!-- <div class="col"> <span class="revbx-rl"><img src="uploads/{{$items['image']}}"  alt="review service logo"></span> </div> -->
                    </div>
                    <div class="review-text">
                        <p class="text">{{$items['title']}}</p>
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

        <!-- <div class="col-md-4 mt30">
                    <div class="reviews-card pr-shadow">
                        <div class="row v-center">
                            <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                            <div class="col"> <span class="revbx-rl"><img src="images/client/upwork-logo.png"
                                        alt="review service logo"></span> </div>
                        </div>
                        <div class="review-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and
                                scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="-client-details-">
                            <div class="-reviewr">
                                <img src="images/client/reviewer-a.jpg" alt="Good Review" class="img-fluid">
                            </div>
                            <div class="reviewer-text">
                                <h4>Mario Speedwagon</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt30">
                    <div class="reviews-card pr-shadow">
                        <div class="row v-center">
                            <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                            <div class="col"> <span class="revbx-rl"><img src="images/client/envato.png"
                                        alt="review service logo"></span> </div>
                        </div>
                        <div class="review-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and
                                scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="-client-details-">
                            <div class="-reviewr">
                                <img src="images/client/reviewer-b.jpg" alt="Good Review" class="img-fluid">
                            </div>
                            <div class="reviewer-text">
                                <h4>Petey Cruiser</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt30">
                    <div class="reviews-card pr-shadow">
                        <div class="row v-center">
                            <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                            <div class="col"> <span class="revbx-rl"><img src="images/client/freelancer-logo.png"
                                        alt="review service logo"></span> </div>
                        </div>
                        <div class="review-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and
                                scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="-client-details-">
                            <div class="-reviewr">
                                <img src="images/client/reviewer-c.jpg" alt="Good Review" class="img-fluid">
                            </div>
                            <div class="reviewer-text">
                                <h4>Anna Sthesia</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star"
                                                    aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    </div>
    </div>
</section>
<!--End reviews-->
<!--Start reveiws-->
<!-- <section class="reviews-block bg-gradient5 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Reviews</span>
                    <h2>Client Testimonials</h2>
                    <p class="mb30">Check our customers success stories.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="row v-center">
                        <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                        <div class="col"> <span class="revbx-rl"><img src="images/client/freelancer-logo.png" alt="review service logo"></span> </div>
                    </div>
                    <div class="review-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and
                            scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="-client-details-">
                        <div class="reviewer-text">
                            <h4>Anna Sthesia</h4>
                            <p>Business Owner, <small>Jaipur</small></p>
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
            <div class="col-md-4 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="row v-center">
                        <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                        <div class="col"> <span class="revbx-rl"><img src="images/client/google-logo.png" alt="review service logo"></span> </div>
                    </div>
                    <div class="review-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and
                            scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="-client-details-">
                        <div class="reviewer-text">
                            <h4>Buck Kinnear</h4>
                            <p>Business Owner, <small>Jaipur</small></p>
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
            <div class="col-md-4 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="row v-center">
                        <div class="col"> <span class="revbx-lr"><i class="fas fa-quote-left"></i></span> </div>
                        <div class="col"> <span class="revbx-rl"><img src="images/client/envato.png" alt="review service logo"></span> </div>
                    </div>
                    <div class="review-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and
                            scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="-client-details-">
                        <div class="reviewer-text">
                            <h4>Buster Hyman</h4>
                            <p>Business Owner, <small>Jaipur</small></p>
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
    </div>
</section> -->
<!--End reviews-->
<!--Start reveiws-->

<!-- <section class="reviews-block pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Reviews</span>
                    <h2>Video Testimonials</h2>
                    <p class="mb30">Check our customers success stories.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="review-video- mb20">
                        <div class="video-review">
                            <a class="video-link" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><img src="images/client/client-pic-a.jpg" alt="client" class="img-fluid">
                                <div class="review-vid-details">
                                    <div class="-vid-ico"><span class="triangle-play2"></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="-client-details-">
                        <div class="reviewer-text">
                            <h4>Curt N. Call</h4>
                            <p>Business Owner, <small>Jaipur</small></p>
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
            <div class="col-md-4 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="review-video- mb20">
                        <div class="video-review">
                            <a class="video-link" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><img src="images/client/client-pic-b.jpg" alt="client" class="img-fluid">
                                <div class="review-vid-details">
                                    <div class="-vid-ico"><span class="triangle-play2"></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="-client-details-">
                        <div class="reviewer-text">
                            <h4>Hugh Briss</h4>
                            <p>Business Owner, <small>Jaipur</small></p>
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
            <div class="col-md-4 mt30">
                <div class="reviews-card pr-shadow">
                    <div class="review-video- mb20">
                        <div class="video-review">
                            <a class="video-link" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><img src="images/client/client-pic.jpg" alt="client" class="img-fluid">
                                <div class="review-vid-details">
                                    <div class="-vid-ico"><span class="triangle-play2"></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="-client-details-">
                        <div class="reviewer-text">
                            <h4>Frank Senbeans</h4>
                            <p>Business Owner, <small>Jaipur</small></p>
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
    </div>
</section> -->

<!--End text reviews-->


<!--Start reveiws-->
<!-- <section class="reviews-block bg-gradient5 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Reviews</span>
                    <h2>External Review Link</h2>
                    <p class="mb30">Check our customers success stories.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="review-ref mt60">
                    <div class="review-title-ref">
                        <h4>Read More Reviews</h4>
                        <p>Read our reviews from all over world.</p>
                    </div>
                    <div class="review-icons">
                        <a href="#" target="blank"><img src="images/about/reviews-icon-1.png" alt="review" class="img-fluid"></a>
                        <a href="#" target="blank"><img src="images/about/reviews-icon-2.png" alt="review" class="img-fluid"></a>
                        <a href="#" target="blank"><img src="images/about/reviews-icon-3.png" alt="review" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--End text reviews-->
@endsection