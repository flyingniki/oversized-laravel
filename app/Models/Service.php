<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Service extends Model implements Sitemapable
{
  use HasFactory;

  protected $fillable = [
    'title',
    'subtitle',
    'lead',
    'description',
    'preview_img',
    'img'
  ];

  public function toSitemapTag(): Url | string | array
  {
    return route('services.show', $this);
  }
}
