<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
  public function sendRequest(Request $request)
  {
    $width = $request->input('width');
    $height = $request->input('height');
    $length = $request->input('length');
    $weight = $request->input('weight');
    $loadingAddress = $request->input('loading_address');
    $fullName = $request->input('full_name');
    $unloadingAddress = $request->input('unloading_address');
    $cargoName = $request->input('cargo_name');
    $cargoInfo = $request->input('cargo_info');
  }
}
