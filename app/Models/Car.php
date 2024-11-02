<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
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
}
