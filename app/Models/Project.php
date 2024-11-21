<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Project extends Model implements Sitemapable
{
  use HasSEO;

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

  public function getDynamicSEOData(): SEOData
  {
    $pathToFeaturedImageRelativeToPublicPath = '';

    return new SEOData(
      title: $this->title,
      description: $this->description,
      image: $pathToFeaturedImageRelativeToPublicPath,
    );
  }
}
