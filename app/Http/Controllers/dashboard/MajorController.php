<?php

namespace App\Http\Controllers\Dashboard;

use Alert;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\MajorRequest;
use App\Models\Faculty;
use App\Models\Major;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {

            $query = Major::with('faculty');
            $i = 1;

            return DataTables()->of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="mb-1 mr-1 btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                    Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('majors.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <a href="' . route('majors.destroy', $item->id) . '" class="dropdown-item text-danger" data-confirm-delete="true">Hapus</a>
                                </div>
                            </div>
                        </div>';
                })
                ->addColumn('no', function ($item) use (&$i) {
                    return $i++;
                })
                ->rawColumns(['action', 'no'])
                ->make();
        }

        $title = 'Hapus Data!';
        $text = "Apakah Anda Yakin Ingin Menghapus Data?";
        confirmDelete($title, $text);

        return view('pages.dashboard.category.majors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'faculties' => Faculty::all()
        ];

        return view('pages.dashboard.category.majors.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MajorRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);

        Major::create($data);

        return redirect()->route('majors.index')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        $data = [
            'major' => $major->load('faculty'),
            'faculties' => Faculty::all()
        ];

        return view('pages.dashboard.category.majors.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MajorRequest $request, Major $major)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);

        $major->update($data);

        return redirect()->route('majors.index')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        $major->delete();

        return redirect()->route('majors.index')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
