<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function showAll()
  {
    return view('projects');
  }

  public function showProject()
  {
    return view('project-detail');
  }
}
