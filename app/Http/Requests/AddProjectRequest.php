<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class AddProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user() && Auth::user()->role->name == "admin";
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'project_name' => ['required', 'string'],
            'category_name' => ['required'],
            'project_description' => ['required'],
            'projet_logo' => ['required', 'image'],
            'project_link' => ['required'],
            'project_file' => ['required', 'file']
        ];
    }

    /**
     * return an error message if one of the conditions is not met
     * @return array
     */
    public function messages(): array
    {
        return [
            'project_name.required' => 'please enter a project name',
            'category_name.required' => 'please choose a project category',
            'project_description.required' => 'please describe your project',
            'project_logo.required' => 'please upload a project logo',
            'project_logo.image' => 'your project logo should be an image',
            'project_link.required' => 'please enter a project link',
            'project_file.required' => 'please upload a project file' 
        ];
    }
}
