<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\JoinController;

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
        'April 7 — School Outreach'    => $allImages->filter(fn($f) => str_starts_with($f, 'IMG_20260407')),
        'April 15 — Community Session' => $allImages->filter(fn($f) => str_starts_with($f, 'IMG_20260415')),
        'April 16 — Workshop'          => $allImages->filter(fn($f) => str_starts_with($f, 'IMG_20260416')),
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