<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
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

Route::get('/impact', function () {
    $allImages = collect(File::files(public_path('images/gallery')))
        ->map(fn($file) => $file->getFilename())
        ->values();

    $groups = [
        'April 7 — School Outreach'  => $allImages->filter(fn($f) => str_starts_with($f, 'IMG_20260407')),
        'April 15 — Community Session' => $allImages->filter(fn($f) => str_starts_with($f, 'IMG_20260415')),
        'April 16 — Workshop'        => $allImages->filter(fn($f) => str_starts_with($f, 'IMG_20260416')),
    ];

    return view('impact', compact('groups'));
})->name('impact');

/*
|--------------------------------------------------------------------------
| JOIN FORMS
|--------------------------------------------------------------------------
*/
Route::post('/join/student', [JoinController::class, 'storeStudent'])->name('student.store');
Route::post('/join/partner', [JoinController::class, 'storePartner'])->name('partner.store');

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
Route::get('/admin', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/student/{id}', [AdminController::class, 'viewStudent'])->name('student.view');
Route::delete('/admin/student/{id}', [AdminController::class, 'deleteStudent'])->name('student.delete');
Route::get('/admin/partner/{id}', [AdminController::class, 'viewPartner'])->name('partner.view');
Route::delete('/admin/partner/{id}', [AdminController::class, 'deletePartner'])->name('partner.delete');