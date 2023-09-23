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
            'theses' => Thesis::all()
        ];
        return view('pages.landing.categories', $data);
    }
}
