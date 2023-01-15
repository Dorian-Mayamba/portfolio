<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Models\Category;
use Illuminate\Database\QueryException;
class AddCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function showCategoryForm(){
        return view('Admin.add-category');
    }

    public function addCategory(AddCategoryRequest $request){
        try{
            $new_category = Category::create([
                'category_name' => $request->category_name
            ]);
            $request->session()->flash('success', "the category $new_category->category_name has been added");
            return back();
        }catch(QueryException $ex){
            $request->session()->flash('danger', 'the category '. $request->category_name. " is already stored");
            return back();
        }
    }
}
