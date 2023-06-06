<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\TweetLikesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\Auth\SocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\TopupController;


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
    return view('innotive');
});

Route::resource('tweets', TweetController::class);
Route::get('users/{user:username}', [UserController::class, 'show'])
->middleware('auth')
->name('users.show');
Route::post('users/{user:username}/follow', [FollowController::class, 'store'])
->middleware('auth');
Route::get('users/{user:username}/edit', [userController::class, 'edit'])
->middleware('auth')
->name('users.edit');
Route::patch('users/{user:username}', [userController::class, 'update'])
->middleware('auth')
->name('users.update');
Route::get('/explore', [ExploreController::class, 'index']);
Route::post('tweets/{tweet}/like', [TweetLikesController::class, 'store']);
Route::delete('tweets/{tweet}/like', [TweetLikesController::class, 'destroy']);
Route::get('/explore/search', [UserController::class, 'search'])->name('explore.search');


// socialite
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);

// wallet
Route::middleware(['auth'])->group(function () {
    // ...
    Route::get('/wallet', [WalletController::class, 'index'])->name('wallet.index');
    Route::get('/wallet/topup', [TopupController::class, 'index'])->name('topup');
    // Route::get('/wallet/topup', [WalletController::class, 'topUp'])->name('wallet.topup');
    // Route::post('/wallet/topup', [WalletController::class, 'storeTopUp'])->name('wallet.topup.store');
    // ...
});

// donation

Route::get('tweets/{tweet}/donate', [DonationController::class, 'index'])->name('donate.index');
Route::get('tweets/{tweet}/donate/pay', [DonationController::class, 'showPay'])->name('donate.pay');
// Route::get('tweets/{tweet}/donate', [DonationController::class, 'index'])->name('donate.pay');
Route::post('tweets/{tweet}/donate', [DonationController::class, 'store'])->name('donate');


//category



Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');


require __DIR__.'/auth.php';