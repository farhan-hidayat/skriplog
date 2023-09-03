<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Major;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'faculty' => Faculty::count(),
            'major' => Major::count()
        ];
        return view('pages.dashboard.dashboard', $data);
    }
}
