<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

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


/*
|--------------------------------------------------------------------------
| JOIN FORMS
|--------------------------------------------------------------------------
*/

Route::post('/join/student', [JoinController::class, 'storeStudent'])->name('student.store');
Route::post('/join/partner', [JoinController::class, 'storePartner'])->name('partner.store');

//impact 
Route::get('/impact', function () {
    return view('impact');
})->name('impact');


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

// // Dashboard
// Route::get('/admin', [AdminController::class, 'dashboard'])
//     ->middleware('admin')
//     ->name('admin.dashboard');

// // Auth
// Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
// Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.auth');
// Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// // Delete
// Route::delete('/admin/student/{id}', [AdminController::class, 'deleteStudent'])->name('student.delete');
// Route::delete('/admin/partner/{id}', [AdminController::class, 'deletePartner'])->name('partner.delete');

// // View Details
// Route::get('/admin/student/{id}', [AdminController::class, 'viewStudent'])->name('student.view');
// Route::get('/admin/partner/{id}', [AdminController::class, 'viewPartner'])->name('partner.view');

