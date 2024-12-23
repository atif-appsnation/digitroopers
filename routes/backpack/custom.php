<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('tag', 'TagCrudController');
    Route::crud('mainslider', 'MainsliderCrudController');
    Route::crud('metabank', 'MetabankCrudController');
    Route::crud('lead', 'LeadCrudController');
    Route::crud('portfolio', 'PortfolioCrudController');
    Route::crud('testimonial', 'TestimonialCrudController');
    Route::crud('pricing', 'PricingCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('career', 'CareerCrudController');
    Route::crud('newsletter', 'NewsletterCrudController');
    Route::crud('metatag', 'MetatagCrudController');
    Route::crud('metatitle', 'MetatitleCrudController');
}); // this should be the absolute last line of this file