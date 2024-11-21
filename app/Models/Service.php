<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Service extends Model implements Sitemapable
{
  use HasSEO;

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
