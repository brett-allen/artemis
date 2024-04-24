<?php

use App\Http\Controllers\CateringPageController;
use App\Http\Controllers\FacilitiesPageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResidentsPageController;
use App\Http\Controllers\SurveyPageController;
use App\Http\Controllers\UsersPageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [LandingPageController::class, 'view'])->name('root.view');
Route::get('/facilities', [FacilitiesPageController::class, 'view'])->name('facilities.view');
Route::get('/users', [UsersPageController::class, 'view'])->name('users.view');
Route::get('/residents', [ResidentsPageController::class, 'view'])->name('residents.view');
Route::get('/catering', [CateringPageController::class, 'view'])->name('catering.view');
Route::get('/survey', [SurveyPageController::class, 'view'])->name('survey.view');

// the OG route set
//
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
