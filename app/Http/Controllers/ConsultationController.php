<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
  public function request(Request $request)
  {
    $phone = $request->input('client_phone');
    $name = $request->input('client_name');
  }
}
