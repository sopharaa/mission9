<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
/*http://127.0.0.1:8000/api/*/
Route::get('/userlist',[ApiController::class,'userlist']);
Route::delete('/deleteuser/{id}',[ApiController::class,'deleteuser']);
Route::put('/updateuser/{id}',[ApiController::class,'updateuser']);
Route::post('/userregister',[ApiController::class,'user_register']);
Route::post('/userlogin', [ApiController::class, 'user_login']);

Route::post('/vote',[ApiController::class,'vote']);
Route::get('/vote_list',[ApiController::class,'vote_list']);

Route::post('/contactus_form',[ApiController::class,'contactstore']);
Route::get('/contactus_list',[ApiController::class,'contactlist']);



