<?php

use App\Http\Controllers\{ProfileController,AdminController,MailSenderController};
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin-login', function () {
    return view('admin.login');
});
/////admin login
Route::post('/admin-login', [AdminController::class,'login'])->name('admin-login');

Route::get('/admin-reg', function () {
    return view('admin.register');
});
Route::post('/admin-reg', [AdminController::class,'store'])->name('admin-reg');


Route::get('/dashboard', [ProductController::class,'index'])->name('dashboard');

Route::get('/productshow/{id}', [ProductController::class,'show']);

 Route::post("send-mail",[MailSenderController::class,'sendMail'])->name("send-mail");
Route::get('/qr', [MailSenderController::class, 'qrCode']);
Route::get('/sendMailopen', [MailSenderController::class, 'sendMailopen']);

Route::middleware('auth','auth:admin')->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
