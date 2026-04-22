<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| PUBLIC PAGES
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/programs', 'programs')->name('programs');
Route::view('/join', 'join')->name('join');
Route::view('/impact', 'impact')->name('impact');


/*
|--------------------------------------------------------------------------
| JOIN FORMS
|--------------------------------------------------------------------------
*/

Route::post('/join/student', [JoinController::class, 'storeStudent'])->name('student.store');
Route::post('/join/partner', [JoinController::class, 'storePartner'])->name('partner.store');


/*
|--------------------------------------------------------------------------
| ADMIN AUTH (NO MIDDLEWARE)
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.auth');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


/*
|--------------------------------------------------------------------------
| ADMIN PROTECTED ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('admin')->group(function () {

    // Dashboard
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Delete
    Route::delete('/admin/student/{id}', [AdminController::class, 'deleteStudent'])->name('student.delete');
    Route::delete('/admin/partner/{id}', [AdminController::class, 'deletePartner'])->name('partner.delete');

    // View Details
    Route::get('/admin/student/{id}', [AdminController::class, 'viewStudent'])->name('student.view');
    Route::get('/admin/partner/{id}', [AdminController::class, 'viewPartner'])->name('partner.view');

});