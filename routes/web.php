<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ConsultationController;
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

Route::controller(MainController::class)->group(function () {
  Route::get('/', 'index')->name('main.index');
  Route::get('/about', 'about')->name('main.about');
  Route::get('/contacts', 'contacts')->name('main.contacts');
});

Route::controller(CarController::class)->group(function () {
  Route::get('/cars', 'cars')->name('cars');
  Route::get('/cars/create', 'create')->name('cars.create');
  Route::post('/cars/store', 'store')->name('cars.store');
});

Route::controller(ProjectsController::class)->group(function () {
  Route::get('/projects', 'show')->name('projects.show');
  Route::get('/projects/{project}', 'detail')
    ->where('project', '[0-9]+')
    ->name('project.detail');
  Route::get('/projects/create', 'create')->name('projects.create');
  Route::post('/projects/store', 'store')->name('projects.store');
});

Route::controller(ServicesController::class)->group(function () {
  Route::get('/services', 'show')->name('services.show');
  Route::get('/services/{service}', 'detail')
    ->where('service', '[0-9]+')
    ->name('service.detail');
  Route::get('/services/create', 'create')->name('services.create');
  Route::post('/services/store', 'store')->name('services.store');
});

Route::post('/consultation', [ConsultationController::class, 'request'])->name('consultation');

Route::post('/calculator', [CalculatorController::class, 'request'])->name('calculator');
