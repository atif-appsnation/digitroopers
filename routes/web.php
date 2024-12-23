<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/a', function () {
    return view('welcome');
});
Route::get("/","HomeController@index");
Route::get("/about-us","HomeController@aboutus");
Route::get("/portfolio","HomeController@portfolio");
Route::get("/insights","HomeController@insights");
Route::get("/contactus","HomeController@contactus");
Route::get("/package","HomeController@packages");
Route::get("/our-process","HomeController@ourprocess");
Route::get("/clients","HomeController@clients");
Route::get("/career","HomeController@career");
Route::get("/graphic-design","HomeController@graphicdesign");
Route::get("/social-media","HomeController@socialmedia");
Route::get("/seo","HomeController@seo");
Route::get("/email-marketing","HomeController@emailmarketing");
Route::get("/ecommerce","HomeController@ecommerce");
Route::get("/paid-marketing","HomeController@paidmarketing");
Route::get("/website","HomeController@websites");
Route::get("/case-studies/flick-soccer","HomeController@flicksoccer");
Route::get("/case-studies/real-state","HomeController@realstate");
Route::get("/case-studies/home-store","HomeController@homestore");
Route::get("/case-studies/ride-share","HomeController@rideshare");
Route::get("/common-ppc-goal","HomeController@commonppc");
Route::get("/smart-ppc-goal","HomeController@smartppc");
Route::get("/type-of-ppc","HomeController@typeofppc");
Route::get("/online-foundation","HomeController@onlinefoundation");
Route::get("/local-seo","HomeController@localseo");
Route::get("/out-ranking","HomeController@outranking");
Route::get("/optimize-business","HomeController@optimizebusiness");
Route::get("/history-of-jquery","HomeController@jqueryhistory");
Route::get("/add-expire-headers","HomeController@expireheaders");
Route::post("/leads","HomeController@leads")->name('leads');
Route::post("/applicant","HomeController@applicant")->name('applicant');
Route::post("/newsletter","HomeController@newsletters")->name('newsletter');
Route::get("/privacy-policy","HomeController@privacypolicy");
Route::get("/terms-and-conditions","HomeController@termsandconditions");
Route::get("/thank-you","HomeController@thankyou");
Route::post("/send-mail","MailController@sendEmail")->name('bf');
Route::get("/black-fridayy","HomeController@blackfriday");
Route::get("/test-format","MailController@testformat");
Route::get("/case-studies/gym","HomeController@gym");
Route::get("/case-studies/loyalty","HomeController@loyalty");
Route::get("/case-studies/real-estate","HomeController@realestate");
Route::get("/case-studies/travel-agency","HomeController@travelagency");