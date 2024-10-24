<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
  public function showAll()
  {
    return view('services');
  }

  public function showService()
  {
    return view('service-detail');
  }
}
