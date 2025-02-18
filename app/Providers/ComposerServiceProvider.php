<?php

namespace App\Providers;

use App\Models\Car;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   */
  public function register(): void
  {
    //
  }

  /**
   * Bootstrap services.
   */
  public function boot(): void
  {
    View::composer('*', function ($view) {
      $view->with(['services' => Service::all()]);
    });

    View::composer('project-detail', function ($view) {
      $view->with(['projects' => Project::all()]);
    });

    View::composer('index', function ($view) {
      $view->with(['cars' => Car::all()]);
    });

    View::composer('projects', function ($view) {
      $view->with(['arPagination' => DB::table('projects')->paginate(6)]);
    });

    View::composer('layouts.footer', function ($view) {
      $view->with(['someServiceRefs' => Service::inRandomOrder()->limit(5)->get()]);
    });
  }
}
