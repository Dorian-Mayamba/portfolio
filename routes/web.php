<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('home'));
});

Auth::routes();

// ----------------- User Routes ------------------
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'showAboutPage'])->name('about');

// ----------------- Contact Routes ----------------

Route::get('/contact-us', [\App\Http\Controllers\ContactController::class, 'showContactForm'])->name('contact-us');

// ------------------ Projects route ------------------

Route::get('/projects', [\App\Http\Controllers\ProjectController::class,'showProjectsPage'])->name('projects');

// ------------------- Service Route -------------------

Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'showServicePage'])->name('services');