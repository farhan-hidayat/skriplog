<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FacultyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:faculties',
            'icons.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:512'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama fakultas harus diisi',
            'name.unique' => 'Nama fakultas sudah terdaftar',
            'name.max' => 'Nama fakultas maksimal 255 karakter',
        ];
    }
}
