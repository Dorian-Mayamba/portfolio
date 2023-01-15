<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    //Show the project page
    public function showProjectsPage(){
        $projects = Projects::all();

        return view('Project.Projects', compact('projects'));
    }

    /**
     * takes the project id as a parameter
     * @param int $id
     * @return Illuminate\View
     * return the project info view with the corresponding project data
     */
    public function showProjectInfo(int $id): View{
        $project = Projects::find($id);

        return view('Project.Project-info', ['project' => $project]);
    }
}
