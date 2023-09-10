<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThesisRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'nim' => 'required|string',
            'faculty_id' => 'required|exists:faculties,id',
            'major_id' => 'required|exists:majors,id',
            'title' => 'required|string',
            'abstract' => 'required|string',
            'isrnissn' => 'nullable|string',
            'no' => 'nullable|string',
            'category' => 'required|string',
            'date' => 'required|integer',
            'metodology' => 'required|string',
            'collation' => 'nullable|string',
            'photo.*' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'file.*' => 'required|docs|mimes:pdf|max:5120',
            'status' => 'nullable|string',
            'position' => 'nullable|string'
        ];
    }
}
