<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ShowTweetController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TweetLikesController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShareButtonController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Models\Transaction;
use Jorenvh\Share\ShareFacade as Share;


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


//landing page
Route::get('/', function () {
    $user = auth()->user();
    return view('landing');
});

//contact form
Route::post('/contact-form', [ContactController::class, 'store']);

// register login
Route::get('/join', function () {
    $user = auth()->user();
    return view('innotive', [
        'user' => $user
    ]);
});


// Authorized Users
Route::middleware(['auth', 'verified'])->group(function () {
    //Timeline
    Route::resource('tweets', TweetController::class);
    Route::get('/tweets/{tweet}', [TweetController::class, 'show'])->name('tweets.show');
    Route::post('tweets/{tweet}/like', [TweetLikesController::class, 'store']);
    Route::delete('tweets/{tweet}/like', [TweetLikesController::class, 'destroy']);

    //Profile
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

    //Explore
    Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
    Route::get('/explore/search', [UserController::class, 'search'])->name('explore.search');

    
    
    // Category
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');



    //comments

    Route::post('tweets/{tweet}/comment', [CommentController::class, 'store'])->name('tweets.comment.store');
    Route::get('tweets/{tweet}/comment', [CommentController::class, 'index'])->name('comment.index');
    Route::delete('tweets/{tweet}/comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');

    //share
    Route::get('/tweets/{tweet}/share', [ShareButtonController::class, 'share'])->name('tweets.share');

    // donation

    Route::get('tweets/{tweet}/donate', [DonationController::class, 'index'])->name('donate.index');
    Route::post('tweets/{tweet}/donate', [TransactionController::class, 'donate'])->name('donate');


    //notif
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications');


    
    // Wallet
    Route::get('/wallet', [WalletController::class, 'index'])->name('wallet.index');
    Route::get('/wallet/topup', [TopupController::class, 'index'])->name('topup');
    Route::post('/wallet/topup', [TransactionController::class, 'topUp'])->name('wallet.topup');

    // traffic
    Route::get('/traffic', [TweetController::class, 'showTraffic'])->name('traffic');
    
});



// login with googlw and github via socialite 
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);



//Forget Password

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


// Include ROute dari auth.php
require __DIR__.'/auth.php';