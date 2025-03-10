<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoruserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                "name"=> "required|string|max:255",
                "email"=> "required|email",
                "age"=> "required|min:8",
                'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'password' => 'required|min:6|confirmed',
                'website' => 'required|url',
                'date' => 'required|date',
                'number' => 'required|numeric',
                





        
        
        ];
    }
}
