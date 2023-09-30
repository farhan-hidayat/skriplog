<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\Thesis;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'faculties' => Faculty::all(),
            'majors' => Major::all(),
            'theses' => Thesis::with('faculty')->where('status', 'Publish')->orderBy('created_at', 'desc')->paginate(32)
        ];
        return view('pages.landing.categories', $data);
    }

    public function show($slug)
    {
        $faculty = Faculty::where('slug', $slug)->firstOrFail();
        $data = [
            'faculties' => Faculty::all(),
            'majors' => Major::where('faculty_id', $faculty->id)->get(),
            'faculty' => $faculty,
            'theses' => Thesis::where('faculty_id', $faculty->id)->with('faculty')->where('status', 'Publish')->orderBy('created_at', 'desc')->paginate(32)
        ];
        return view('pages.landing.categories', $data);
    }

    public function search(Request $request)
    {
        $query = Thesis::with('faculty', 'major')
            ->where('title', 'like', '%' . $request->search . '%')
            ->where('status', 'Publish')
            ->orderBy('created_at', 'desc');

        if ($request->major) {
            $query->where('major_id', $request->major);
        }

        $data = [
            'faculties' => Faculty::all(),
            'majors' => Major::all(),
            'theses' => $query->paginate(32)
        ];
        return view('pages.landing.categories', $data);
    }
}
