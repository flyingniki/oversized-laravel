<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class MainController extends Controller
{
  public function index()
  {
    return view('index', ['SEOData' => new SEOData(
      title: 'Перевозки негабаритных грузов по России',
      description: 'Описание',
    ),]);
  }

  public function about()
  {
    return view('about', ['SEOData' => new SEOData(
      title: 'О нас',
      description: 'Описание',
    ),]);
  }

  public function contacts()
  {
    return view('contacts', ['SEOData' => new SEOData(
      title: 'Наши контакты',
      description: 'Описание',
    ),]);
  }
}
