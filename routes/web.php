<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\TestimonialController;
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

Route::get('/', function () {
    return view('admin.layout.master');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    });
    // banner
    Route::resource('/banner', BannerController::class);
    Route::resource('/site-setting', SiteSettingController::class);
    Route::resource('/service-types', ServiceTypeController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/clients', ClientController::class);
    Route::resource('/testimonials', TestimonialController::class);
    Route::resource('/partners', PartnerController::class);
    Route::resource('/faqs', FaqController::class);
    Route::resource('/blog-types', BlogTypeController::class);
    Route::resource('/blogs', BlogController::class);
});
require __DIR__ . '/auth.php';
