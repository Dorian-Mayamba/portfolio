<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class DeleteProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function deleteProject(int $id, Request $request){
        //ToDo implement this function
        Projects::find($id)->delete();

        $request->session()->flash('success', 'The project has been deleted');
        return back();
    }
}
