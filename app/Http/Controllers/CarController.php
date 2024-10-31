<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
  public function cars()
  {
    $cars = Car::all();

    return view('cars', compact('cars'));
  }
}
