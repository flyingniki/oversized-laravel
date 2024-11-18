<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Car extends Model implements Sitemapable
{
  use HasFactory;

  protected $fillable = [
    'brand',
    'year',
    'axles',
    'own_weight',
    'full_weight',
    'load_capacity',
    'length',
    'width',
    'height',
    'preview_img',
    'img'
  ];

  public function toSitemapTag(): Url | string | array
  {
    return route('cars', $this);
  }
}
