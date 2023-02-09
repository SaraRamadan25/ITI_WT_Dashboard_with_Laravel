<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id'=>'required|unique:students|integer',
            'name'=>'required| max:255|',
            'email'=>'required|unique:students|email',
            'phone'=>'required|digits:11|unique:students',
            'image'=>'image|mimes:png,jpg',
            'department_id'=>'integer|max:255'

        ];
    }
}
