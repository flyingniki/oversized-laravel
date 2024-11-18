<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Project extends Model implements Sitemapable
{
  use HasFactory;

  protected $fillable = [
    'title',
    'route',
    'cargo',
    'transport',
    'features',
    'description',
    'preview_img'
  ];

  public function picture()
  {
    return $this->hasMany(ProjectPicture::class);
  }

  public function toSitemapTag(): Url | string | array
  {
    return route('projects.show', $this);
  }
}
