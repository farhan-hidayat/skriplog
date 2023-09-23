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
            'theses' => Thesis::all()
        ];
        return view('pages.landing.home', $data);
    }
}
