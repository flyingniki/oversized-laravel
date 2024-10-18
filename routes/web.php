<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/carpark', function () {
    return view('carpark');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/project-detail', function () {
    return view('project');
});

Route::get('/projects', function () {
    return view('projects');
});
Route::get('/service-detail', function () {
    return view('service');
});

Route::get('/services', function () {
    return view('services');
});
