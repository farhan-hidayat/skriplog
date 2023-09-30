<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Thesis;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'faculties' => Faculty::take(6)->get(),
            'theses' => Thesis::with('faculty')->where('status', 'Publish')->orderBy('created_at', 'desc')->take(8)->get()
        ];
        return view('pages.landing.home', $data);
    }

    public function show(Request $request, $no)
    {
        $data =
            [
                'thesis' => Thesis::with('faculty', 'major')->where('no', $no)->firstOrFail(),
            ];
        return view('pages.landing.thesis', $data);
    }
}
