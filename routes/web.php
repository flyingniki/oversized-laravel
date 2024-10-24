<?php

use App\Http\Controllers\CarparkController;
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

Route::get('/carpark', [CarparkController::class, 'cars'])->name('carpark');

Route::get('/contacts', [MainController::class, 'contacts'])->name('main.contacts');

Route::get('/project-detail', [ProjectsController::class, 'showProject'])->name('project.show');

Route::get('/projects', [ProjectsController::class, 'showAll'])->name('projects.all');

Route::get('/service-detail', [ServicesController::class, 'showService'])->name('service.show');

Route::get('/services', [ServicesController::class, 'showAll'])->name('services.all');
