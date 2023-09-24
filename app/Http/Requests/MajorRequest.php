<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MajorRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:majors',
            'faculty_id' => 'required|exists:faculties,id'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Jurusan harus diisi',
            'name.unique' => 'Nama Jurusan sudah ada',
            'faculty_id.required' => 'Fakultas harus dipilih',
            'faculty_id.exists' => 'Fakultas tidak ada',
        ];
    }
}
