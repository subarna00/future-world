<?php

use App\Http\Controllers\AboutInfoController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogContentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsNoticeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceQueryController;
use App\Http\Controllers\ServiceTypeController;
use App\Http\Controllers\ServiceTypeSubController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
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

Route::get('/cache', function () {
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('optimize');
    phpinfo();
    return "ASdasd";
});
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    });
    // banner
    Route::resource('/banner', BannerController::class);
    Route::resource('/site-setting', SiteSettingController::class);
    Route::resource('/service-types', ServiceTypeController::class);
    Route::resource("/service-sub-type", ServiceTypeSubController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/clients', ClientController::class);
    Route::resource('/testimonials', TestimonialController::class);
    Route::resource('/partners', PartnerController::class);
    Route::resource('/faqs', FaqController::class);
    Route::resource('/blog-types', BlogTypeController::class);
    Route::resource('/blogs', BlogController::class);
    Route::resource('/news', NewsNoticeController::class);
    Route::resource('/blog-content', BlogContentController::class);
    Route::get('/course-query-form', [ServiceQueryController::class, 'index'])->name('serviceQuery');
    Route::get('/contact-forms', [ContactController::class, 'index'])->name('contactForm');
    Route::resource('/aboutus', AboutUsController::class);
    Route::resource('/about-info', AboutInfoController::class);
    Route::resource('/project', ProjectController::class);
    Route::resource('/teams', TeamController::class);
    Route::get('/users', [UserController::class, 'users'])->name('users');
    Route::resource("/courses", CourseController::class);
});
// frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/services', [FrontendController::class, 'services']);
Route::get('/service/{slug}', [FrontendController::class, 'serviceDetailPage'])->name('serviceDetailPAge');
Route::get('/service/{service}/{slug}', [FrontendController::class, 'serviceTypeDetailPage'])->name('serviceTypeDetailPage');
Route::get('/service/{service}/{type}/{slug}', [FrontendController::class, 'serviceSubTypeDetailPage'])->name('serviceSubTypeDetailPage');
Route::post('/send-query', [FrontendController::class, 'sendQuery'])->name('sendQuery');
// Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/contact-us', [FrontendController::class, 'contactPage'])->name('contactPage');
Route::post('/send-message', [ContactController::class, 'store'])->name('sendMessage');
Route::get('/blogs', [FrontendController::class, 'blogs']);
Route::get('/blogs/categories/{slug}', [FrontendController::class, "blogCategory"])->name("blogCategory");
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetailPage'])->name('blogDetailPAge');
// Route::get('/news', [FrontendController::class, 'news']);
Route::get('/about-us', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/teams', [FrontendController::class, 'teams'])->name('teams');
Route::get("/courses", [FrontendController::class, "courses"])->name("courses");
Route::get("/projects", [FrontendController::class, "projects"])->name("projects");
Route::get("/course/{slug}", [FrontendController::class, "courseDetail"])->name("courseDetail");
// Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
// Route::get('/clients', [FrontendController::class, 'clients'])->name('clients');

require __DIR__ . '/auth.php';
