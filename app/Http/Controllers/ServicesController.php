<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ServicesController extends Controller
{
  public function show()
  {
    $services = Service::all();
    return view('services', compact('services'), ['SEOData' => new SEOData(
      title: 'Услуги по перевозке негабаритных грузов',
      description: 'Описание',
    ),]);
  }

  public function detail(Service $service)
  {
    return view('service-detail', compact('service'), ['SEOData' => $service->getDynamicSEOData()]);
  }

  public function create()
  {
    return view('admin.service-create', ['SEOData' => null]);
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

      return redirect()->route('services.create')->with('message', 'Запись успешно добавлена!');
    } else {
      return redirect()->route('services.create')->with('error', 'Ошибка добавления!');
    }
  }
}
