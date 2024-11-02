<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
  public function show()
  {
    $services = Service::all();
    return view('services', compact('services'));
  }

  public function detail(Service $service)
  {
    return view('service-detail', compact('service'));
  }

  public function create()
  {
    return view('admin.service-create');
  }

  public function store(Request $request)
  {
    if ($request->isMethod('post')) {
      $previewFile = $request->file('preview_img');
      $originalFile = $request->file('img');
      $previewName = $previewFile->getClientOriginalName();
      $originalName = $originalFile->getClientOriginalName();
      $previewFolder = 'img/services/preview';
      $originalFolder = 'img/services/original';

      $previewPath = $previewFile->storeAs($previewFolder,  $previewName, 'public');
      $originalPath = $originalFile->storeAs($originalFolder,  $originalName, 'public');

      Service::create([
        'title' => $request->input('title'),
        'subtitle' => $request->input('subtitle'),
        'lead' => $request->input('lead'),
        'description' => $request->input('description'),
        'preview_img' => $previewPath,
        'img' => $originalPath
      ]);

      return 'Success';
    } else {
      return 'Fail';
    }
  }
}
