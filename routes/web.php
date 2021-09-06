<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MethodController;
use App\Models\Tender;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

// Route::get('/', function () {
//        $data=[];
//        $data['tenders']= Tender::all();
//     return view('welcomeone',$data);
// });

// Auth::routes(['verify'=>true]);
Route::resource('/', FrontendController::class);
Route::resource('user', UsersController::class);
Route::resource('department', DepartmentController::class);
Route::resource('location', LocationController::class);
Route::resource('method', MethodController::class);

Route::resource('login', AuthenticationController::class);
// Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');

Route::resource('tender', TenderController::class);
