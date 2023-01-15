<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddCategoryRequest extends FormRequest
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
            'category_name' => ['required', 'string']
        ];
    }

    /**
     * Fires an error message if a category has not been chosen
     * @return array
     */
    public function messages(): array{
        return [
            'category_name.required' => 'please choose a category'
        ];
    }


}
