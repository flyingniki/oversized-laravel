<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
}
