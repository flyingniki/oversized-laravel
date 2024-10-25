<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('main.index');

Route::get('/about', [MainController::class, 'about'])->name('main.about');

Route::get('/cars', [CarController::class, 'cars'])->name('cars');

Route::get('/contacts', [MainController::class, 'contacts'])->name('main.contacts');

Route::get('/projects/{project}', [ProjectsController::class, 'showDetail'])->name('project.show');

Route::get('/projects', [ProjectsController::class, 'showAll'])->name('projects.all');

Route::get('/services/{service}', [ServicesController::class, 'showDetail'])->name('service.show');

Route::get('/services', [ServicesController::class, 'showAll'])->name('services.all');
