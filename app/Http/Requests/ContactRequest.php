<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'subject' => ['required', 'string'],
            'comment' => ['required', 'string']
        ];
    }

    /**
     * return an array of error messages if one or more condition is not met
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'please enter your name',
            'email.required' => 'please enter your email',
            'subject.required' => 'a subject is required',
            'comment.required' => 'please write your comment',
            'email.email' => 'please enter a valid email',
        ];
    }
}
