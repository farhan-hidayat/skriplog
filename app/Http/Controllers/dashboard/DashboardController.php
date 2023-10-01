<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Faculty;
use App\Models\Major;
use App\Models\Thesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function account()
    {
        $data = [
            'user' => Auth::user(),
        ];
        return view('pages.dashboard.account', $data);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }
        $user->update($data);

        return redirect()->route('account')->with('toast_success', 'Your account has been updated.');
    }
}
