<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Candidate\CanProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VoteController;
use App\Models\Contact;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Support\Facades\Route;

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
URL::forceScheme('https');
Route::get('/', function () {
    return view('voter.index');
})->name('front.index');

Route::get('/master', function () {
    return view('voter.layout.master');
});
Route::get('aboutus', function () {
    return view('voter.page.aboutus');
})->name('front.aboutus')->middleware('auth');
Route::get('faq', function () {
    return view('voter.page.faq');
})->name('front.faq');

Route::get('calendar', function () {
    return view('voter.page.calendar');
})->name('front.calendar');
Route::get('login', function () {
    return view('voter.page.login');
})->name('login');
Route::get('register', function () {
    return view('voter.page.register');
})->name('register');
Route::get('voting', function () {
    $can = User::where('role','candidate')->get();
    return view('voter.page.vote',compact('can'));
})->name('front.vote')->middleware('auth');
Route::get('result', function () {
    return view('voter.page.result');
})->name('front.result')->middleware('auth');
Route::get('official', function () {
    return view('voter.page.official');
})->name('front.offical');

Route::get('can', function () {
    $candidates = User::where('role','candidate')->get();
    return view('voter.page.candidate',compact('candidates'));
})->name('front.cadidate')->middleware('auth','candidate');

Route::post('/contactus',[ContactController::class,'store'])->name('contact.post');

Route::post('/vote',[VoteController::class,'store'])->name('front_vote');

#Candidates Route

Route::get('candidate/index', function () {
    return view('candidate.page.index');
})->middleware('candidate');
Route::get('candidate/master', function () {
    return view('candidate.layout.master');
})->middleware('candidate');
Route::get('candidate/result', function () {
    return view('candidate.page.result');
})->middleware('candidate');
Route::get('candidate/description', function () {
    return view('candidate.page.desc');
})->middleware('candidate');
Route::get('candidate/news', function () {
    return view('candidate.page.news');
})->middleware('candidate');
Route::get('candidate/login', function () {
    return view('candidate.page.login');
})->middleware('candidate');
Route::get('candidate/register', function () {
    return view('candidate.page.register');
})->middleware('candidate');

Route::get('candidate/profile', [CanProfileController::class,'index'])->name('can.profile')->middleware('candidate');
Route::get('candidate/editprofile/{id}', [CanProfileController::class,'edit'])->name('editprofile')->middleware('candidate');
Route::put('candidate/editprofile/{id}', [CanProfileController::class,'update'])->name('updateprofile')->middleware('candidate');



#Admin route


Route::get('/admin/index', function () {
    return view('admin.index');
});

Route::get('/admin/user',[UserController::class,'index'])->name('admin.user');
Route::get('/admin/user/{id}',[UserController::class,'edit'])->name('admin.edit');
Route::put('/admin/user/{id}',[UserController::class,'update'])->name('admin.update');
Route::delete('/admin/user/{id}',[UserController::class,'destroy'])->name('admin.destroy');

Route::get('/admin/voter', function () {
    $voter = Vote::with('user','candidate')->get();
    return view('admin.page.voter',compact('voter'));
});

Route::get('/admin/suggestion', function () {
    $hh = Contact::all();
    return view('admin.page.suggestion',compact('hh'));
});

Route::get('/admin/result', function () {
    return view('admin.page.result');
});

Route::get('/admin/offical', function () {
    return view('admin.page.offical');
});


Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
