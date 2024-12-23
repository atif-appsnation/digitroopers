<!DOCTYPE html>
<html lang="en">

<head>
    <title>Black Friday Offer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="black-friday/css/bootstrap.min.css" rel="stylesheet">
    <link href="black-friday/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container px-3 px-md-5 d-block mx-auto mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card card1">
                    <div class="card-body">
                        <div class="row mt-4">
                            <img src="black-friday/images/digitroopers-logo.webp" alt="Logo" class="img-fluid logo">
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <h2 class="text-uppercase text-center text-warning">Black Friday Offer</h2>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-12">
                                <h1 class="text-uppercase text-center text-white py-4 mb-0">Get 50% Off Digitroopers<br> Services Vouchers</h1>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-12">
                                <p class="text-center text-white py-4 mb-0">Get 50% OFF on our any services by redeeming this FREE voucher.<br>
                                    You can redeem this voucher anytime you want for only 1 week.</p>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-12">
                                <div id="clock-c" class="countdown"></div>
                            </div>
                        </div>
                        <div class="row my-4 button-row justify-content-center text-center">
                            <div class="col-10 col-sm-8">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-danger btn-lg btn-block text-uppercase" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Get 50% off vouchers now!</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-center text-white seats">Only Limited Voucher are Available. Claim Yours Now!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <p class="mb-0 text-white">725 N San Vicente Blvd, Ste 800 West, West Hollywood, CA 90069</p>
                        <p class="mb-0 text-white">https://www.digitroopers.com | +1 (310) 596-3004</p>
                        <p class="mb-0 text-white"><a href="https://www.digitroopers.com/terms-and-conditions" target="_blank" class="text-white">Terms & Conditions</a> | <a href="https://www.digitroopers.com/privacy-policy" target="_blank" class="text-white">Privacy Policy</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal">
        <form action=""></form>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('bf')}}" method="post">
                        @csrf
                        <div class="mb-3 mt-3">
                            <input type="text" class="form-control" id="name" placeholder="First Name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
                        </div>
                        <div class="mb-3">
                            <select name="service" class="form-select" required>
                                <option value="-">Select Service</option>

                                <option value="Social-Media-Marketing">Social Media Marketing</option>
                                <option value="Social-Media-Management">Social Media Management</option>
                                <option value="PPC">PPC</option>
                                <option value="Logo-Design">Logo Design</option>
                                <option value="Video-Animation">Video Animation</option>
                                <option value="Website-Development">Website Development</option>
                                <option value="E-commerce-Management">E-commerce Management</option>
                                <option value="Graphic-Design">Graphic Design</option>
                                <!--                               
                                <option value="designing">Designing</option>
                                <option value="development">Development</option>
                                <option value="social-media">Social Media</option>
                                <option value="seo">SEO</option>
                                <option value="email-marketing">Email Marketing</option>
                                <option value="paind-marketing">Paid Marketing</option>
                                <option value="ecommerce-managment">E-Commerce Management</option> -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" required>
                        </div>
                        <button type="submit" class="btn btn-danger d-block mx-auto">Get Your Voucher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="black-friday/js/jquery-3.6.1.min.js"></script>
    <script src="black-friday/js/bootstrap.bundle.min.js"></script>
    <script src="black-friday/js/jquery.countdown.js"></script>
    <script src="black-friday/js/custom.js"></script>
</body>

</html>