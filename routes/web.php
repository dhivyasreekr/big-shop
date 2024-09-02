<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class, 'login'])->name('home.login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
// Route::get('/profile',[AuthController::class, 'profile'])->name('home.profile');
Route::get('/logout', [AuthController::class, 'logout'])->name('home.logout');
Route::get('/register',[AuthController::class, 'register'])->name('home.register');
Route::post('/store', [AuthController::class, 'store'])->name('home.store');
Route::get('/forget_password',[AuthController::class, 'forget_password'])->name('home.forget_password');
Route::get('/reset_password',[AuthController::class, 'reset_password'])->name('home.reset_password');
Route::get('{any}', [AuthController::class, 'error'])->where('any', '.*');

use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/page_terms',[HomeController::class, 'page_terms'])->name('home.page_terms');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/account', [HomeController::class, 'account'])->name('home.account');
Route::get('/privacy_policy', [HomeController::class, 'privacy_policy'])->name('home.privacy_policy');
Route::get('/purchase_guide', [HomeController::class, 'purchase_guide'])->name('home.purchase_guide');

use App\Http\Controllers\InvoiceController;

Route::get('/invoice/generate-pdf/{id}', [InvoiceController::class, 'generateInvoicePdf'])->name('invoice.generate-pdf');
Route::get('/invoice/download-pdf/{id}', [InvoiceController::class, 'downloadInvoicePdf'])->name('invoice.download-pdf');
Route::get('/invoice/stream-pdf/{id}', [InvoiceController::class, 'streamInvoicePdf'])->name('invoice.stream-pdf');
Route::get('/invoice/send-email/{id}', [InvoiceController::class, 'sendInvoiceEmail'])->name('invoice.send-email');





Route::get('{any}', [HomeController::class, 'page_not_found'])->where('any', '.*');