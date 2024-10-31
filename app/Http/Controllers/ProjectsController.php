<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function showAll()
  {
    $projects = Project::all();

    return view('projects', compact('projects'));
  }

  public function showDetail(Project $project)
  {
    $pictures = $project->picture;

    return view('project-detail', compact('project', 'pictures'));
  }
}
