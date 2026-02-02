<?php
use App\Http\Controllers\{AdminController};

use Illuminate\Support\Facades\Mail;

Route::get('/test-mail', function () {
    Mail::raw('Laravel Gmail SMTP working!', function ($msg) {
        $msg->to('shubhamsahu707@gmail.com')
            ->subject('SMTP Test');
    });

    return 'Mail sent';
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class,'index'])->name('admin-dashboard');

});
