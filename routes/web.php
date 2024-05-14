<?php

use App\Http\Controllers\CateringPageController;
use App\Http\Controllers\FacilitiesPageController;
use App\Http\Controllers\IngredientsPageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MenuPageController;
use App\Http\Controllers\MenusPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipiesPageController;
use App\Http\Controllers\ResidentsPageController;
use App\Http\Controllers\SurveyPageController;
use App\Http\Controllers\UsersPageController;
use App\Http\Controllers\FoodSafetyPageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [LandingPageController::class, 'view'])->name('root.view');
Route::get('/facilities', [FacilitiesPageController::class, 'view'])->name('facilities.view');
Route::get('/users', [UsersPageController::class, 'view'])->name('users.view');
Route::get('/residents', [ResidentsPageController::class, 'view'])->name('residents.view');
Route::get('/catering', [CateringPageController::class, 'view'])->name('catering.view');
Route::get('/catering/ingredients', [IngredientsPageController::class, 'view'])->name('catering.ingredients.view');
Route::get('/catering/recipies', [RecipiesPageController::class, 'view'])->name('catering.recipies.view');
Route::get('/catering/menus', [MenusPageController::class, 'view'])->name('catering.menus.view');
Route::get('/foodsafety/alpha', [FoodSafetyPageController::class, 'view'])->name('foodsafety.view');
Route::get('/survey', [SurveyPageController::class, 'view'])->name('survey.view');
Route::get('/menus', [MenuPageController::class, 'view'])->name('menus.view');

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
