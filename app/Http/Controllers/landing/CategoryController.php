<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Thesis;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'faculties' => Faculty::all(),
            'theses' => Thesis::with('faculty')->where('status', 'Publish')->paginate(32)
        ];
        return view('pages.landing.categories', $data);
    }

    public function show($slug)
    {
        $faculty = Faculty::where('slug', $slug)->firstOrFail();
        $data = [
            'faculties' => Faculty::all(),
            'faculty' => $faculty,
            'theses' => Thesis::where('faculty_id', $faculty->id)->with('faculty')->where('status', 'Publish')->paginate(32)
        ];
        return view('pages.landing.categories', $data);
    }
}
