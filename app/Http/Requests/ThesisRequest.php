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
            'email' => 'required|string|email|max:255|unique:theses',
            'nim' => 'required|string|unique:theses',
            'faculty_id' => 'required|exists:faculties,id',
            'major_id' => 'required|exists:majors,id',
            'title' => 'required|string',
            'abstract' => 'required|string',
            'isrnissn' => 'nullable|string',
            'no' => 'nullable|string',
            'category' => 'required|string',
            'date' => 'required|string',
            'metodology' => 'required|string',
            'collation' => 'nullable|string',
            'photo.*' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'file.*' => 'required|docs|mimes:pdf|max:5120',
            'review.*' => 'required|docs|mimes:pdf|max:5120',
            'status' => 'nullable|string',
            'position' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'photo.*.required' => 'Photo is required',
            'photo.*.image' => 'Photo must be an image',
            'photo.*.mimes' => 'Photo must be a jpeg, png, or jpg',
            'photo.*.max' => 'Photo must be less than 1MB',
            'file.*.required' => 'File is required',
            'file.*.docs' => 'File must be a document',
            'file.*.mimes' => 'File must be a pdf',
            'file.*.max' => 'File must be less than 5MB',
            'review.*.required' => 'File is required',
            'review.*.docs' => 'File must be a document',
            'review.*.mimes' => 'File must be a pdf',
            'review.*.max' => 'File must be less than 5MB',
            'name.required' => 'Name is required',
            'name.string' => 'Name must be a string',
            'name.max' => 'Name must be less than 255 characters',
            'email.required' => 'Email is required',
            'email.string' => 'Email must be a string',
            'email.email' => 'Email must be a valid email',
            'email.max' => 'Email must be less than 255 characters',
            'email.unique' => 'Email must be unique',
            'nim.required' => 'Nim is required',
            'nim.unique' => 'Nim must be unique',
            'title.required' => 'Title is required',
            'abstract.required' => 'Abstract is required',
            'date.required' => 'Date is required',
            'metodology.required' => 'Metodology is required',
        ];
    }
}
