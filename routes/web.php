<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Student\Auth\NewMemberRegistration;
use App\Livewire\Student\Auth\UserRegistration;

Route::get('/', function () {
    return view('home.index');
})->name('home');

// Student Authentication Routes
Route::get('/new-member-registration', NewMemberRegistration::class)->name('new-member-registration');
Route::get('/email/verify/{token}', [NewMemberRegistration::class, 'verifyEmail'])->name('email.verify');
Route::get('/user-registration', UserRegistration::class)->name('user-registration');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
