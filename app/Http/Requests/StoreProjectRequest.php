<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            "name"=> ['required', 'string', 'unique:projects', 'min:4', 'max:255'],
            "type_id"=>['required'],
            "image"=>['required', 'image'],
            "technologies"=> ['required', 'array'],
            "url"=> ['required', 'string', 'min:4', 'max:255'],
            "content"=> ['required', 'string', 'min:4'],
        ];
    }
}
