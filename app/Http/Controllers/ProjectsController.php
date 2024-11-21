<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ProjectsController extends Controller
{
  public function show()
  {
    $projects = Project::all();

    return view('projects', compact('projects'), ['SEOData' => new SEOData(
      title: 'Наши проекты',
      description: 'Описание',
    ),]);
  }

  public function detail(Project $project)
  {
    $pictures = $project->picture;

    return view('project-detail', compact('project', 'pictures'), ['SEOData' => $project->getDynamicSEOData()]);
  }

  public function create()
  {
    return view('admin.project-create', ['SEOData' => null]);
  }

  public function store(Request $request, ProjectPicture $picture)
  {
    if ($request->isMethod('post')) {
      $previewFile = $request->file('preview_img');
      $files = $request->file('img');
      $previewName = $previewFile->getClientOriginalName();
      $previewFolder = 'img/projects/preview';
      $originalFolder = 'img/projects/original';

      $originalPathes = [];

      foreach ($files as $file) {
        $originalName = $file->getClientOriginalName();
        $originalPath = $file->storeAs($originalFolder,  $originalName, 'public');
        $originalPathes[] = $originalPath;
      }

      $previewPath = $previewFile->storeAs($previewFolder,  $previewName, 'public');

      $project = Project::create([
        'title' => $request->input('title'),
        'route' => $request->input('route'),
        'cargo' => $request->input('cargo'),
        'transport' => $request->input('transport'),
        'features' => $request->input('features'),
        'description' => $request->input('description'),
        'preview_img' => $previewPath
      ]);

      foreach ($originalPathes as $path) {
        $picture->create([
          'project_id' => $project->id,
          'img' => $path
        ]);
      }

      return redirect()->route('projects.create')->with('message', 'Запись успешно добавлена!');
    } else {
      return redirect()->route('projects.create')->with('error', 'Ошибка добавления!');
    }
  }
}
