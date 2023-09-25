<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\Thesis;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'faculty' => Faculty::count(),
            'major' => Major::count(),
            'tesisP' => Thesis::where('category', 'Tesis')->where('status', 'Publish')->count(),
            'tesisAll' => Thesis::where('category', 'Tesis')->count(),
            'skripsiP' => Thesis::where('category', 'Skripsi')->where('status', 'Publish')->count(),
            'skripsiAll' => Thesis::where('category', 'Skripsi')->count(),
            'theses' => Thesis::all()
        ];
        return view('pages.dashboard.dashboard', $data);
    }
}
