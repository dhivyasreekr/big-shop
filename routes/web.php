<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class, 'login'])->name('home.login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/profile',[AuthController::class, 'profile'])->name('home.profile');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register',[AuthController::class, 'register'])->name('home.register');
Route::post('/store', [AuthController::class, 'store'])->name('home.store');
Route::get('/forget_password',[AuthController::class, 'forget_password'])->name('home.forget_password');

Route::get('/forgetpasswordd',[AuthController::class, 'forget_password'])->name('home.forget_password'); //partial



// use App\Http\Controllers\HomeController;

// Route::get('/',[HomeController::class,'index'])->name('home.index');

// Route::get('/privacy',[HomeController::class,'privacy'])->name('home.privacy');

// Route::get('/cookie',[HomeController::class,'cookie'])->name('home.cookie');


use App\Http\Controllers\InvoiceController;

Route::get('/invoice/generate-pdf/{id}', [InvoiceController::class, 'generateInvoicePdf'])->name('invoice.generate-pdf');
Route::get('/invoice/download-pdf/{id}', [InvoiceController::class, 'downloadInvoicePdf'])->name('invoice.download-pdf');
Route::get('/invoice/stream-pdf/{id}', [InvoiceController::class, 'streamInvoicePdf'])->name('invoice.stream-pdf');
Route::get('/invoice/send-email/{id}', [InvoiceController::class, 'sendInvoiceEmail'])->name('invoice.send-email');