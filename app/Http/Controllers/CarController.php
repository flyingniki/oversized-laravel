<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class CarController extends Controller
{
  public function cars()
  {
    $cars = Car::all();

    return view('cars', compact('cars'), ['SEOData' => new SEOData(
      title: 'Наш автопарк',
      description: 'Описание',
    ),]);
  }

  public function create()
  {
    return view('admin.car-create', ['SEOData' => null]);
  }

  public function store(Request $request)
  {
    if ($request->isMethod('post')) {
      $previewFile = $request->file('preview_img');
      $originalFile = $request->file('img');
      $previewName = $previewFile->getClientOriginalName();
      $originalName = $originalFile->getClientOriginalName();
      $previewFolder = 'img/cars/preview';
      $originalFolder = 'img/cars/original';

      $previewPath = $previewFile->storeAs($previewFolder,  $previewName, 'public');
      $originalPath = $originalFile->storeAs($originalFolder,  $originalName, 'public');

      Car::create([
        'brand' => $request->input('brand'),
        'year' => $request->input('year'),
        'axles' => $request->input('axles'),
        'own_weight' => $request->input('own_weight'),
        'full_weight' => $request->input('full_weight'),
        'load_capacity' => $request->input('load_capacity'),
        'length' => $request->input('length'),
        'width' => $request->input('width'),
        'height' => $request->input('height'),
        'preview_img' => $previewPath,
        'img' => $originalPath
      ]);

      return redirect()->route('cars.create')->with('message', 'Запись успешно добавлена!');
    } else {
      return redirect()->route('cars.create')->with('error', 'Ошибка добавления!');
    }
  }
}
