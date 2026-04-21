<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/programs', function () {
    return view('programs');
})->name('programs');

Route::get('/join', function () {
    return view('join');
})->name('join');

Route::post('/join/student', [JoinController::class, 'storeStudent'])->name('student.store');

Route::post('/join/partner', [JoinController::class, 'storePartner'])->name('partner.store');

Route::get('/admin', function () {

    $students = \App\Models\Student::latest()->get();
    $partners = \App\Models\Partner::latest()->get();

    return view('admin.dashboard', compact('students', 'partners'));

})->middleware('admin')->name('admin.dashboard');


// login routes
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.auth');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');