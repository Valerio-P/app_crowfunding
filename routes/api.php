<?php

use App\Http\Controllers\CoinbaseController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// User api routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/upload/documents', [UserController::class, 'uploadDocuments']);

// Property api routes

Route::get('/properties', [PropertyController::class, "allProperties"]);

Route::get('/property/{id}', [PropertyController::class, "show"]);

Route::middleware('auth:sanctum')->get('/user/properties', [PropertyController::class, "userProperties"]);

Route::get('/json/map-options-real-estate-rent', function () {

    $res = [
        "mapLayer" => "https://api.maptiler.com/maps/pastel/{z}/{x}/{y}.png?key=Vcba4x1sKTleZnsXzYyX",
        "scrollWheelZoom" => false,
        "coordinates" => [40.708, -73.997],
        "zoom" => 15,
        "markers" => [
            [
                "coordinates" => [40.72, -73.996],
                "className" => "custom-marker-dot",
                "popup" => "<a href='real-estate-single.html' class='d-block'><img src='/images/06.jpg' src='Image'></a><div class='card-body position-relative pb-3'><h4 class='mb-1 fs-xs fw-normal text-uppercase text-primary'>For rent</h4><h3 class='h6 mb-1 fs-sm'><a href='real-estate-single.html' class='nav-link stretched-link'>3-bed Apartment | 67 sq.m</a></h3><p class='mt-0 mb-2 fs-xs text-muted'>365 Broome Street, NY 11105</p><div class='fs-sm fw-bold'><i class='fi-cash me-2 fs-base align-middle opacity-70'></i>$1,650</div></div><div class='card-footer d-flex align-items-center justify-content-center mx-2 pt-2 text-nowrap'><span class='d-inline-block px-2 fs-sm'>3<i class='fi-bed ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>2<i class='fi-bath ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>1<i class='fi-car ms-1 fs-base text-muted'></i></span></div>"
            ],
            [
                "coordinates" => [40.7225, -73.998],
                "className" => "custom-marker-dot",
                "popup" => "<a href='real-estate-single.html' class='d-block'><img src='/images/06.jpg' src='Image'></a><div class='card-body position-relative pb-3'><h4 class='mb-1 fs-xs fw-normal text-uppercase text-primary'>For rent</h4><h3 class='h6 mb-1 fs-sm'><a href='real-estate-single.html' class='nav-link stretched-link'>Pine Apartments | 56 sq.m</a></h3><p class='mt-0 mb-2 fs-xs text-muted'>72 Crosby Street, NY 11105</p><div class='fs-sm fw-bold'><i class='fi-cash me-2 fs-base align-middle opacity-70'></i>$2,000</div></div><div class='card-footer d-flex align-items-center justify-content-center mx-2 pt-2 text-nowrap'><span class='d-inline-block px-2 fs-sm'>4<i class='fi-bed ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>2<i class='fi-bath ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>2<i class='fi-car ms-1 fs-base text-muted'></i></span></div>"
            ],
            [
                "coordinates" => [40.723, -73.990],
                "className" => "custom-marker-dot",
                "popup" => "<a href='real-estate-single.html' class='d-block'><img src='/images/06.jpg' src='Image'></a><div class='card-body position-relative pb-3'><h4 class='mb-1 fs-xs fw-normal text-uppercase text-primary'>For rent</h4><h3 class='h6 mb-1 fs-sm'><a href='real-estate-single.html' class='nav-link stretched-link'>Greenpoint Rentals | 85 sq.m</a></h3><p class='mt-0 mb-2 fs-xs text-muted'>143 E-Houston Street, NY 11105</p><div class='fs-sm fw-bold'><i class='fi-cash me-2 fs-base align-middle opacity-70'></i>$1,350</div></div><div class='card-footer d-flex align-items-center justify-content-center mx-2 pt-2 text-nowrap'><span class='d-inline-block px-2 fs-sm'>2<i class='fi-bed ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>1<i class='fi-bath ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>0<i class='fi-car ms-1 fs-base text-muted'></i></span></div>"
            ],
            [
                "coordinates" => [40.7176, -74],
                "className" => "custom-marker-dot",
                "popup" => "<a href='real-estate-single.html' class='d-block'><img src='/images/06.jpg' src='Image'></a><div class='card-body position-relative pb-3'><h4 class='mb-1 fs-xs fw-normal text-uppercase text-primary'>For rent</h4><h3 class='h6 mb-1 fs-sm'><a href='real-estate-single.html' class='nav-link stretched-link'>Terra Nova Apartments | 85 sq.m</a></h3><p class='mt-0 mb-2 fs-xs text-muted'>109 Walker Street, NY 11105</p><div class='fs-sm fw-bold'><i class='fi-cash me-2 fs-base align-middle opacity-70'></i>$2,400</div></div><div class='card-footer d-flex align-items-center justify-content-center mx-2 pt-2 text-nowrap'><span class='d-inline-block px-2 fs-sm'>5<i class='fi-bed ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>2<i class='fi-bath ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>2<i class='fi-car ms-1 fs-base text-muted'></i></span></div>"
            ],
            [
                "coordinates" => [40.7279, -74],
                "className" => "custom-marker-dot",
                "popup" => "<a href='real-estate-single.html' class='d-block'><img src='/images/06.jpg' src='Image'></a><div class='card-body position-relative pb-3'><h4 class='mb-1 fs-xs fw-normal text-uppercase text-primary'>For rent</h4><h3 class='h6 mb-1 fs-sm'><a href='real-estate-single.html' class='nav-link stretched-link'>O’Farrell Rooms | 40 sq.m</a></h3><p class='mt-0 mb-2 fs-xs text-muted'>180 Thompson Street, NY 11105</p><div class='fs-sm fw-bold'><i class='fi-cash me-2 fs-base align-middle opacity-70'></i>From $550</div></div><div class='card-footer d-flex align-items-center justify-content-center mx-2 pt-2 text-nowrap'><span class='d-inline-block px-2 fs-sm'>2<i class='fi-bed ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>1<i class='fi-bath ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>0<i class='fi-car ms-1 fs-base text-muted'></i></span></div>"
            ],
            [
                "coordinates" => [40.7282, -73.996],
                "className" => "custom-marker-dot",
                "popup" => "<a href='real-estate-single.html' class='d-block'><img src='/images/06.jpg' src='Image'></a><div class='card-body position-relative pb-3'><h4 class='mb-1 fs-xs fw-normal text-uppercase text-primary'>For rent</h4><h3 class='h6 mb-1 fs-sm'><a href='real-estate-single.html' class='nav-link stretched-link'>Studio | 32 sq.m</a></h3><p class='mt-0 mb-2 fs-xs text-muted'>561 West 3rd Street, NY 11105</p><div class='fs-sm fw-bold'><i class='fi-cash me-2 fs-base align-middle opacity-70'></i>$680</div></div><div class='card-footer d-flex align-items-center justify-content-center mx-2 pt-2 text-nowrap'><span class='d-inline-block px-2 fs-sm'>1<i class='fi-bed ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>1<i class='fi-bath ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>1<i class='fi-car ms-1 fs-base text-muted'></i></span></div>"
            ],
            [
                "coordinates" => [40.7264, -73.994],
                "className" => "custom-marker-dot",
                "popup" => "<a href='real-estate-single.html' class='d-block'><img src='/images/06.jpg' src='Image'></a><div class='card-body position-relative pb-3'><h4 class='mb-1 fs-xs fw-normal text-uppercase text-primary'>For rent</h4><h3 class='h6 mb-1 fs-sm'><a href='real-estate-single.html' class='nav-link stretched-link'>Mason House | 150 sq.m</a></h3><p class='mt-0 mb-2 fs-xs text-muted'>19 Bond Street, NY 11105</p><div class='fs-sm fw-bold'><i class='fi-cash me-2 fs-base align-middle opacity-70'></i>From $4,000</div></div><div class='card-footer d-flex align-items-center justify-content-center mx-2 pt-2 text-nowrap'><span class='d-inline-block px-2 fs-sm'>3<i class='fi-bed ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>2<i class='fi-bath ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>2<i class='fi-car ms-1 fs-base text-muted'></i></span></div>"
            ],
            [
                "coordinates" => [40.724, -74.001],
                "className" => "custom-marker-dot",
                "popup" => "<a href='real-estate-single.html' class='d-block'><img src='/images/06.jpg' src='Image'></a><div class='card-body position-relative pb-3'><h4 class='mb-1 fs-xs fw-normal text-uppercase text-primary'>For rent</h4><h3 class='h6 mb-1 fs-sm'><a href='real-estate-single.html' class='nav-link stretched-link'>Office | 320 sq.m</a></h3><p class='mt-0 mb-2 fs-xs text-muted'>138 Spring Street, NY 11105</p><div class='fs-sm fw-bold'><i class='fi-cash me-2 fs-base align-middle opacity-70'></i>$8,000</div></div><div class='card-footer d-flex align-items-center justify-content-center mx-2 pt-2 text-nowrap'><span class='d-inline-block px-2 fs-sm'>2<i class='fi-bed ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>1<i class='fi-bath ms-1 fs-base text-muted'></i></span><span class='d-inline-block px-2 fs-sm'>8<i class='fi-car ms-1 fs-base text-muted'></i></span></div>"
            ]
        ]
    ];

    return response()->json($res);
});

// Payments

Route::middleware('auth:sanctum')->get('/user/stripe/payment-methods', [StripeController::class, "customerMethods"]);

Route::middleware('auth:sanctum')->get('/payment-intent', [StripeController::class, "createPaymentIntent"]);

Route::middleware('auth:sanctum')->post('/stripe/add-payment-method', [StripeController::class, "addPaymentMethod"]);

Route::middleware('auth:sanctum')->post('/coinbase/create/charge', [CoinbaseController::class, "create"]);
