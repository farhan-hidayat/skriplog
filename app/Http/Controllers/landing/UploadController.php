<?php

namespace App\Http\Controllers\Landing;

use Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\FacultyRequest;
use App\Http\Requests\ThesisRequest;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\Thesis;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        $data = [
            'faculties' => Faculty::all()
        ];

        return view('pages.landing.upload', $data);
    }

    public function edit($id)
    {
        $data = [
            'thesis' => Thesis::with('faculty', 'major')->where('no', $id)->firstOrFail(),
            'faculties' => Faculty::all(),
            'majors' => Major::all()
        ];

        return view('pages.landing.details', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $thesis = Thesis::find($id);
        $thesis->update($data);

        return redirect()->route('home')->with('toast_success', 'Data Berhasil Diubah');
    }

    public function fetchMajors(Request $request)
    {
        $data['majors'] = Major::where('faculty_id', $request->faculty_id)->get();
        return response()->json($data);
    }

    public function store(ThesisRequest $request, Thesis $thesis)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/photo', 'public');
        $data['file'] = $request->file('file')->store('assets/file', 'public');
        $data['review'] = $request->file('review')->store('assets/review', 'public');
        $data['status'] = 'Diproses';

        $thesis->create($data);

        return redirect()->route('upload')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    // public function store(FacultyRequest $request)
    // {
    //     $data = $request->all();
    //     return $data;
    //     // $data['slug'] = Str::slug($data['name']);

    //     // $data['icons'] = $request->file('icons')->store(
    //     //     'assets/faculty',
    //     //     'public'
    //     // );

    //     // Faculty::create($data);

    //     // return redirect()->route('faculties.index');
    // }
}
