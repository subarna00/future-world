<?php

use App\Http\Controllers\AboutInfoController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogContentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsNoticeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceQueryController;
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
    Route::resource('/news', NewsNoticeController::class);
    Route::resource('/blog-content', BlogContentController::class);
    Route::get('/service-query-form', [ServiceQueryController::class, 'index'])->name('serviceQuery');
    Route::get('/contact-forms', [ContactController::class, 'index'])->name('contactForm');
    Route::resource('/aboutus', AboutUsController::class);
    Route::resource('/about-info', AboutInfoController::class);
    Route::resource('/project', ProjectController::class);
});
// frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/service/{slug}', [FrontendController::class, 'serviceDetailPage'])->name('serviceDetailPAge');
Route::get('/services', [FrontendController::class, 'services']);
Route::post('/send-query', [FrontendController::class, 'sendQuery'])->name('sendQuery');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/contact', [FrontendController::class, 'contactPage'])->name('contactPage');
Route::post('/send-message', [ContactController::class, 'store'])->name('sendMessage');
Route::get('/blogs', [FrontendController::class, 'blogs']);
Route::get('/news', [FrontendController::class, 'news']);
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetailPage'])->name('blogDetailPAge');
Route::get('/about-us', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');

require __DIR__ . '/auth.php';
