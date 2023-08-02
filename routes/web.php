<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[UserController::class,'index'])->middleware('guest');

Route::get('/contact',[UserController::class,'getContactView'])->middleware('guest');

Route::get('/about',[UserController::class,'getAboutView'])->middleware('guest');

Route::get('/pr-services',[UserController::class,'getPRView'])->middleware('guest');

Route::get('/digital-marketing-services',[UserController::class,'getDigitalMarketingView'])->middleware('guest');

Route::get('/tv-interview-services',[UserController::class,'getTvInterviewView'])->middleware('guest');

Route::post('/contact/submit', [UserController::class, 'submitForm'])->name('contact.submit')->middleware('guest');

Route::get('/admin/login', [AdminController::class, 'index'])->middleware('guest');

Route::post('admin/login', [AdminController::class, 'login'])->middleware('guest')->name('login');

Route::get('/admin/contact', [AdminController::class, 'getAdminContactView'])->middleware('auth');

Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('auth');

Route::get('/admin/contact', [AdminController::class, "getContactData"])->middleware('auth');

Route::post('/update-contact', [AdminController::class,"updateContact"]);

Route::get('/404', [UserController::class,"notfound"]);
