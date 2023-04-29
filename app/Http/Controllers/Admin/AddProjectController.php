<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProjectRequest;
use App\Models\Projects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function showProjectForm()
    {
        return view('Admin.create-project');
    }

    public function addProject(AddProjectRequest $request): RedirectResponse{
        $logo = Storage::putFileAs('logos', $request->file('project_logo'), $request->file('project_logo')->getClientOriginalName());
        $file = Storage::putFileAs('project_files', $request->file('project_file'), $request->file('project_file')->getClientOriginalName());
        $new_project = Projects::create([
            'project_name' => $request->project_name,
            'project_category' => $request->category_name,
            'project_description' => $request->project_description,
            'project_logo' => '/storage/'.$logo,
            'project_link' => $request->project_link,
            'project_file' =>'/Storage/'.$file,
        ]);

        return redirect()->route('project-info', $new_project->id);

    }
}
