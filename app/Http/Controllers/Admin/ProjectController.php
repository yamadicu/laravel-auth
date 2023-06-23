<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('pages.index', compact('projects'));
    }

    public function show(){
        $singoloProject = Project::all($id);
        return view('pages.show', compact('project'));
    }
}
