<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarparkController extends Controller
{
  public function cars()
  {
    return view('carpark');
  }
}
