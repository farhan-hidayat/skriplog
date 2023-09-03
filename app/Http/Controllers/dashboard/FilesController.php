<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.category.faculties');
    }

    public function create()
    {
        return view('pages.dashboard.category.faculties.create');
    }
}
