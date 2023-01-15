<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\EditProjectRequest;
use App\Models\Projects;
use Illuminate\Support\Facades\Storage;

class EditProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function showFilledProjectForm(int $id){
        $project = Projects::find($id);

        return view('Admin.edit-project', compact('project'));
    }

    /**
     * @
     */
    public function editProject(EditProjectRequest $request, int $id){
        //ToDo implement this function
        $project = Projects::find($id);
        $logo = Storage::putFileAs('logos', $request->file('project_logo'), $request->file('project_logo')->getClientOriginalName());
        $file = Storage::putFileAs('project_files', $request->file('project_file'), $request->file('project_file')->getClientOriginalName());
        $project->update([
            'project_name' => $request->project_name,
            'project_category' => $request->category_name,
            'project_description' => $request->project_description,
            'project_logo' => '/Storage/'. $logo,
            'project_link' => $request->project_link,
            'project_file' => '/Storage/'.$file
        ]);

        return redirect()->route('project-info', $project->id);
    }
}
