<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\GymController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\VisitController;
use App\Models\Payment;
use App\Models\Subscription;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




//------- User routes


Route::get('/home', [SubscriptionController::class, 'inHome'])->name('home');


 Route::get('/checkout/{id}', [PaymentController::class, 'displayCheck'])->name('checkout');

 Route::post('/addsubscriber', [PaymentController::class, 'addSubscriber'])->name('addsubscriber');


 Route::post('/usecoupon', [CouponController::class, 'usecoupon'])->name('usecoupon');



 Route::get('/allGyms', [GymController::class, 'showAllGyms'])->name('allGyms');

 Route::post('/filterGyms', [GymController::class, 'filterGyms'])->name('filterGyms');

 Route::get('/singleGym/{id}', [GymController::class, 'showSingleGym'])->name('singleGym');


 Route::post('/savecode', [VisitController::class, 'savecode'])->name('savecode');



 Route::get('/registerGym', [GymController::class, 'registerGym'])->name('registerGym');
 Route::post('/storeGym', [GymController::class, 'storeGym'])->name('storeGym');



 Route::get('/about-us', function () {
    return view('user_views.pages.aboutus');
})->name('aboutus');


//------contact

 Route::get('contact-us', [ContactController::class, 'index'])->name('contactus');
 Route::post('contact-us', [ContactController::class, 'store'])->name('contactus.store');


 //------google

 Route::get('auth/google',[GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[GoogleAuthController::class, 'callbackGoogle']);


// paypal

Route::match(['get', 'post'],'paypal/payment/{total}', [PaypalController::class ,'payment'])->name('paypal');
Route::get('paypal/success', [PaypalController::class ,'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaypalController::class ,'cancel'])->name('paypal_cancel');


// gym interface

Route::get('/gymInterface', [VisitController::class, 'gyminterface']);
Route::post('/visitGym', [VisitController::class, 'visitGym'])->name('visitGym');


//-------Admin routes


Route::get('/admin_home', [AdminLoginController::class, 'admin_home'])->name('admin_home')->middleware('isLogedin');


Route::resource('/user', UserController::class)->middleware('isLogedin');
Route::resource('/admin', AdminController::class)->middleware('isLogedin');
Route::resource('/type', TypeController::class)->middleware('isLogedin');
Route::resource('/time', TimeController::class)->middleware('isLogedin');
Route::resource('/gym', GymController::class)->middleware('isLogedin');
Route::resource('/subscription', SubscriptionController::class)->middleware('isLogedin');
Route::resource('/subscriber', SubscriberController::class)->middleware('isLogedin');
Route::resource('/coupon', CouponController::class)->middleware('isLogedin');


//adminLogin
Route::get('/adminLogin', [AdminLoginController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLoginPost', [AdminLoginController::class, 'adminLoginPost'])->name('adminLoginPost');

//adminLogout
Route::get('/adminLogout', [adminLoginController::class, 'adminLogout'])->name('adminLogout');
Route::get('/dash', [adminLoginController::class, 'adminLogout']);


