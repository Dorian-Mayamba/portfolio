<?php

use App\Http\Controllers\Admin\AddCategoryController;
use App\Http\Controllers\Admin\AddProjectController;
use App\Http\Controllers\Admin\DeleteProjectController;
use App\Http\Controllers\Admin\EditProjectController;
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
Route::post('/contact-us', [\App\Http\Controllers\ContactController::class, 'sendMessage']);
// ------------------ Projects route ------------------

Route::get('/projects', [\App\Http\Controllers\ProjectController::class,'showProjectsPage'])->name('projects');
Route::get('project/{id}', [\App\Http\Controllers\ProjectController::class, 'showProjectInfo'])->name('project-info');
// ------------------- Service Route -------------------

Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'showServicePage'])->name('services');


// ------------------- Admin route ------------- //

Route::get('/admin/create-project', [AddProjectController::class, 'showProjectForm'])->name('create-project');
Route::post('/admin/create-project', [AddProjectController::class, 'addProject']);
Route::get('/edit-project/{id}', [EditProjectController::class,'showFilledProjectForm'])->name('edit-project');
Route::post('/edit-projetct/{id}', [EditProjectController::class, 'editProject']);
Route::delete('/delete-project/{id}', [DeleteProjectController::class, 'deleteProject'])->name('deleteProject');
Route::get('/admin/create-category', [AddCategoryController::class, 'showCategoryForm'])->name('create-category');
Route::post('/admin/create-category', [AddCategoryController::class, 'addCategory']);