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

//impact 
Route::get('/impact', function () {
    return view('impact');
})->name('impact');

//impact 
Route::get('/impact', function () {
    return view('impact');
})->name('impact');