<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();
        return view('projects.index', compact('project'));
    }

    public function create(){
        return view('projects.create');
    }

    public function store(){
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }
}
