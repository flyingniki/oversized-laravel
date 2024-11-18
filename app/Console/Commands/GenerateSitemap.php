<?php

namespace App\Console\Commands;

use App\Models\Car;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'sitemap:generate';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Command description';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    $path = public_path('sitemap.xml');

    SitemapGenerator::create('http://127.0.0.1:8000')->writeToFile($path);

    Sitemap::create()
      ->add(Service::all())
      ->add(Project::all())
      ->add(Car::all())
      ->writeToFile($path);
  }
}
