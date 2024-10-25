<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
  public function showAll()
  {
    $services = Service::all();
    return view('services', compact('services'));
  }

  public function showDetail(Service $service)
  {
    return view('service-detail', compact('service'));
  }
}
