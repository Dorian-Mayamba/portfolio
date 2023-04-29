<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response as DownloadResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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

    /**
     * @param int $id
     * @return BinaryFileResponse
     */
    public function download(int $id){
        $project = Projects::find($id);
        $project_file = $project->project_file;
        $path = public_path($project_file);
        return DownloadResponse::download($path);
    }
}
